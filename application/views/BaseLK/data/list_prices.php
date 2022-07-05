<?php defined('SYSPATH') or die('No direct script access.');?>

<div id="title">Заголовки исследований (Сайт)</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_price">
	Добавить новый анализ
</button>

<div style="width: 100%; text-align: right;">
	<b><?=Html::anchor('data', 'Назад')?></b>
</div>

<style>
    input[type="checkbox"].ios8-switch-sm + label
    {
        padding: 7px 0 0 32px;
    }
	
	.price:hover
	{
		background-color: #dee2e6!important;
	}
</style>

<table class="table table-striped">
	<tr>
		<th>
			КОД
		</th>
		<th>
			Название
		</th>
		<th>
			ЦЕНА (руб)
		</th>
		<th>
			Показывать
		</th>
	</tr>
	
	<?php foreach($themes as $theme){?>
		<?php if(isset($prices[$theme->id])){?>
			<tr>
				<th><?=$theme->code?></th>
				<th><?=$theme->title?></th>
				<th></th>
				<th></th>
			</tr>
			<?php foreach($prices[$theme->id] as $price){?>
				<tr class="price" style="cursor: pointer;" data-id="<?=$price->id?>" data-toggle="modal" data-target="#modal_edit_price">
					<td><?=$price->code?></td>
					<td><?=$price->title?></td>
					<td><?=$price->price?></td>
					<td>
						<input id="id_<?=$price->id?>" class="ios8-switch ios8-switch-sm" data-id="<?=$price->id?>" type="checkbox" <?=$price->show === '1' ? 'checked' : ''?>>
						<label class="form-label" for="id_<?=$price->id?>"></label>
					</td>
				</tr>
			<?php }?>
		<?php }?>
	<?php }?>
</table>


<div id="modal_add_price" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 400px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Добавление анализа</h4>
			</div>
			
			<div class="modal-body">
				<div class="form-group">
					<label class="form-label">Темы</label>
					<?=Form::select('theme', $themes2, NULL, ['id' => "theme", 'class' => 'form-select'])?>
				</div>
				
				<div class="form-group">
					<label>Название:</label>
					<input id="title" class="form-control" name="title" type="text">
				</div>
				
				<div class="form-group">
					<label>Сумма:</label>
					<input id="price" class="form-control" name="price" type="text">
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
				<button id="confirm_add_price" class="btn btn-primary" type="button" >Добавить</button>
			</div>
		</div>
	</div>
</div>

<div id="modal_edit_price" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 600px;">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Редактирование анализа</h4>
			</div>
			
			<div class="modal-body">
				<div class="form-group">
					<label class="form-label">Темы</label>
					<select id="e_theme" class="form-control" name="theme">
					
					</select>
				</div>
				
				<div class="form-group">
					<label>Название:</label>
					<textarea id="e_title" class="form-control" name="title" rows="3" style="resize: none;"></textarea>
				</div>
				
				<div class="form-group">
					<label>Сумма:</label>
					<input id="e_price" class="form-control" name="price" type="text">
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
				<button id="confirm_edit_price" class="btn btn-primary" type="button" >Обновить</button>
			</div>
		</div>
	</div>
</div>

<script>
	$('select').select2({
		language: "ru",
		width: '100%'
	});
	
	$(document).on('click', '.ios8-switch', function(){
		let elem_id = $(this).data('id');
		let val = $(this).is(':checked');

		$.ajax({
			type: "POST",
			url: "/ajax/change_show",
			data: {
				model: 'price',
				elem_id: elem_id,
				val: val
			},
			success: function(data){

			},
			error: function(data){
				alert("Ошибка!");
			}
		});
	});
	
	$(document).on('click', '.price', function(){
		let elem_id = $(this).data('id');
		
		$.ajax({
			type: "POST",
			url: "/ajax/get_data_price",
			dataType: 'json',
			data: {
				elem_id: elem_id
			},
			success: function(data){
				$('#e_theme').html(data.themes);
				$('#e_title').html(data.title);
				$('#e_price').val(data.price);
			},
			error: function(data){
				alert("Ошибка!");
			}
		});
	});
</script>