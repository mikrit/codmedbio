<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_BaseInfo
{
	public function action_index()
	{
		$view = View::factory('BaseInfo/index/index');
		
		$this->template->content = $view->render();
	}
	
	public function action_about()
	{
		$view = View::factory('BaseInfo/index/about');
		
		$this->template->content = $view->render();
	}
	
	public function action_price()
	{
		$view = View::factory('BaseInfo/index/price');
		
		$this->template->content = $view->render();
	}
	
	public function action_staff()
	{
		$view = View::factory('BaseInfo/index/staff');
		
		$this->template->content = $view->render();
	}
	
	public function action_contacts()
	{
		$view = View::factory('BaseInfo/index/contacts');
		
		$this->template->content = $view->render();
	}
	
	public function action_materials()
	{
		$view = View::factory('BaseInfo/index/materials');
		
		$this->template->content = $view->render();
	}
}