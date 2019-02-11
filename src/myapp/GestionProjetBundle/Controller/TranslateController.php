<?php

namespace myapp\GestionProjetBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class TranslateController extends Controller{
    
     public function showAction()
    {
        return $this->render('GestionProjetBundle:Default:translate.html.twig');
    }
   
}
