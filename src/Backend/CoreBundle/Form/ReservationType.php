<?php

namespace Backend\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class ReservationType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('date')
            ->add('passager', null, array('required' => false))
            ->add('client')
            ->add('vols')
        ;
    }

    public function getName()
    {
        return 'reservation';
    }
}
