<?php defined('SYSPATH') or die('No direct script access.')?>

<ul class="navbar-nav flex-grow-1">
	<li class="nav-item <?=$request[0] == 'main/about' ? 'active' : ''?>">
		<?=HTML::anchor('index/about', 'О нас', ['class' => 'nav-link text-dark'])?>
	</li>
	<li class="nav-item <?=$request[0] == 'main/price' ? 'active' : ''?>">
		<?=HTML::anchor('index/price', 'Услуги и цены', ['class' => 'nav-link text-dark'])?>
	</li>
	<li class="nav-item <?=$request[0] == 'main/staff' ? 'active' : ''?>">
		<?=HTML::anchor('index/staff', 'Наши сотрудники', ['class' => 'nav-link text-dark'])?>
	</li>
	<li class="nav-item <?=$request[0] == 'main/contacts' ? 'active' : ''?>">
		<?=HTML::anchor('index/contacts', 'Контакты', ['class' => 'nav-link text-dark'])?>
	</li>
	<li class="nav-item <?=$request[0] == 'main/materials' ? 'active' : ''?>">
		<?=HTML::anchor('index/materials', 'Прием материалов', ['class' => 'nav-link text-dark'])?>
	</li>
</ul>