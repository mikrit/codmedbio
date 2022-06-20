<?php defined('SYSPATH') or die('No direct script access.');?>

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

<div class="blue" style="background-color: #e0f3fb;height: 300px;">
	<div id="flex-container" class="container" style="height: 300px;">
		<div id="child-1" class="hd1">
			Лаборатория патоморфологической и молекулярно-генетической диагностики  опухолевых и предопухолевых  заболеваний  человека
		</div>
		<div id="child-2">
			<?=HTML::image('media/media/img/image1.webp', ['id' => 'img1'])?>
		</div>
	</div>
</div>

<div style="min-height: 300px;">
	<div id="flex-container" class="container" style="min-height: 280px;">
		<div id="child-1">
			<?=HTML::image('media/media/img/image3.jpg', ['id' => 'img1'])?>
		</div>
		<div id="child-2">
			<div class="jumbotron card">
				<h2>Проверить анализ</h2>
				<div id="error_fio" class="alert alert-danger" role="alert" style="display: none">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span> Проверьте правильность написания ФИО
				</div>
				<form id="search" class="form-signin" method="post">
					<?=Form::input('ФИО', '', array('type' => 'text', 'id' => 'fio', 'placeholder' => 'ФИО', 'class' => 'form-control', 'required' => ''));?>
					<?=Form::input('Номер анализа', '', array('type' => 'text', 'id' => 'number', 'placeholder' => '№ исследования', 'class' => 'form-control', 'required' => ''));?>
					<?=HTML::anchor('#', 'Проверить', array('id' => 'check_analiz', 'class' => 'btn btn-primary ladda-button', 'data-style' => 'zoom-in'));?>
				</form>
			</div>
		</div>
	</div>
</div>

<div class="blue" style="background-color: #e0f3fb;min-height: 300px;">
	<div class="container" style="padding: 10px 0px;">
		<h4 style="color: #0057a7;font-weight: bold;">О НАС</h4>
		<p>
			Код Мед Био - это коммерческая организация, созданная на базе и в тесном сотрудничестве с ФГБУ "РОНЦ им. Н.Н. Блохина" Минздрава Росии. Основная задача нашей организации осуществление широкого спектра морфологических исследований начиная от традиционных патологоанатомических до современных молекулярно-биологических исследований.
		</p>
		<div class="row">
			<div class="col-md-6">
				<?=HTML::image('media/media/img/image4.jpg', ['id' => 'img2'])?>
			</div>
			<div class="col-md-6">
				<?=HTML::image('media/media/img/image5.jpg', ['id' => 'img2'])?>
			</div>
		</div>
	</div>
</div>

<div style="height: 300px;">
	<div class="container">
	
	</div>
</div>

<div style="height: 300px;">
	<div class="container">
	
	</div>
</div>