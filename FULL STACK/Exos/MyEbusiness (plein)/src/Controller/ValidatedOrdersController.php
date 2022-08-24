<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Data\SearchData;
use App\Service\Cart\CartService;
use App\Repository\CartRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\OrderDetailsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ValidatedOrdersController extends AbstractController
{
    public function getData(CartRepository $cartRepository, CartService $cartService, ?UserInterface $user, ?OrderDetailsRepository $orderDetails, ProductRepository $productRepository, CategoryRepository $categoryRepository)
    {
        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);
        $cartService->setUser($user);
        $info = [
            'items'     => $cartService->getFullCart($orderDetails),
            'count'     => $cartService->getItemCount($orderDetails),
            'total'     => $cartService->getTotal($orderDetails),
            'products'  => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount'  => $discount,
            'discount2' => $discount2,
        ];

        return $info;
    }

    #[Route('/validated/orders', name: 'app_validated_orders')]
    public function index(CartRepository $cartRepository, CartService $cartService, ?UserInterface $user, ?OrderDetailsRepository $orderDetails, ProductRepository $productRepository, CategoryRepository $categoryRepository): Response
    {
        if (!$this->isGranted('ROLE_CLIENT')) {
            $this->addFlash('info', 'Please login or register first');
            return $this->redirectToRoute('login');
        }

        if ($this->getUser()->getUserIdentifier() != $user->getUserIdentifier()) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        }
        if ($this->isGranted('ROLE_CLIENT')) {
            $clientCarts = $cartRepository->findAllByUser($user->getId(), true);
        }
        if ($this->isGranted('ROLE_ADMIN')) {
            $clientCarts = $cartRepository->findAllUsers();
        }

        return $this->render(
            'validated_orders/index.html.twig',
            $this->getData($cartRepository, $cartService, $user, $orderDetails, $productRepository, $categoryRepository) + [
                'orders'    => $clientCarts,
            ]
        );
    }

    #[Route('/validated/orders/{id}', name: 'app_validated_orders_show')]
    public function orderShow(Request $request, Cart $cart, CartRepository $cartRepository, CartService $cartService, ?UserInterface $user, ?OrderDetailsRepository $orderDetails, ProductRepository $productRepository, CategoryRepository $categoryRepository)
    {
        $orderId = $request->attributes->get('id');
        $details = $orderDetails->findBy(['cart' => $orderId]);
        $orderDate = $details[0]->getCart()->getOrderDate();
        $cartService->setUser($user);
        $clientOrderId = $cart->getClientOrderId();
        return $this->render(
            'validated_orders/show.html.twig',
            $this->getData($cartRepository, $cartService, $user, $orderDetails, $productRepository, $categoryRepository) + [
                'order_id' => $clientOrderId,
                'cart_id' => $orderId,
                'details' => $details,
                'orderDate' => $orderDate,
                'shipped' => $cart->isShipped(),
            ]
        );
    }

    #[Route('validated/orders/{id}/shipped', name: 'app_shipped_order')]
    public function shippedOrder(Request $request, CartRepository $cartRepository, EntityManagerInterface $entityManager)
    {
        $orderId = $request->attributes->get('id');
        $cart = $cartRepository->find($orderId);
        $cart->setShipped(true);
        $date = new \DateTime('@'.strtotime('now'));
        $cart->setShipmentDate($date);
        $entityManager->persist($cart);
        $entityManager->flush();

        $this->addFlash('success', 'La commande a bien été envoyée');
        return $this->redirectToRoute('app_validated_orders');

    }
}