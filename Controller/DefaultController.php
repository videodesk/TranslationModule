<?php

namespace Videodesk\Bundle\TranslationModuleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('VideodeskTranslationModuleBundle:Default:index.html.twig', array('name' => $name));
    }
}
