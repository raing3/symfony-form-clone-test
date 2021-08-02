<?php

namespace SymfonyFormCloneTest\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ParentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('child', CollectionType::class, [
            'entry_type' => ChildType::class,
            'allow_add' => true,
            'clone_entry_instance' => $options['clone_entry_instance']
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefault('clone_entry_instance', false);
    }
}
