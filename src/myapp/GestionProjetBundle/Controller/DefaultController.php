<?php

namespace myapp\GestionProjetBundle\Controller;
use myapp\GestionProjetBundle\Entity\Contact;
use myapp\GestionProjetBundle\Form\ContactType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GestionProjetBundle:Default:index.html.twig');
    }
    
      public function layoutAction()
    {
        return $this->render('GestionProjetBundle::layout.html.twig');
    }
    
     public function acceuilAction()
    {
        return $this->render('GestionProjetBundle:templates:acceuil.html.twig');
    }
      public function aboutAction()
    {
        return $this->render('GestionProjetBundle:templates:about.html.twig');
    }
    
         public function serviceAction()
    {
        return $this->render('GestionProjetBundle:templates:service.html.twig');
    }
    
 
     public function comptaAction()
    {
        return $this->render('GestionProjetBundle:templates:compta.html.twig');
    }
        public function achatAction()
    {
        return $this->render('GestionProjetBundle:templates:achat.html.twig');
    }
    
            public function budgetAction()
    {
        return $this->render('GestionProjetBundle:templates:budget.html.twig');
    }
             public function GestionComptableAction()
    {
        return $this->render('GestionProjetBundle:templates:gestioncomptable.html.twig');
    }
    
              public function rhAction()
    {
        return $this->render('GestionProjetBundle:templates:rh.html.twig');
    }
    
                 public function veAction()
    {
        return $this->render('GestionProjetBundle:templates:ve.html.twig');
    }
     
                  public function carAction()
    {
        return $this->render('GestionProjetBundle:templates:car.html.twig');
    }
    
                  public function harasAction()
    {
        return $this->render('GestionProjetBundle:templates:haras.html.twig');
    }
    
    public function contactAction(Request $request)
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            $subject = $form->get('objet')->getData();
            $email = $form->get('email')->getData();
            $message = $form->get('sujet')->getData();
            if ($form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                $em->persist($contact);
                $em->flush();
                $mess = \Swift_Message::newInstance()
                    ->setSubject($subject)
                    ->setFrom($this->getParameter('mailer_user'))
                    ->setTo('microsystemeinformations@gmail.com')
                    ->setReplyTo($email)
                    ->setBody($message);
                $this->get('mailer')->send($mess);

                return $this->redirect($this->generateUrl('myapplication_contact'));
            }
        }

        return $this->render('GestionProjetBundle:Default:contact.html.twig', array('form' => $form->createView()));
    }      
    
        public function referenceAction()
    {
            
        return $this->render('GestionProjetBundle:templates:reference.html.twig');
    }  
    
    

   


}
