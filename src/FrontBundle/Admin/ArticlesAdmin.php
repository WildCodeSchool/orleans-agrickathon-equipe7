<?php
// src/FrontBundle/Admin/Admin.php

namespace FrontBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;

class ArticlesAdmin extends Admin
{
	// Fields to be shown on create/edit forms
	protected function configureFormFields(FormMapper $formMapper)
	{
		$formMapper
			->add('Auteur')
			->add('Sujet')
			->add('Date')
			->add('Contenu')
			->add('Source')
			->add('Catégorie')
			->add('Rubrique')
			->add('Titre')
		;
	}

	// Fields to be shown on filter forms
	protected function configureDatagridFilters(DatagridMapper $datagridMapper)
	{
		$datagridMapper
			->add('Auteur')
			->add('Sujet')
			->add('Date')
			->add('Contenu')
			->add('Source')
			->add('Catégorie')
			->add('Rubrique')
			->add('Titre')
		;
	}

	// Fields to be shown on lists
	protected function configureListFields(ListMapper $listMapper)
	{
		$listMapper
			->addIdentifier('Auteur')
			->add('Sujet')
			->add('Date')
			->add('Contenu')
			->add('Source')
			->add('Catégorie')
			->add('Rubrique')
			->add('Titre')
			->add('_action', 'actions', array(
				'actions' => array(
					'view' => array(),
					'edit' => array(),
					'delete' => array(),
				)
			))
		;
	}

	// Fields to be shown on show action
	protected function configureShowFields(ShowMapper $showMapper)
	{
		$showMapper
			->add('id')
			->add('Auteur')
			->add('Sujet')
			->add('Date')
			->add('Contenu')
			->add('Source')
			->add('Catégorie')
			->add('Rubrique')
			->add('Titre')
		;
	}
}