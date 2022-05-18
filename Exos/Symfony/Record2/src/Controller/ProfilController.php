<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProfilController extends AbstractController
{

    #[Route('/detail', name: 'app_detail')]
    public function index() :Response
    {
$info = ['lastname' => 'Loper', 'firstname' => 'Dave', 'email' => 'daveloper@code.dom', 'birthdate' => '01/01/1970'];

        // affichage de la page d'accueil
        return $this->render('profil/detail.html.twig', [
            'informations' => $info
        ]);
    }
}
?>