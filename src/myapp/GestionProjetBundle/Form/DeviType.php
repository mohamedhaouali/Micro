<?php

namespace myapp\GestionProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;


class DeviType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
              
                ->add('nom', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Nom')))
                ->add('prenom', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Prenom')))
                ->add('raisonsociale', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'raison sociale')))
                ->add('matriculefiscale', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'matricule fiscale')))
                ->add('mail', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'mail')))
                ->add('telephone', NumberType::class,array('required'=>true, 'attr'=> array('placeholder'=>'telephone')))
                ->add('fax', NumberType::class,array('required'=>true, 'attr'=> array('placeholder'=>'fax')))
                ->add('adresse', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'adresse')))
                ->add('titre', EntityType::class, array(
                    // query choices from this entity
                    'class' => 'GestionProjetBundle:Produit',
                    // use the User.username property as the visible option string
                    'choice_label' => 'titre',
                    'multiple' => false,'expanded' => false // options will be presented in a <select> element; set this to true, to present the data as checkboxes

                        )
                      )
                ->add('sujet',TextareaType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Sujet')))
                
                ;
                 
             
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'myapp\GestionProjetBundle\Entity\Devi'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myapp_gestionprojetbundle_devi';
    }


}
