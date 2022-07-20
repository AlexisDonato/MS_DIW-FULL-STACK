<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\User1Type;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/client')]
class ClientController extends AbstractController
{
    #[Route('/{id}', name: 'app_client_show', methods: ['GET'])]
    public function show(User $user): Response
    {
        if ($this->getUser()->isVerified()) {
            $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

            // The user cannot access other users infos:
            if ($this->getUser()->getUserIdentifier() != $user->getUserIdentifier()) {
                $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'User tried to access a page without having ROLE_ADMIN');
            }
            return $this->render('client/show.html.twig', [
            'user' => $user,
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
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
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
            'user' => $user,
            'form' => $form,
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