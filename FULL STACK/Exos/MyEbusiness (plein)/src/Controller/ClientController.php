<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\User1Type;
use App\Data\SearchData;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Service\Cart\CartService;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/client')]
class ClientController extends AbstractController
{
    #[Route('/{id}', name: 'app_client_show', methods: ['GET'])]
    public function show(CartService $cartService, User $user, CategoryRepository $categoryRepository,ProductRepository $productRepository): Response
    {
        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);

        if ($this->getUser()->isVerified()) {
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

            // The user cannot access other users infos:
            if ($this->getUser()->getUserIdentifier() != $user->getUserIdentifier()) {
                $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            }
            return $this->render('client/show.html.twig', [
                'items' => $cartService->getFullCart(),
                'total' => $cartService->getTotal(),
                'user' => $user,
                'products' => $products,
                'products2' => $products2,
                'categories' => $categories,
                'discount' => $discount,
                'discount2' => $discount2,
        ]);
        } else {
            $this->addFlash(
                'error',
                'Please verifiy your mail before accessing your personnal information'
            );
            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);

        }
    }

    #[Route('/{id}/edit', name: 'app_client_edit', methods: ['GET', 'POST'])]
    public function edit(CartService $cartService, Request $request, User $user, UserRepository $userRepository, CategoryRepository $categoryRepository,ProductRepository $productRepository): Response
    {
        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);

        if ($this->getUser()->isVerified()) {
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');


            // The user cannot access other users infos:
            if ($this->getUser()->getUserIdentifier() != $user->getUserIdentifier()) {
                $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            }
            $form = $this->createForm(User1Type::class, $user);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $userRepository->add($user, true);

                return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
            }

            return $this->renderForm('client/edit.html.twig', [
                'items' => $cartService->getFullCart(),
                'total' => $cartService->getTotal(),
                'user' => $user,
                'form' => $form,
                'user' => $user,
                'products' => $products,
                'products2' => $products2,
                'categories' => $categories,
                'discount' => $discount,
                'discount2' => $discount2,
        ]);
        } else {
            $this->addFlash(
                'error',
                'Please verifiy your mail before accessing your personnal information'
            );
            return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
        }
    }

}