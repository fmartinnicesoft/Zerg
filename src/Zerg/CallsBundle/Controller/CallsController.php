<?php

namespace Zerg\CallsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CallsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZergCallsBundle:Calls:index.html.twig');
    }
    public function voirAction($id)
    {
        return new Response("Affichage de l'article d'ID:".$id.".");
    }
    
    public function voirSlugAction($slug,$annee,$format)
    {
        return new Response("On affiche le slug '".$slug."' crée en ".$annee." et au format ".$format.".");
    }


    public function ajouterAction()
    {
        return $this->render('ZergCallsBundle:Calls:bye.html.twig');
    }
}