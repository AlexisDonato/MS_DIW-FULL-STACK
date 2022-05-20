<?php

namespace App\Controller;

use App\Form\AddDiscType;
use App\Entity\Disc;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AddDiscController extends AbstractController
{
    #[Route('/adddisc', name: 'add_disc')]
    public function index(Request $request): Response
    {
        $disc = new Disc();

        $addForm = $this->createForm(AddDiscType::class, $disc);

        $addForm->handleRequest($request);

        if ($addForm->isSubmitted() && $addForm->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $task = $addForm->getData();

            // ... perform some action, such as saving the task to the database

            return $this->redirectToRoute('');
        }


        return $this->renderForm('add_disc/index.html.twig', [
            'addForm' => $addForm,
        ]);
    }
}
