<?php

namespace CarsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class SpecificationsBrandForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {
        $builder
            ->add('libelle', 'text')
        ;
    }

    public function getName()
    {
        return 'carsbrand';
    }
}
