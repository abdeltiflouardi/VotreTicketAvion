<?php

namespace Backend\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ClientType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('nom')
            ->add('prenom')
            ->add('nationalite')
            ->add('paysResidence')
            ->add('gsm')
            ->add('email')
        ;
    }

    public function getName()
    {
        return 'client';
    }
}
