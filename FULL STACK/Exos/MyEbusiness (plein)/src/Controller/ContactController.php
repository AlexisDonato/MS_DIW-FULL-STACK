<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Data\SearchData;
use App\Form\ContactType;
use App\Service\Cart\CartService;
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
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'app_contact')]
    public function index(Request $request, ?UserInterface $user, CartService $cartService, EntityManagerInterface $entityManager, CategoryRepository $categoryRepository, ProductRepository $productRepository, OrderDetailsRepository $orderDetails, MailerInterface $mailer): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);

        $name = $contact->getName();
        $refEmail = $contact->getEmail();

        $subjects = $contact->getSubject();
        foreach ($subjects as $subject) {
            echo $subject;
        }
        $message = $contact->getMessage();


        $cartService->setUser($user);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($contact);
            $entityManager->flush();

            $id = $contact->getId();
            $email = (new TemplatedEmail())
            ->from(new Address('info_noreply@mye-business.com', 'My E-Business MailBot'))
            ->to($contact->getEmail())
            ->subject('Votre commande a bien été expédiée!')
            ->htmlTemplate('contact/contact_confirmation_email.html.twig')
            ->context([
                'name' => $name,
                'refEmail' => $refEmail,
                'id' => $id,
                'subject' => $subject,
                'message' => $message,
            ]);
            $mailer->send($email);

            $this->addFlash('info', 'Votre demande a bien été enregistrée, un mail de confirmation vous a été envoyé');
            return $this->redirectToRoute("app_home");
        }

        return $this->render('contact/index.html.twig', [
            'contact' => $form->createView(),
            'items' => $cartService->getFullCart($orderDetails),
            'count'     => $cartService->getItemCount($orderDetails),
            'total' => $cartService->getTotal($orderDetails),
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
        ]);
    }
}
