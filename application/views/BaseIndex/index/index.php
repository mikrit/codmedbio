<?php defined('SYSPATH') or die('No direct script access.');?>

<div class="blue" style="background-color: #e0f3fb;min-height: 300px;">
	<div class="container flex-container" style="min-height: 300px;padding: 10px 10px;">
		<div class="hd1 child-1" style="width: 85%">
			Лаборатория патоморфологической и молекулярно-генетической диагностики  опухолевых и предопухолевых  заболеваний  человека
		</div>
		<div class="child-2">
			<?=HTML::image('media/media/img/image1.webp', ['class' => 'img1', 'alt' => ''])?>
		</div>
	</div>
</div>

<div style="min-height: 300px;">
	<div class="container flex-container" style="min-height: 300px;padding: 10px 0px;">
		<div class="child-1">
			<?=HTML::image('media/media/img/image3.jpg', ['class' => 'img1', 'alt' => ''])?>
		</div>
		<div class="child-2">
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
	<div class="container" style="padding: 10px 10px;">
		<h4 style="color: #0057a7;font-weight: bold;">О НАС</h4>
		<p>
			Код Мед Био - это коммерческая организация, созданная на базе и в тесном сотрудничестве с ФГБУ "РОНЦ им. Н.Н. Блохина" Минздрава России. Основная задача нашей организации осуществление широкого спектра морфологических исследований начиная от традиционных патологоанатомических до современных молекулярно-биологических исследований.
		</p>
		<div class="row">
			<div class="col-md-6">
				<?=HTML::image('media/media/img/image4.jpg', ['class' => 'img2', 'alt' => ''])?>
			</div>
			<div class="col-md-6">
				<?=HTML::image('media/media/img/image5.jpg', ['class' => 'img2', 'alt' => ''])?>
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