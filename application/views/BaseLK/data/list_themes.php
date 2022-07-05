<?php defined('SYSPATH') or die('No direct script access.');?>

<div id="title">Заголовки исследований (Сайт)</div>

<div style="width: 100%; text-align: right;">
	<b><?=Html::anchor('data', 'Назад')?></b>
</div>

<style>
	input[type="checkbox"].ios8-switch-sm + label
	{
		padding: 7px 0 0 32px;
	}
</style>

<table class="table table-striped">
	<tr>
		<th>
			№
		</th>
		<th>
			КОД
		</th>
		<th>
			Название
		</th>
		<th>
			Показывать
		</th>
	</tr>
	<?php $i=1;foreach($data as $theme){?>
		<tr>
			<td>
				<?=$i++?>
			</td>
			<td>
				<?=$theme->code?>
			</td>
			<td>
				<?=$theme->title?>
			</td>
			<td>
				<input id="id_<?=$theme->id?>" class="ios8-switch ios8-switch-sm" data-id="<?=$theme->id?>" type="checkbox" <?=$theme->show === '1' ? 'checked' : ''?>>
				<label class="form-label" for="id_<?=$theme->id?>"></label>
			</td>
		</tr>
	<?php }?>
</table>

<script>
	$(document).on('click', '.ios8-switch', function(){
		let elem_id = $(this).data('id');
		let val = $(this).is(':checked');
		
		$.ajax({
			type: "POST",
			url: "/ajax/change_show",
			data: {
				model: 'theme',
				elem_id: elem_id,
				val: val
			},
			success: function(data){
			
			},
			error: function(data){
				alert("Ошибка смены статуса");
			}
		});
	});
</script>