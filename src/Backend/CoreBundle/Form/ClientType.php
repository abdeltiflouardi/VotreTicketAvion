<?php

namespace Backend\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre', 'choice', array('required' => true, 'choices' => array('' => '', 'Mr.' => 'Mr.', 'Ms.' => 'Ms.')))
            ->add('nom', 'text', array('required' => true))
            ->add('prenom', 'text', array('required' => true))
            ->add('nationalite', 'text', array('required' => true))
            ->add('paysResidence', 'text', array('required' => true))
            ->add('gsm', 'text', array('required' => true))
            ->add('email', 'text', array('required' => true))
        ;
    }
    
    public function getDefaultOptions(array $options) {
        return array();
    }

    public function getName()
    {
        return 'client';
    }
}
