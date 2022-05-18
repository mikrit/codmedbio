<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Main extends Controller_BaseInfo
{
	public function action_index()
	{
		$view = View::factory('BaseInfo/main/index');
		
		$this->template->content = $view->render();
	}
	
	public function action_about()
	{
		$view = View::factory('BaseInfo/main/about');
		
		$this->template->content = $view->render();
	}
	
	public function action_staff()
	{
		$view = View::factory('BaseInfo/main/staff');
		
		$this->template->content = $view->render();
	}
	
	public function action_contacts()
	{
		$view = View::factory('BaseInfo/main/contacts');
		
		$this->template->content = $view->render();
	}
	
	public function action_materials()
	{
		$view = View::factory('BaseInfo/main/materials');
		
		$this->template->content = $view->render();
	}
}