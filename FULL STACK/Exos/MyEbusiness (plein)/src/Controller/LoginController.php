<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchType;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

    class LoginController extends AbstractController
    {
        #[Route('/login', name: 'login')]
        public function index(AuthenticationUtils $authenticationUtils, CategoryRepository $categoryRepository, Request $request,ProductRepository $productRepository): Response
        {
         // get the login error if there is one
            $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
            $lastUsername = $authenticationUtils->getLastUsername();

            $categories = $categoryRepository->findAll();
            $data = new SearchData();
            $data->page = $request->get('page', 1);
            $form = $this->createForm(SearchType::class, $data);
            $form->handleRequest($request);
            $products = $productRepository->findSearch($data);
            $products2 =$productRepository->findAll();
            $discount = $productRepository->findDiscount($data);
            $discount2 =$productRepository->findBy(['discount' => true]);
            return $this->render('login/index.html.twig', [
                'last_username' => $lastUsername,
                'error'         => $error,
                'products' => $products,
                'products2' => $products2,
                'categories' => $categories,
                'discount' => $discount,
                'discount2' => $discount2,
                'form' => $form->createView()
                ]);
        }

        #[Route('/logout', name: 'app_logout', methods: ['GET'])]
    public function logout()
    {
        // controller can be blank: it will never be called!
        throw new \Exception('Don\'t forget to activate logout in security.yaml');
    }

    }