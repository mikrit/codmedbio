<?php defined('SYSPATH') or die('No direct script access.');?>

<div id="title">Заголовки исследований (Сайт)</div>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal_add_theme">
	Добавить новую группу
</button>

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
		<tr>
			<th class="theme" data-id="<?=$theme->id?>" data-toggle="modal" data-target="#modal_edit_theme" style="cursor: pointer;"><?=$theme->code?></th>
			<th class="theme" data-id="<?=$theme->id?>" data-toggle="modal" data-target="#modal_edit_theme" style="cursor: pointer;"><?=$theme->title?></th>
			<th class="theme" data-id="<?=$theme->id?>" data-toggle="modal" data-target="#modal_edit_theme" style="cursor: pointer;"></th>
			<th>
				<input id="id_t_<?=$theme->id?>" class="ios8-switch ios8-switch-sm" data-id="<?=$theme->id?>" data-model="theme" type="checkbox" <?=$theme->show === '1' ? 'checked' : ''?> style="cursor: pointer;">
				<label class="form-label" for="id_t_<?=$theme->id?>"></label>
			</th>
		</tr>
		<?php if(isset($prices[$theme->id])){?>
			<?php foreach($prices[$theme->id] as $price){?>
				<tr>
					<td class="price" data-id="<?=$price->id?>" data-toggle="modal" data-target="#modal_edit_price" style="cursor: pointer;"><?=$price->code?></td>
					<td class="price" data-id="<?=$price->id?>" data-toggle="modal" data-target="#modal_edit_price" style="cursor: pointer;"><?=$price->title?></td>
					<td class="price" data-id="<?=$price->id?>" data-toggle="modal" data-target="#modal_edit_price" style="cursor: pointer;"><?=$price->price?></td>
					<td>
						<input id="id_p_<?=$price->id?>" class="ios8-switch ios8-switch-sm" data-id="<?=$price->id?>" data-model="price" type="checkbox" <?=$price->show === '1' ? 'checked' : ''?> style="cursor: pointer;">
						<label class="form-label" for="id_p_<?=$price->id?>"></label>
					</td>
				</tr>
			<?php }?>
		<?php }?>
	<?php }?>
</table>

<br/><br/><br/>


<div id="modal_add_theme" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 600px;">
		<?=Form::open(NULL, array('id' => 'add_theme', 'method'=>'post'))?>
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Добавление группы анализов</h4>
				</div>
				
				<div class="modal-body">
					<div class="form-group">
						<label>Код:</label>
						<input class="form-control" name="code" type="text" required>
					</div>
					
					<div class="form-group">
						<label>Название:</label>
						<textarea class="form-control" name="title" rows="3" style="resize: none;" required></textarea>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
					<button class="btn btn-primary" type="submit">Добавить</button>
				</div>
			</div>
		<?=Form::close()?>
	</div>
</div>

<div id="modal_edit_theme" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 600px;">
		<?=Form::open(NULL, array('id' => 'edit_theme', 'method'=>'post'))?>
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Редактирование группы анализов</h4>
			</div>
			
			<div class="modal-body">
				<div class="form-group">
					<label>Код:</label>
					<input id="e_t_code" class="form-control" name="code" type="text" required>
				</div>
				
				<div class="form-group">
					<label>Название:</label>
					<textarea id="e_t_title" class="form-control" name="title" rows="3" style="resize: none;" required></textarea>
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
				<button class="btn btn-primary" type="submit">Обновить</button>
			</div>
		</div>
		<?=Form::close()?>
	</div>
</div>

<div id="modal_add_price" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 600px;">
		<?=Form::open(NULL, array('id' => 'add_price', 'method'=>'post'))?>
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Добавление анализа</h4>
				</div>
				
				<div class="modal-body">
					<div class="form-group">
						<label class="form-label">Темы</label>
						<?=Form::select('theme', $themes2, NULL, ['class' => 'form-select'])?>
					</div>
					
					<div class="form-group">
						<label>Код:</label>
						<input class="form-control" name="code" type="text" required>
					</div>
					
					<div class="form-group">
						<label>Название:</label>
						<textarea class="form-control" name="title" rows="3" style="resize: none;" required></textarea>
					</div>
					
					<div class="form-group">
						<label>Сумма:</label>
						<input class="form-control" name="price" type="text" pattern="[0-9]+(\.[0-9]{1,2})?%?" required>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
					<button class="btn btn-primary" type="submit">Добавить</button>
				</div>
			</div>
		<?=Form::close()?>
	</div>
