<?php

namespace Zerg\CallsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
class CallsController extends Controller
{
    public function indexAction()
    {
        return new Response("Hello World!!");
    }
}
