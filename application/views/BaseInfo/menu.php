<?php defined('SYSPATH') or die('No direct script access.')?>

<ul class="navbar-nav flex-grow-1">
	<li class="nav-item <?=$request[0] == 'main/about' ? 'active' : ''?>">
		<?=HTML::anchor('main/about', 'О нас', ['class' => 'nav-link text-dark'])?>
	</li>
	<li class="nav-item <?=$request[0] == 'main/staff' ? 'active' : ''?>">
		<?=HTML::anchor('main/staff', 'Наши сотрудники', ['class' => 'nav-link text-dark'])?>
	</li>
	<li class="nav-item <?=$request[0] == 'main/contacts' ? 'active' : ''?>">
		<?=HTML::anchor('main/contacts', 'Контакты', ['class' => 'nav-link text-dark'])?>
	</li>
	<li class="nav-item <?=$request[0] == 'main/materials' ? 'active' : ''?>">
		<?=HTML::anchor('main/materials', 'Прием материалов', ['class' => 'nav-link text-dark'])?>
	</li>
</ul>