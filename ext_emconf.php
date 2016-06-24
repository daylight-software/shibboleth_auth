<?php

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Shibboleth Authentication',
	'description' => 'Shibboleth Single Sign On Authentication (BE & FE). The FE users will be imported automatically into the configured storage pid.',
	'category' => 'services',
	'shy' => 0,
	'version' => '3.1.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'excludeFromUpdates',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Tamer Erdogan / Lorenz Ulrich',
	'author_email' => 'tamer.erdogan@univie.ac.at / lorenz.ulrich@visol.ch',
	'author_company' => 'visol digitale Dienstleistungen GmbH',
	'constraints' => array(
		'depends' => array(
			'typo3' => '6.2.0-7.99.99',
		),
		'conflicts' => array(),
		'suggests' => array(),
	),
	'autoload' =>
		array(
			'psr-4' => array('PHLU\\ShibbolethAuth\\' => 'Classes')
		),
);
