<?php

namespace SymfonyFormCloneTest\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\FormBuilderInterface;

class ChildType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('integer1', IntegerType::class)
            ->add('integer2', IntegerType::class)
            ->add('integer3', IntegerType::class)
            ->add('integer4', IntegerType::class)
            ->add('integer5', IntegerType::class)
            ->add('integer6', IntegerType::class)
            ->add('integer7', IntegerType::class)
            ->add('integer8', IntegerType::class)
            ->add('integer9', IntegerType::class)
            ->add('integer10', IntegerType::class);
    }
}
