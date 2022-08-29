<?php

namespace App\Controller;

use App\Entity\User;
use App\Data\SearchData;
use App\Security\EmailVerifier;
use App\Service\Cart\CartService;
use App\Form\RegistrationFormType;
use Symfony\Component\Mime\Address;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\OrderDetailsRepository;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;


class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;

    public function __construct(EmailVerifier $emailVerifier)
    {
        $this->emailVerifier = $emailVerifier;
    }

    #[Route('/register', name: 'app_register')]
    public function register(CartService $cartService, Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, CategoryRepository $categoryRepository, ProductRepository $productRepository, OrderDetailsRepository $orderDetails): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);
        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
            $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );
            $user->setBirthdate($form->get('birthdate')->getData());
            $user->setRoles(['ROLE_CLIENT']);
            $entityManager->persist($user);
            $entityManager->flush();

            // generate a signed url and email it to the user
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('info_noreply@mye-business.com', 'My E-Business MailBot'))
                    ->to($user->getEmail())
                    ->subject('Please Confirm your Email')
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // do anything else you need here, like send an email
            $this->addFlash('info', 'Veuillez vérifier votre adresse mail. Un mail de demande de validation vous a été envoyé');
            return $this->redirectToRoute('login');
        }

        return $this->render('registration/register.html.twig', [
            'items' => $cartService->getFullCart($orderDetails),
            'count'     => $cartService->getItemCount($orderDetails),
            'total' => $cartService->getTotal($orderDetails),
            'registrationForm' => $form->createView(),
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, MailerInterface $mailer, ?UserInterface $user): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        // validate email confirmation link, sets User::isVerified=true and persists
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $this->getUser());
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // @TODO Change the redirect on success and handle or remove the flash message in your templates
        $this->addFlash('success', 'Votre adresse mail a bien été vérifiée. Un mail de confirmation vous a été envoyé');
        $user = $this->getUser();
        $roles = $user->getRoles();
        array_push($roles, 'ROLE_CLIENT');
        $user->setRoles($roles);

        $email = (new TemplatedEmail())
        ->from(new Address('info_noreply@mye-business.com', 'My E-Business MailBot'))
        ->to($user->getEmail())
        ->subject('Bienvenue sur My E-Business!')
        ->htmlTemplate('registration/user_information_email.html.twig')
        ->context([
            'user' => $user,
        ]);

        $mailer->send($email);
        return $this->redirectToRoute('app_home');
    }

}
