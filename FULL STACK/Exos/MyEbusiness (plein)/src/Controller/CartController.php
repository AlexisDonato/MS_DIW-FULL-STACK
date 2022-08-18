<?php

namespace App\Controller;

use App\Entity\Cart;
use App\Data\SearchData;
use App\Repository\CartRepository;
use App\Service\Cart\CartService;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use App\Repository\OrderDetailsRepository;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

//use Symfony\Component\Security\Core\User\UserInterface;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'app_cart_index')]
    // #[IsGranted("ROLE_CLIENT")]
    public function index(CartRepository $cartRepository, CartService $cartService, ProductRepository $productRepository, CategoryRepository $categoryRepository, ?UserInterface $user, Security $security, ?OrderDetailsRepository $orderDetails): Response
    {

if (!$this->isGranted('ROLE_CLIENT')) {
    $this->addFlash('success', 'Please log in or register first');
    return $this->redirectToRoute('login');  
}




        //$session = $requestStack->getSession();
        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);

        $cartService->setUser($user);

        // if (!$this->security->isGranted("ROLE_CLIENT")) {
        //     return $this->redirectToRoute("app_register");

        // }

        return $this->render('cart/index.html.twig', [
            'items'     => $cartService->getFullCart($orderDetails),
            'count'     => $cartService->getItemCount($orderDetails),
            'total'     => $cartService->getTotal($orderDetails),
            'products'  => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount'  => $discount,
            'discount2' => $discount2,
        ]);
    }

    #[Route('/cart/add/{id}', name: 'app_cart_add')]
    public function add($id, CartService $cartService, ?UserInterface $user) 
    {
        if (!$this->isGranted('ROLE_CLIENT')) {
            $this->addFlash('success', 'Please log in or register first');
            return $this->redirectToRoute('login');  
        }

        $cartService->setUser($user);
        $cartService->addOrRemove($id);

        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/cart/remove/{id}', name: 'app_cart_remove')]
    public function remove($id, CartService $cartService, ?UserInterface $user) 
    {
        $cartService->setUser($user);
        $cartService->addOrRemove($id, $remove=true);

        return $this->redirectToRoute('app_cart_index');
    }

    #[Route('/cart/deleteAll', name: 'app_cart_deleteAll')]
    public function deleteALL(CartService $cartService, ?UserInterface $user) 
    {
        $cartService->setUser($user);
        $cartService->deleteALL();
        $this->addFlash('success', 'Votre panier a bien été vidé.');
        return $this->redirectToRoute('app_home');
    }

    #[Route('/cart/delete/{id}', name: 'app_cart_delete')]
    public function delete($id, CartService $cartService, ?UserInterface $user) 
    {
        $cartService->setUser($user);
        $cartService->delete($id);

        return $this->redirectToRoute("app_cart_index");
    }
}
