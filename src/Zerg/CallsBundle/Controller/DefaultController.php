<?php

namespace Zerg\CallsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('ZergCallsBundle:Default:index.html.twig', array('name' => $name));
    }
}
