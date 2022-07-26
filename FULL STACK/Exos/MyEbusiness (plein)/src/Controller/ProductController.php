<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Entity\Category;
use App\Form\SearchType;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(ProductRepository $productRepository, Request $request, CategoryRepository $categoryRepository): Response
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

        return $this->render('product/index.html.twig', [
        'products' => $products,
        'products2' => $products2,
        'categories' => $categories,
        'discount' => $discount,
        'discount2' => $discount2,
        'form' => $form->createView()

    ]);
    }

    #[Route('/catalogue/{category}', name: 'app_catalogue')]
    public function index2(ProductRepository $productRepository, Request $request, Category $category, CategoryRepository $categoryRepository): Response
    {
        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $data->categories = [$category];
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);


        return $this->render('product/index.html.twig', [

        'products' => $products,
        'products2' => $products2,
        'categories' => $categories,
        'discount' => $discount,
        'discount2' => $discount2,
        'form' => $form->createView(),
    ]);
    }

    #[Route('/discount/{disc}', name: 'app_discount',defaults:['disc'=>1])]
    public function index3(ProductRepository $productRepository, Request $request, CategoryRepository $categoryRepository,int $disc): Response
    {
        switch($disc){
            case "0": $disc=false;
            break;
            case "1": $disc=true;
            break;
            default: $disc= false;
            break;
        }
        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $data->discount = $disc;
        $data->page = $request->get('page', 1);
        $form = $this->createForm(SearchType::class, $data);
        $form->handleRequest($request);
        $products =$productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => $disc]);

        return $this->render('product/index.html.twig', [
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
            'form' => $form->createView()
        ]);
    }

}

