<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Validator\Constraints\Regex;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('id', IntegerType::class, [
                'required' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
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

            // ->add('plainPassword', PasswordType::class, [
            //     // instead of being set onto the object directly,
            //     // this is read and encoded in the controller
            //     'mapped' => false,
            //     'attr' => ['autocomplete' => 'new-password'],
            //     'required' => true,
            //     'row_attr' => [
            //         'class' => 'col-6 ml-3',
            //         ],
            //     'constraints' => [
            //         new NotBlank([
            //             'message' => 'Please enter a password',
            //         ]),
            //         new Length([
            //             'min' => 6,
            //             'minMessage' => 'Your password should be at least {{ limit }} characters',
            //             // max length allowed by Symfony for security reasons
            //             'max' => 4096,
            //         ]),
            //     ],
            // ])

            ->add('roles', ChoiceType::class, [
                'choices' => (array)[
                    'ROLE_ADMIN' => 'ROLE_ADMIN',
                    'ROLE_CLIENT' => 'ROLE_CLIENT',
                    'ROLE_USER' => 'ROLE_USER',
                ],
                'mapped' => true,
                'multiple' => true,
                'help' => 'Maintain Ctrl to select multiple roles',
                'required' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
                ])
        
            ->add('userName', TextType::class, [
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

            ->add('userLastname', TextType::class, [
                'required' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
                'attr' => ['class' => 'LastNameField'],
                    'constraints' => [
                        new Regex([
                            'pattern' => "/^([A-Za-zàáâäçèéêëìíîïñòóôöùúûü]+(( |')[A-Za-zàáâäçèéêëìíîïñòóôöùúûü]+)*)+([-]([A-Za-zàáâäçèéêëìíîïñòóôöùúûü]+(( |')[A-Za-zàáâäçèéêëìíîïñòóôöùúûü]+)*)+)*$/",
                            'message' => 'Invalid name (numbers are not granted)'
                        ]),
                    ]
                ])

            ->add('birthdate', DateType::class, [
                'widget' => 'single_text',
                // this is actually the default format for single_text
                'format' => 'yyyy-MM-dd',
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
            ])

            ->add('adress', TextType::class, [
                'required' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
                ])

            ->add('phoneNumber', TextType::class, [
                'required' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
                'attr' => ['class' => 'PhoneField'],
                    'constraints' => [
                        new Regex([
                            'pattern' => "/^(?:(?:\+|00)33[\s.-]{0,3}(?:\(0\)[\s.-]{0,3})?|0)[1-9](?:(?:[\s.-]?\d{2}){4}|\d{2}(?:[\s.-]?\d{3}){2})$/", // French phone number
                            'message' => 'Invalid Phone number'
                        ]),
                    ]
                ])
                
            ->add('isVerified', CheckboxType::class, [
                'mapped' => true,
                'row_attr' => [
                    'class' => 'col-md-6 ml-3',
                    ],
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
