<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use App\Data\SearchData;
use App\Repository\UserRepository;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/user')]
class UserController extends AbstractController
{
    #[Route('/', name: 'app_user_index', methods: ['GET'])]
    public function index(UserRepository $userRepository, CategoryRepository $categoryRepository, ProductRepository $productRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');

        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);
        return $this->render('user/index.html.twig', [
            'users' => $userRepository->findAll(),
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
        ]);
    }

    #[Route('/new', name: 'app_user_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, CategoryRepository $categoryRepository, ProductRepository $productRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);
            
        if ($form->isSubmitted() && $form->isValid()) {

            // transforms json column into str
            $roles = $form->get('roles')->getData();
            $user->setRoles($roles);

            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
                $entityManager->flush();

            return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/new.html.twig', [
            'user' => $user,
            'form' => $form,
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
        ]);
    }
 
    #[Route('/{id}', name: 'app_user_show', methods: ['GET'])]
    public function show(User $user, CategoryRepository $categoryRepository, ProductRepository $productRepository): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');

        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);

        // The user cannot access other users infos:
        if ($this->getUser()->getUserIdentifier() != $user->getUserIdentifier()) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        }
        return $this->render('user/show.html.twig', [
            'user' => $user,
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_user_edit', methods: ['GET', 'POST'])]
    public function edit(CategoryRepository $categoryRepository, ProductRepository $productRepository, Request $request, User $user, UserPasswordHasherInterface $userPasswordHasher, EntityManagerInterface $entityManager, $id): Response
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');

        if ($this->getUser()->getUserIdentifier() != $user->getUserIdentifier()) {
            $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
        }
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $categories = $categoryRepository->findAll();
        $data = new SearchData();
        $products = $productRepository->findSearch($data);
        $products2 =$productRepository->findAll();
        $discount = $productRepository->findDiscount($data);
        $discount2 =$productRepository->findBy(['discount' => true]);

        if ($form->isSubmitted() && $form->isValid()) {

            // transforms json column into str
            $roles = $form->get('roles')->getData();
            $user->setRoles($roles);
            
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                        $user,
                        $form->get('plainPassword')->getData()
                    )
                );
                $entityManager->persist($user);
                $entityManager->flush();

                return $this->redirectToRoute('app_home', [], Response::HTTP_SEE_OTHER);
            // return $this->redirectToRoute('{{ path('app_user_show', {'id': app.user.id}) }}', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('user/edit.html.twig', [
            'user' => $user,
            'form' => $form,
            'products' => $products,
            'products2' => $products2,
            'categories' => $categories,
            'discount' => $discount,
            'discount2' => $discount2,
        ]);
    }

    #[Route('/{id}', name: 'app_user_delete', methods: ['POST'])]
    public function delete(Request $request, User $user, UserRepository $userRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$user->getId(), $request->request->get('_token'))) {
            $userRepository->remove($user, true);
        }

        return $this->redirectToRoute('app_user_index', [], Response::HTTP_SEE_OTHER);
    }

}

