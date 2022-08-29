<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Data\SearchData;
use App\Form\SearchType;
use Doctrine\ORM\EntityManager;
use App\Service\Cart\CartService;
use App\Repository\CartRepository;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\OrderDetailsRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(?UserInterface $user, CartService $cartService, ProductRepository $productRepository, CategoryRepository $categoryRepository, CartRepository $cartRepository, OrderDetailsRepository $orderDetails, Security $security, EntityManagerInterface $entityManager): Response
    {
        if ($this->isGranted('ROLE_CLIENT')) {
            $clientCart = $cartRepository->findOneByUser($user->getId());

            if (!isset($clientCart)) {
                $clientCart = new Cart();
                
                $clientCart->setUser($user);
                $clientCart->setClientOrderId(strtoupper(uniqid('T-INT::')));
                $entityManager->persist($clientCart);
                $entityManager->flush();
            }

            $cartService->setCart($clientCart);
            $cartService->setUser($user);
        }
        
    
        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);


        return $this->render('home/index.html.twig', [
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
}
