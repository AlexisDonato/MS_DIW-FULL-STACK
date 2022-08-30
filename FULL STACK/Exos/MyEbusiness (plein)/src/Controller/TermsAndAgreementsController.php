<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchType;
use App\Service\Cart\CartService;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\OrderDetailsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class TermsAndAgreementsController extends AbstractController
{
    #[Route('/terms/and/agreements', name: 'app_terms_and_agreements')]
    public function index(CartService $cartService, ?UserInterface $user, ProductRepository $productRepository, Request $request, CategoryRepository $categoryRepository, OrderDetailsRepository $orderDetails): Response
    {
        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);

        $cartService->setUser($user);
        return $this->render('terms_and_agreements/index.html.twig', [
            'items'     => $cartService->getFullCart($orderDetails),
            'count'     => $cartService->getItemCount($orderDetails),
            'total' => $cartService->getTotal($orderDetails),
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
            'form' => $form->createView()
        ]);
    }
}
