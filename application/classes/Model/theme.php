<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Theme extends ORM
{
	protected $_has_many = array(
		'prices'  => array(
			'model'       => 'price',
			'foreign_key' => 'theme_id',
		)
	);
}