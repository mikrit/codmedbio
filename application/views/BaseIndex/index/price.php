<?php defined('SYSPATH') or die('No direct script access.') ?>

<div class="container">
	<h3 style="color: #0057a7;font-weight: bold;margin: 25px 0 20px 0;">УСЛУГИ И ЦЕНЫ</h3>
	<?=Form::open(NULL, ['id' => 'form_find'])?>
	<?=Form::input('find', $find, ['id' => 'find', 'placeholder' => 'Введите название анализа'])?>
	<?=Form::input('submit', 'Найти', ['id' => 'button_find', 'type' => 'submit'])?>
	<?=Form::close()?>
	
	<table class="table table-striped">
		<tr>
			<th>КОД</th>
			<th>НАИМЕНОВАНИЕ УСЛУГИ</th>
			<th>ЦЕНА (руб)</th>
		</tr>
		
		<?php foreach($themes as $theme){?>
			<?php if(isset($prices[$theme->id])){?>
				<tr>
					<th><?=$theme->code?></th>
					<th><?=$theme->title?></th>
					<th></th>
				</tr>
				<?php foreach($prices[$theme->id] as $price){?>
					<tr>
						<td><?=$price->code?></td>
						<td><?=$price->title?></td>
						<td><?=$price->price?></td>
					</tr>
				<?php }?>
			<?php }?>
		<?php }?>
	</table>
</div>

<br/><br/><br/>

