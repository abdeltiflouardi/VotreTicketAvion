<?php

namespace Backend\CoreBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class TarifType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('tarifAdulte')
            ->add('typePassage')
            ->add('periode')
            ->add('tarifEnfant')
            ->add('tarifBebe')
            ->add('taxeAdulte')
            ->add('taxeEnfant')
            ->add('taxeBebe')
            ->add('active')
        ;
    }

    public function getName()
    {
        return 'tarif';
    }
}
