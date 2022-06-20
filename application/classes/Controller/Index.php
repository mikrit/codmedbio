<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_BaseIndex
{
	public function action_index()
	{
		$view = View::factory('BaseIndex/index/index');
		
		$this->template->content = $view->render();
	}
	
	public function action_about()
	{
		$view = View::factory('BaseIndex/index/about');
		
		$this->template->content = $view->render();
	}
	
	public function action_price()
	{
		$view = View::factory('BaseIndex/index/price');
		
		$this->template->content = $view->render();
	}
	
	public function action_staff()
	{
		$view = View::factory('BaseIndex/index/staff');
		
		$this->template->content = $view->render();
	}
	
	public function action_contacts()
	{
		$view = View::factory('BaseIndex/index/contacts');
		
		$this->template->content = $view->render();
	}
	
	public function action_materials()
	{
		$view = View::factory('BaseIndex/index/materials');
		
		$this->template->content = $view->render();
	}
}