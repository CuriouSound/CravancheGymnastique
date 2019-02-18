<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Actualite;
use App\Entity\Auteur;

class Actualite2Controller extends AbstractController
{
    /**
     * @Route("/actualite2", name="actualite2")
     */
    public function index()
    {

        $repository = $this->getDoctrine()->getRepository(Actualite::class);
        $actualite = $repository->find(2);
        $author = $actualite->getAuteur();

        dump($author->getName());

        $repository = $this->getDoctrine()->getRepository(Auteur::class);
        $author = $repository->find(1);
        $actus = $author->getActualites();

        foreach ($actus as $key => $actu) {
            dump($actu->getTitre());
        }
        

        return $this->render('actualite/index.html.twig', [
            'controller_name' => 'ActualiteController',
        ]);
    }
}
