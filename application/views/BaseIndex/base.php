<?php defined('SYSPATH') or die('No direct script access.');?>

<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="иммуногистохимические исследования, гистологические исследования, диагностическа клинической цитологии, молекулярно-генетическая диагностика">
		<meta name="description" content="Лаборатория патоморфологической и молекулярно-генетической диагностики опухолевых и предопухолевых заболеваний человека">
		
		<title>Лаборатория патоморфологической и молекулярно-генетической диагностики</title>
		
		<?=Html::style('media/media/bootstrap/dist/css/bootstrap.min.css')?>
		<?=Html::style('media/media/css/site.css')?>
		
		<?=Html::script('media/media/js/jquery.min.js')?>
		<?=Html::script('media/media/bootstrap/dist/js/bootstrap.bundle.min.js')?>
		
		<link rel="icon" href="/media/media/img/favicon.ico">
	</head>
	
	<body>
		<header>
			<nav class="navbar navbar-expand-lg bg-white border-bottom box-shadow navbar-light">
				<div class="container">
					<a class="navbar-brand" href="/" style="white-space: nowrap;color: #000000;margin-right: 3rem;">ООО «КодМедБио»</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarNav">
						<?=$menu?>
					</div>
				</div>
			</nav>
		</header>
		
		<?=$content?>
		
		<footer class="footer mt-auto py-3 border-top">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md align-self-center">
						<h4>ООО «КодМедБио»</h4>
					</div>
					<div class="col-6 col-md align-self-center">
						<ul class="list-unstyled text-small">
							<li><a class="text-muted" href="/">Главная</a></li>
							<li><a class="text-muted" href="/index/about">О нас</a></li>
							<li><a class="text-muted" href="/index/materials">Приём материалов</a></li>
						</ul>
					</div>
					<div class="col-6 col-md align-self-center">
						<ul class="list-unstyled text-small">
							<li><a class="text-muted" href="/index/price">Услуги и цены</a></li>
							<li><a class="text-muted" href="/index/staff">Наши сотрудники</a></li>
							<li><a class="text-muted" href="/index/contacts">Контакты</a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-12 col-md text-center">
						<p class="text-muted text-center"><small><a href="http://www.ai-tech.ru">ai-tech.ru</a> &copy;2022<?=(date('Y') != 2022) ? '-'.date('Y') : ''?> All Rights Reserved.</small></p>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>