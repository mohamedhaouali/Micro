<?php

namespace myapp\GestionProjetBundle\Controller;

use myapp\GestionProjetBundle\Entity\Article;
use myapp\GestionProjetBundle\Form\ArticleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
    /**
     * Lists all article entities.
     *
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('GestionProjetBundle:Article')->findAll();

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
        $articles,
        $request->query->get('page', 1)/*page number*/,
        5/*limit per page*/
    );
        
        
        
        return $this->render('article/index.html.twig', array(
            'articles' => $articles,'articles' => $pagination
        ));
    }
        public function modifierAction() {
        $em = $this->getDoctrine()->getManager();

        $articles = $em->getRepository('GestionProjetBundle:Article')->findAll();

        return $this->render('article/modifier.html.twig', array(
                    'articles' => $articles,
        ));
    }
    /**
     * Creates a new article entity.
     *
     */
    public function newAction(Request $request)
    {
        $article = new Article();
        $form = $this->createForm('myapp\GestionProjetBundle\Form\ArticleType', $article);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
             $article->upload();
            
            
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('article_show', array('id' => $article->getId()));
        }

        return $this->render('article/new.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a article entity.
     *
     */
    public function showAction(Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);

        return $this->render('article/show.html.twig', array(
            'article' => $article,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
        $deleteForm = $this->createDeleteForm($article);
        $editForm = $this->createForm('myapp\GestionProjetBundle\Form\ArticleType', $article);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
           $em =  $this->getDoctrine()->getManager();
            
        $article->upload();
        
        $em->persist($article);
         
        $em->flush();

            return $this->redirectToRoute('article_edit', array('id' => $article->getId()));
        }

        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a article entity.
     *
     */
        public function deleteAction($id)
    {
        
        $cox = $this->getDoctrine()->getManager();
        $article = $cox->getRepository("GestionProjetBundle:Article")->findOneById($id);
        
        if (!$article) {
        throw $this->createNotFoundException('No article found for id '.$id);
    }
        
        
        $cox->remove($article);
        $cox->flush();
        return $this->redirect($this->generateUrl("article_new"));
        
     
    }

    /**
     * Creates a form to delete a article entity.
     *
     * @param Article $article The article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
         public function rechercheAction(Request $request)
            {
       $em = $this->getDoctrine()->getManager();
       $articles=$em->getRepository("GestionProjetBundle:Article")->findAll();// afficher tous les modeles
       if($request->isMethod('POST'));{
         $titre=$request->get('titre');
         $articles=$em->getRepository("GestionProjetBundle:Article")->findArticlesBytitre($titre);// afficher par titre
        
           
       
       } 
       return $this->render('GestionProjetBundle:Default:rechercheArticle.html.twig', array(
                    'articles'=>$articles,
        ));
       
       
}
 





}

