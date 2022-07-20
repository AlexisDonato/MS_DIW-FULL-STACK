<?php

namespace App\Controller;

use App\Data\SearchData;
use App\Form\SearchType;
use App\Repository\ProductRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    #[Route('/product', name: 'app_product')]
    public function index(ProductRepository $productRepository): Response
    {
        $data = new SearchData();
        $form = $this->createForm(SearchType::class, $data);
        $products = $productRepository->findSearch();
        return $this->render('product/index.html.twig', [
            'products' => $products,
            'form' => $form->createView()
        ]);
    }
}
