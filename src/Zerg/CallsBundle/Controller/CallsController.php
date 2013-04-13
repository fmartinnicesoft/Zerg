<?php

namespace Zerg\CallsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CallsController extends Controller
{
    public function indexAction()
    {
        return $this->render('ZergCallsBundle:Calls:index.html.twig');
    }
}
