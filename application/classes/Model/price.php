<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Price extends ORM
{
	protected $_belongs_to = array(
		'theme'	=> array(
			'model'			=> 'theme',
			'foreign_key'	=> 'theme_id',
		),
	);
}