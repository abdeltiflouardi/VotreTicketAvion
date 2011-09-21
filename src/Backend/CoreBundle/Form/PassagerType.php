<?php

namespace Backend\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class PassagerType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('prenom')
            ->add('nom')
            ->add('nationalite')
            ->add('dateNaissance')
            ->add('reservation')
        ;
    }

    public function getName()
    {
        return 'passager';
    }
}
