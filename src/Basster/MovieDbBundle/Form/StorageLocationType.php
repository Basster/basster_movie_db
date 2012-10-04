<?php

namespace Basster\MovieDbBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class StorageLocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', 'text', array('label' => 'Name'))
        ;
    }

    public function getName()
    {
        return 'storagelocation';
    }
}
