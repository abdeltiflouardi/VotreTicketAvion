<?php

namespace Frontend\WebBundle\Form;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder;

class VolsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('departure')
                ->add('return')
                ;
        
    }

    public function getName()
    {
        return 'vols';
    }
}
