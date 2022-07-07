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
		
		<style>
			.card-container.card {
				max-width: 350px;
				padding: 40px 40px;
			}
			
			.card {
				background-color: #F7F7F7;
				/* just in case there no content*/
				padding: 20px 25px 30px;
				margin: 25px 0;
				/* shadows and rounded borders */
				-moz-border-radius: 5px;
				-webkit-border-radius: 5px;
				border-radius: 5px;
				-moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				-webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
				box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
			}
			
			.form-signin input[type=text],
			.form-signin button {
				width: 100%;
				display: block;
				margin-bottom: 10px;
				z-index: 1;
				position: relative;
				-moz-box-sizing: border-box;
				-webkit-box-sizing: border-box;
				box-sizing: border-box;
			}
			
			.form-signin .form-control:focus {
				border-color: rgb(109, 134, 162);
			}
		</style>
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
		
		<footer class="border-top footer text-muted">
			<div class="container">
				<h4>ООО «КодМедБио»</h4>
				
				<p class="text-muted text-center"><small><a href="http://www.ai-tech.ru">ai-tech.ru</a> &copy;2022<?=(date('Y') != 2022) ? '-'.date('Y') : ''?> All Rights Reserved.</small></p>
			</div>
		</footer>
	</body>
</html>