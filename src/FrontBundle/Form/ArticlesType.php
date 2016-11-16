<?php

namespace FrontBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticlesType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('auteur', EntityType::class, array('class'=>'FrontBundle/Entity/Articles',
	    'choice_label'=>'sujet',))
	        ->add('sujet')
	        ->add('date')
	        ->add('contenu')
	        ->add('source')
	        ->add('titre')
	        ->add('catégorie')
	        ->add('rubrique')
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrontBundle\Entity\Articles'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'frontbundle_articles';
    }


}
