<?php defined('SYSPATH') or die('No direct script access.');?>

<?$request = explode("/", Request::current()->uri());?>

<ul class="nav navbar-nav">
	<li>
		<?=HTML::anchor('/', 'На главную')?>
	</li>
</ul>