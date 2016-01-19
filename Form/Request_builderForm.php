<?php

namespace BDApp\SLBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;

class Request_builderForm extends AbstractType
{
    public function buildForm(FormBuilder $builder, array $options)
    {        
        $builder
            ->add('key_words')
            ->add('hashtags')
            ->add('users')
        ;
    }
    
    public function getRequest()
    {
        return 'req';
    }    
}