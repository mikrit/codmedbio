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
		
		$find = '';
		
		if(isset($_POST['submit']))
		{
			$find = $_POST['find'];
			$themes = [];
			$themes_orm = ORM::factory('theme')->where('show', '=', 1)->find_all();
			foreach($themes_orm as $theme)
			{
				$themes[$theme->id] = $theme;
			}
			
			$prices = [];
			$prices_orm = ORM::factory('price')->where('show', '=', 1)->where('title', 'like', '%'.$_POST['find'].'%')->find_all();
			foreach($prices_orm as $price)
			{
				$prices[$price->theme_id][$price->id] = $price;
			}
		}
		else
		{
			$themes = [];
			$themes_orm = ORM::factory('theme')->where('show', '=', 1)->find_all();
			foreach($themes_orm as $theme)
			{
				$themes[$theme->id] = $theme;
			}
			
			$prices = [];
			$prices_orm = ORM::factory('price')->where('show', '=', 1)->find_all();
			foreach($prices_orm as $price)
			{
				$prices[$price->theme_id][$price->id] = $price;
			}
		}
		
		$view->themes = $themes;
		$view->prices = $prices;
		$view->find = $find;
		
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