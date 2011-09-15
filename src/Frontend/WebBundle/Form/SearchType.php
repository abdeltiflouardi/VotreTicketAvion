<?php

namespace Frontend\WebBundle\Form;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder->add('airportDeparture')
                ->add('dateDeparture')
                ->add('airportArrival')
                ->add('dateArrival')
                ->add('withReturn')
                ->add('adult')
                ->add('children')
                ->add('babies')
                ;
               
    }

    public function getName()
    {
        return 'search';
    }
}
