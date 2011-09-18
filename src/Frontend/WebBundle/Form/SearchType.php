<?php

namespace Frontend\WebBundle\Form;

use Symfony\Component\Form\AbstractType,
    Symfony\Component\Form\FormBuilder;

class SearchType extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
                ->add('airportDeparture', 'entity', array('empty_value' => 'Choose an airport', 'class' => 'BackendCoreBundle:Aeroport', 'property' => 'aeroport'))
                ->add('dateDeparture', 'date', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                ->add('airportArrival', 'entity', array('empty_value' => 'Choose an airport', 'class' => 'BackendCoreBundle:Aeroport', 'property' => 'aeroport'))
                ->add('dateArrival', 'date', array('widget' => 'single_text', 'format' => 'dd/MM/yyyy'))
                ->add('withReturn', 'choice', array('expanded' => true, 'choices' => array(0 => 'Simple', 1 => 'Return')))
                ->add('adults', 'choice', array('choices' => array_combine(range(1, 9), range(1, 9)) + array(10 => '10 or more')))
                ->add('children', 'choice', array('choices' => range(0, 9)))
                ->add('babies', 'choice', array('choices' => range(0, 9)))        
                ;
               
    }

    public function getName()
    {
        return 'searchForm';
    }
}
