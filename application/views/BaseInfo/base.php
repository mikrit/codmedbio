<?php defined('SYSPATH') or die('No direct script access.');?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>КодМедБио</title>
		
		<?=Html::style('application/media/bootstrap/dist/css/bootstrap.min.css')?>
		<?=Html::style('application/media/css/site.css')?>
		
		<?=Html::script('application/media/js/jquery.min.js')?>
		<?=Html::script('application/media/bootstrap/dist/js/bootstrap.bundle.min.js')?>
		
		<link rel="icon" href="/application/media/img/favicon.ico">
	</head>
	
	<body>
		<header>
			<nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
				<div class="container">
					<a class="navbar-brand" href="/">ООО «КодМедБио»</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
						<?=$menu?>
					</div>
				</div>
			</nav>
		</header>
		
		<div class="container">
			<main role="main" class="pb-3">
				<?=$content?>
			</main>
		</div>
		
		<footer class="border-top footer text-muted">
			<div class="container">
				<p class="text-muted text-center"><small><a href="http://www.ai-tech.ru">ai-tech.ru</a> &copy;2022<?=(date('Y') != 2022) ? '-'.date('Y') : ''?> All Rights Reserved.</small></p>
			</div>
		</footer>
	</body>
</html>