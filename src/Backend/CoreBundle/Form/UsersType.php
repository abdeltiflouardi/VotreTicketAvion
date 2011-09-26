<?php

namespace Backend\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class UsersType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('username')
            ->add('password', 'password', array('required' => false))
        ;
    }

    public function getName()
    {
        return 'users';
    }
}
