<?php

namespace App\Form;

use App\Entity\Contact;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class, [
                'required' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
                'attr' => ['class' => 'FirstNameField'],
                    'constraints' => [
                        new Regex([
                            'pattern' => "/^([A-Za-zàáâäçèéêëìíîïñòóôöùúûü]+(( |')[A-Za-zàáâäçèéêëìíîïñòóôöùúûü]+)*)+([-]([A-Za-zàáâäçèéêëìíîïñòóôöùúûü]+(( |')[A-Za-zàáâäçèéêëìíîïñòóôöùúûü]+)*)+)*$/",
                            'message' => 'Invalid first name (numbers are not granted)'
                        ]),
                    ]
                ])

            ->add('email', TextType::class, [
                'required' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
                'attr' => ['class' => 'EmailField'],
                'constraints' => [
                    new Regex([
                        'pattern' => '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/',
                        'message' => 'Invalid email'
                    ]),
                ]
            ])

            ->add('subject', ChoiceType::class, [
                'choices' => [
                    'Connexion' => 'Connexion',
                    'Catégorie(s)' => 'Catégorie(s)',
                    'Produit(s)' => 'Produit(s)',
                    'Panier(s)' => 'Panier(s)',
                    'Commande(s)' => 'Commande(s)',
                    'Autre' => 'Autre'
                ],
                'mapped' => true,
                'multiple' => true,
                'help' => 'Maintenez Ctrl enfoncé pour un choix multiple',
                'required' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
                ])

            ->add('message', TextareaType::class, [
                'attr' => [
                    'placeholder' => "Merci de préciser les références des produits, commandes ou références de dossier dans le cas d'un suivi",
                    'class' => 'font-italic',
                ],
                'help' => "Merci de préciser les références des produits, commandes ou références de dossier dans le cas d'un suivi",
            ]);
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Contact::class,
        ]);
    }
}
