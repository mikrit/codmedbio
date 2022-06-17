<?php defined('SYSPATH') or die('No direct script access.');?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!--meta http-equiv="Content-Type" content="text/html; charset=UTF-8"-->
		<meta http-equiv="X-UA-Compatible" content="IE=edge" charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="иммуногистохимические исследования, гистологические исследования, диагностическа клинической цитологии, молекулярно-генетическая диагностика">
		<meta name="description" content="Лаборатория патоморфологической и молекулярно-генетической диагностики опухолевых и предопухолевых заболеваний человека">
		
		<title>Лаборатория патоморфологической и молекулярно-генетической диагностики</title>
		
		<?=Html::style('application/media/bootstrap/dist/css/bootstrap.min.css')?>
		<?=Html::style('application/media/css/site.css')?>
		
		<?=Html::script('application/media/js/jquery.min.js')?>
		<?=Html::script('application/media/bootstrap/dist/js/bootstrap.bundle.min.js')?>
		
		<link rel="icon" href="/application/media/img/favicon.ico">
	</head>
	
	<body>
		<header>
			<nav class="navbar navbar-expand-lg bg-white border-bottom box-shadow">
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
		
		<footer class="border-top footer text-muted">
			<div class="container">
				<h4>ООО «КодМедБио»</h4>
				
				<p class="text-muted text-center"><small><a href="http://www.ai-tech.ru">ai-tech.ru</a> &copy;2022<?=(date('Y') != 2022) ? '-'.date('Y') : ''?> All Rights Reserved.</small></p>
			</div>
		</footer>
	</body>
</html>