</div>

<div id="modal_edit_price" class="modal fade" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" style="width: 600px;">
		<?=Form::open(NULL, array('id' => 'edit_price', 'method'=>'post'))?>
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
						<label>Код:</label>
						<input id="e_code" class="form-control" name="code" type="text" required>
					</div>
					
					<div class="form-group">
						<label>Название:</label>
						<textarea id="e_title" class="form-control" name="title" rows="3" style="resize: none;" required></textarea>
					</div>
					
					<div class="form-group">
						<label>Сумма:</label>
						<input id="e_price" class="form-control" name="price" type="text" pattern="[0-9]+(\.[0-9]{1,2})?%?" required>
					</div>
				</div>
				
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Отмена</button>
					<button class="btn btn-primary" type="submit">Обновить</button>
				</div>
			</div>
		<?=Form::close()?>
	</div>
</div>

<script>
	$('select').select2({
		language: "ru",
		width: '100%'
	});
	
	let elem_id = 0;
	
	$(document).on('click', '.ios8-switch', function(){
		let elem_id = $(this).data('id');
		let val = $(this).is(':checked');

		$.ajax({
			type: "POST",
			url: "/ajax/change_show",
			data: {
				model: $(this).data('model'),
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
	
	$(document).on('submit', '#add_theme', function(e){
		e.preventDefault();
		let fd = new FormData($('#add_theme').get(0));
		
		$.ajax({
			type: "POST",
			url: "/ajax/add_theme",
			contentType: false,
			processData: false,
			data: fd,
			success: function(){
				window.location.reload();
			},
			error: function(){
				alert("Ошибка!");
			}
		});
		
		return false;
	});
	
	$(document).on('click', '.theme', function(){
		elem_id = $(this).data('id');
		
		$.ajax({
			type: "POST",
			url: "/ajax/get_data_theme",
			dataType: 'json',
			data: {
				elem_id: elem_id
			},
			success: function(data){
				$('#e_t_code').val(data.code);
				$('#e_t_title').html(data.title);
			},
			error: function(data){
				alert("Ошибка!");
			}
		});
	});
	
	$(document).on('submit', '#edit_theme', function(e){
		e.preventDefault();
		let fd = new FormData($('#edit_theme').get(0));
		
		fd.append('elem_id', elem_id);
		
		$.ajax({
			type: "POST",
			url: "/ajax/edit_theme",
			contentType: false,
			processData: false,
			data: fd,
			success: function(){
				window.location.reload();
			},
			error: function(){
				alert("Ошибка!");
			}
		});
	});
	
	$(document).on('submit', '#add_price', function(e){
		e.preventDefault();
		let fd = new FormData($('#add_price').get(0));
		
		console.log(fd);
		
		$.ajax({
			type: "POST",
			url: "/ajax/add_price",
			contentType: false,
			processData: false,
			data: fd,
			success: function(){
				window.location.reload();
			},
			error: function(){
				alert("Ошибка!");
			}
		});
		
		return false;
	});
	
	$(document).on('click', '.price', function(){
		elem_id = $(this).data('id');
		
		$.ajax({
			type: "POST",
			url: "/ajax/get_data_price",
			dataType: 'json',
			data: {
				elem_id: elem_id
			},
			success: function(data){
				$('#e_theme').html(data.themes);
				$('#e_code').val(data.code);
				$('#e_title').html(data.title);
				$('#e_price').val(data.price);
			},
			error: function(data){
				alert("Ошибка!");
			}
		});
	});
	
	$(document).on('submit', '#edit_price', function(e){
		e.preventDefault();
		let fd = new FormData($('#edit_price').get(0));
		
		fd.append('elem_id', elem_id);
		
		$.ajax({
			type: "POST",
			url: "/ajax/edit_price",
			contentType: false,
			processData: false,
			data: fd,
			success: function(){
				window.location.reload();
			},
			error: function(){
				alert("Ошибка!");
			}
		});
	});
</script>