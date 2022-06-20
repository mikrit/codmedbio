<?php defined('SYSPATH') or die('No direct script access.');

class Controller_BaseIndex extends Controller_Template
{
	public $template = 'BaseIndex/base';
	
	public function __construct(Request $request, Response $response)
	{
		parent::__construct($request, $response);
	}
	
	public function before()
	{
		parent::before();
		
		$menu = View::factory('BaseIndex/menu');
		
		$menu->request = explode("/", Request::current()->uri());
		
		$this->template->menu    = $menu->render();
		$this->template->content = '';
	}
}