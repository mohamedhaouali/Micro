<?php

namespace myapp\GestionProjetBundle\Controller;

use myapp\GestionProjetBundle\Entity\Devi;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use myapp\GestionProjetBundle\Form\DeviType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;





/**
 * Devi controller.
 *
 */
class DeviController extends Controller
{
    /**
     * Lists all devi entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $devis = $em->getRepository('GestionProjetBundle:Devi')->findAll();

        return $this->render('devi/index.html.twig', array(
            'devis' => $devis,
        ));
    }
    
     public function modifierAction() {
        $em = $this->getDoctrine()->getManager();

        $devis = $em->getRepository('GestionProjetBundle:Devi')->findAll();

        return $this->render('devi/modifier.html.twig', array(
                    'devis' => $devis,
        ));
    }
    
    

    /**
     * Creates a new devi entity.
     *
     */
    public function newAction(Request $request)
    {
        $devi = new Devi();
        $form = $this->createForm('myapp\GestionProjetBundle\Form\DeviType', $devi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($devi);
            $em->flush();

            
        }

        return $this->render('devi/new.html.twig', array(
            'devi' => $devi,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a devi entity.
     *
     */
    public function showAction(Devi $devi)
    {
        $deleteForm = $this->createDeleteForm($devi);

        return $this->render('devi/show.html.twig', array(
            'devi' => $devi,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing devi entity.
     *
     */
    public function editAction(Request $request, Devi $devi)
    {
        $deleteForm = $this->createDeleteForm($devi);
        $editForm = $this->createForm('myapp\GestionProjetBundle\Form\DeviType', $devi);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager();
            
         
        
            $em->persist($devi);
         
            $em->flush();
            

            return $this->redirectToRoute('devi_edit', array('id' => $devi->getId()));
        }

        return $this->render('devi/edit.html.twig', array(
            'devi' => $devi,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a devi entity.
     *
     */
    public function deleteAction(Request $request, Devi $devi)
    {
        $form = $this->createDeleteForm($devi);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($devi);
            $em->flush();
        }

        return $this->redirectToRoute('devi_index');
    }

    /**
     * Creates a form to delete a devi entity.
     *
     * @param Devi $devi The devi entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Devi $devi)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('devi_delete', array('id' => $devi->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
