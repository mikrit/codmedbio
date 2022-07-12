<?php defined('SYSPATH') or die('No direct script access.')?>
<div class="collapse navbar-collapse" id="navbarNav">
	<ul class="navbar-nav mr-auto">
		<li class="nav-item <?=$request[0] === '' ? 'active' : ''?>">
			<?=HTML::anchor('/', 'Главная', ['class' => 'nav-link'])?>
		</li>
		<li class="nav-item <?=$request[1] === 'about' ? 'active' : ''?>">
			<?=HTML::anchor('index/about', 'О нас', ['class' => 'nav-link'])?>
		</li>
		<li class="nav-item <?=$request[1] === 'price' ? 'active' : ''?>">
			<?=HTML::anchor('index/price', 'Услуги и цены', ['class' => 'nav-link'])?>
		</li>
		<li class="nav-item <?=$request[1] === 'staff' ? 'active' : ''?>">
			<?=HTML::anchor('index/staff', 'Наши сотрудники', ['class' => 'nav-link'])?>
		</li>
		<li class="nav-item <?=$request[1] === 'contacts' ? 'active' : ''?>">
			<?=HTML::anchor('index/contacts', 'Контакты', ['class' => 'nav-link'])?>
		</li>
		<li class="nav-item <?=$request[1] === 'materials' ? 'active' : ''?>">
			<?=HTML::anchor('index/materials', 'Прием материалов', ['class' => 'nav-link'])?>
		</li>
	</ul>
	<?= HTML::anchor('https://3dsec.sberbank.ru/shortlink/zMrXrOzj', 'ОНЛАЙН ОПЛАТА', ['class' => 'btn btn-success', 'target' => '_blank'])?>
</div>