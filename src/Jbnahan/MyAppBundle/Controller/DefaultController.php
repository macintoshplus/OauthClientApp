<?php

namespace Jbnahan\MyAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('JbnahanMyAppBundle:Default:index.html.twig', array('name' => $name));
    }
}
