<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Data\SearchData;
use App\Service\Cart\CartService;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\OrderDetailsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class OrderController extends AbstractController
{
    #[Route('/order', name: 'app_order')]
    public function index(CartService $cartService, ProductRepository $productRepository, Request $request, CategoryRepository $categoryRepository, OrderDetailsRepository $orderDetails, ?UserInterface $user): Response
    {
        if (!$this->isGranted('ROLE_CLIENT')) {
            $this->addFlash('error', 'Access denied');
            return $this->redirectToRoute('login');  
        }

        if ($this->getUser()->getUserIdentifier() != $user->getUserIdentifier()) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        }

        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $data->page = $request->get('page', 1);
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);

        $cartService->setUser($user);
        
        return $this->render('order/index.html.twig', [
            'items'     => $cartService->getFullCart($orderDetails),
            'count'     => $cartService->getItemCount($orderDetails),
            'total' => $cartService->getTotal($orderDetails),
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
        ]);
    }

    #[Route('/order', name: 'app_order_validated')]
    public function validateOrder(/*$id, ?Cart $cart, ?CartService $cartService,*/ ?UserInterface $user)
    {
        if (!$this->isGranted('ROLE_CLIENT')) {
            $this->addFlash('error', 'Access denied');
            return $this->redirectToRoute('login');  
        }

        if ($this->getUser()->getUserIdentifier() != $user->getUserIdentifier()) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        }

        // $cart->setValidated(true);
        // $cartService->setUser($user);
        // $cartService->delete($id);

    }
}
