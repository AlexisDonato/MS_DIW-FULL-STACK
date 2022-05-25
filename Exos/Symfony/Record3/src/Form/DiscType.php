<?php

namespace App\Form;

use App\Entity\Disc;
use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\File;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DiscType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'required' => true])
            ->add('year',TextType::class, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]{4}$/',
                        'message' => 'Invalid numbers. Only 4 digits.'])],
                'required' => true])
            ->add('label', TextType::class, [
                'required' => true])
            ->add('genre', TextType::class, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Invalid chars.'
                    ]),
                ],
                'required' => true,
            ])
            ->add('picture', FileType::class, [
                'mapped' => false,
                'required' => false,
                'constraints' => [
                    new File ([
                        'mimeTypes' => [
                            'image/jpeg',
                            'image/jpg',
                            'image/png'
                        ],
                        'mimeTypesMessage' => 'Invalid type of file',
                    ])]
            ])
            ->add('price', TextType::class, [
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]*(\.[0-9]{1,2})?$/',
                        'message' => 'Invalid numbers'
                    ]),
                ],
                'required' => true,
            ])
            ->add('artist', EntityType::class, [
                'class' => Artist::class, 
                'query_builder' => function (ArtistRepository $ar) {
                    return $ar->createQueryBuilder('a')
                                ->orderBy('a.name', 'asc');
                            },
                'choice_label' => 'name',
                'required' => true,])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Disc::class,
        ]);
    }
}
