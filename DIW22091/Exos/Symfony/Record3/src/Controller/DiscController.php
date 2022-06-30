<?php

namespace App\Controller;

use App\Entity\Disc;
use App\Entity\Artist;
use App\Form\DiscType;
use App\Repository\DiscRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DiscController extends AbstractController
{
    

    #[Route('/', name: 'app_disc_index', methods: ['GET'])]
    public function index(DiscRepository $discRepository): Response
    {
        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');

        return $this->render('disc/index.html.twig', [
            'discs' => $discRepository->createQueryBuilder('d')
                                    ->join(Artist::class, 'a', 'WITH', 'd.artist = a.id')
                                    ->orderBy('a.name', 'ASC')
                                    ->addOrderBy('d.year', 'ASC')
                                    ->getQuery()
                                    ->getResult()
        ]);
    }

    #[Route('/disc/new', name: 'app_disc_new', methods: ['GET', 'POST'])]
    public function new(Request $request, DiscRepository $discRepository): Response
    {
        $disc = new Disc();
        $form = $this->createForm(DiscType::class, $disc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $discRepository->add($disc, true);

            return $this->redirectToRoute('app_disc_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('disc/new.html.twig', [
            'disc' => $disc,
            'form' => $form,
        ]);
    }

    #[Route('/disc/{id}', name: 'app_disc_show', methods: ['GET'])]
    public function show(Disc $disc): Response
    {
        return $this->render('disc/show.html.twig', [
            'disc' => $disc,
        ]);
    }

    #[Route('/disc/{id}/edit', name: 'app_disc_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Disc $disc, DiscRepository $discRepository): Response
    {
        $form = $this->createForm(DiscType::class, $disc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $picture = $form->get('picture')->getData();
            $fileName = $form->get('title')->getData().'.'.$picture->guessExtension();
            $picture->move($this->getParameter('pictures_directory'), $fileName);
            $disc->setPicture($fileName);
            $discRepository->add($disc, true);

            return $this->redirectToRoute('app_disc_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('disc/edit.html.twig', [
            'disc' => $disc,
            'form' => $form,
        ]);
    }

    #[Route('/disc/{id}', name: 'app_disc_delete', methods: ['POST'])]
    public function delete(Request $request, Disc $disc, DiscRepository $discRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$disc->getId(), $request->request->get('_token'))) {
            $discRepository->remove($disc, true);
        }

        return $this->redirectToRoute('app_disc_index', [], Response::HTTP_SEE_OTHER);
    }
}