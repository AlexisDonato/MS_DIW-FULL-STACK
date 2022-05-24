<?php

namespace App\Form;

use App\Entity\Disc;
use App\Entity\Artist;
use App\Repository\ArtistRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AddDiscType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Title',
                'attr' => [
                    'placeholder' => 'Disc title',
                ],
                'row_attr' => [
                    'class' => 'ml-3 mr-3',
                ],
                'required' => true,
            ])
            ->add('year', TextType::class, [
                'label' => 'Year',
                'attr' => [
                    'placeholder' => 'Year',
                ],
                'row_attr' => [
                    'class' => 'ml-3 mr-3',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[0-9]{4}$/',
                        'message' => 'Invalid numbers. Only 4 digits.'
                    ]),
                ],
                'required' => true,
            ])
            ->add('label', TextType::class, [
                'label' => 'Label',
                'attr' => [
                    'placeholder' => 'Disc label',
                ],
                'row_attr' => [
                    'class' => 'ml-3 mr-3',
                ],
                'required' => true,
            ])
            ->add('genre', TextType::class, [
                'label' => 'Genre',
                'attr' => [
                    'placeholder' => 'Disc genre',
                ],
                'row_attr' => [
                    'class' => 'ml-3 mr-3',
                ],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^[A-Za-zéèàçâêûîôäëüïö\_\-\s]+$/',
                        'message' => 'Invalid chars.'
                    ]),
                ],
                'required' => true,
            ])
            ->add('price', TextType::class, [
                'label' => 'Price',
                'attr' => [
                    'placeholder' => 'Price',
                ],
                'row_attr' => [
                    'class' => 'ml-3 mr-3',
                ],
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
                'attr' => [
                    'class' => 'form-select mb-2',
                ],
                'row_attr' => [
                    'class' => 'col-6 ml-3 mr-3',
                ],
                'label' => 'Artist',
                'label_attr' => [
                    'class' => 'col-form-label'
                ],
                'help' => 'Choose the artist',
                'required' => true,])
            ->add('picture', FileType::class, [
                'label' => 'Picture',
                'attr' => [
                    'placeholder' => 'Disc Picture',
                ],
                'row_attr' => [
                    'class' => 'col-6 ml-3 mr-3',
                ],
                'help' => 'Browse to choose the picture here',
                'required' => true,
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Disc::class,
        ]);
    }
}