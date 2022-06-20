<?php defined('SYSPATH') or die('No direct script access.') ?>

<div class="container">
	<h3 style="color: #0057a7;font-weight: bold;margin: 25px 0 20px 0;">УСЛУГИ И ЦЕНЫ</h3>
	<?=Form::open(NULL, ['id' => 'form_find'])?>
	<?=Form::input('string', '', ['id' => 'find', 'placeholder' => 'Введите название анализа'])?>
	<?=Form::input('submit', 'Найти', ['id' => 'button_find', 'type' => 'submit'])?>
	<?=Form::close()?>
	
	<table class="table table-striped">
		<tr>
			<th>КОД</th>
			<th>НАИМЕНОВАНИЕ УСЛУГИ</th>
			<th>ЦЕНА (руб)</th>
		</tr>
		<tr>
			<td>A08.01.001</td>
			<td>Морфологическое (гистологическое) исследование препарата кожи</td>
			<td>2000</td>
		</tr>
		<tr>
			<th>A08.31.007</th>
			<th>Просмотр гистологического препарата</th>
			<th></th>
		</tr>
		<tr>
			<td>A08.31.007.001</td>
			<td>Просмотр гистологического препарата (до 5 кусочков)</td>
			<td>2000</td>
		</tr>
	</table>
</div>

