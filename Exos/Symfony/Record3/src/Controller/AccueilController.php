<?php

namespace App\Controller;

use App\Repository\DiscRepository;
use App\Repository\ArtistRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('', name: 'app_accueil')]
    public function index(DiscRepository $discRepository, ArtistRepository $artistRepository): Response
    {
        $discs = $discRepository->findAll();
        $artists = $artistRepository->findAll();

        return $this->render('accueil/index.html.twig', [
            'discs' => $discs,
            'artists' => $artists,
        ]);
    }
}
