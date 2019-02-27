<?php

namespace myapp\GestionProjetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContactType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nom', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Nom')))
                ->add('email', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'mail')))
                ->add('objet', TextType::class,array('required'=>true, 'attr'=> array('placeholder'=>'objet')))
                ->add('sujet',TextareaType::class,array('required'=>true, 'attr'=> array('placeholder'=>'Sujet')));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'myapp\GestionProjetBundle\Entity\Contact1'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'myapp_gestionprojetbundle_contact1';
    }


}
