<?php

namespace Backend\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class VolsType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('dateDepart')
            ->add('dateArive')
            ->add('heureDepart')
            ->add('heureArivee')
            ->add('active')
            ->add('aeroportDepart')
            ->add('aeroportArrivee')
        ;
    }

    public function getName()
    {
        return 'vols';
    }
}
