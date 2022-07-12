<?php defined('SYSPATH') or die('No direct script access.');?>

<main class="flex-shrink-0">
	<div class="container-xl">
		<div id="first">
			<div class="fl-block">
				<div id="f_title" class="flex-item align-self-start">
					<div style="padding: 10px;">Лаборатория патоморфологической и молекулярно-генетической диагностики опухолевых и предопухолевых заболеваний человека</div>
				</div>
				<div class="flex-item" style="width: 500px!important;">
					<form id="search" method="post" autocomplete="off">
						<h4>Проверить анализ</h4>
						
						<div id="error_fio" class="alert alert-danger" role="alert" style="display: none;">
							Проверьте правильность написания ФИО
						</div>
						
						<div id="answer">
							<b><span id="status"></span></b>
						</div>
						
						<div>
							<div class="form-group mt-1">
								<input id="fio" class="form-control" type="text" placeholder="ФИО" required>
							</div>
							<div class="form-group mt-1">
								<input id="number" class="form-control" type="text" placeholder="Номер анализа" required>
							</div>
							<div>
								<button id="check_analiz" type="button" class="btn btn-primary">Проверить</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div id="second" class="block" style="margin-bottom: 15px;">
			<h3>О НАС</h3>
			<p style="text-align: justify;">
				ООО «КОД-МЕД-БИО» - это коммерческая организация, созданная на базе и в тесном сотрудничестве с ФГБУ "РОНЦ им. Н.Н. Блохина" Минздрава России. Основная задача нашей организации осуществление широкого спектра морфологических исследований начиная от традиционных патологоанатомических до современных молекулярно-биологических исследований.
			</p>
			<div class="row">
				<div class="col-md-6 col-lg-6 text-center">
					<?=HTML::image('media/media/img/image4.jpg', ['class' => 'img1 img-fluid', 'alt' => 'img1'])?>
				</div>
				<div class="col-md-6 col-lg-6 text-center">
					<?=HTML::image('media/media/img/image5.jpg', ['id' => 'f_img', 'class' => 'img1 img-fluid', 'alt' => 'img2'])?>
				</div>
			</div>
		</div>
		
		<div id="third" style="margin-bottom: 15px;">
			<h3 class="block">ЛИЦЕНЗИИ</h3>
			<div class="row">
				<div class="col-md-12 col-lg-4 text-center">
					<?=HTML::image('media/media/img/Lic_1.jpg', ['class' => 'img2 img-fluid', 'alt' => 'licence_1'])?>
				</div>
				<div class="col-md-12 col-lg-4 text-center">
					<?=HTML::image('media/media/img/Lic_2.jpg', ['class' => 'img2 img-fluid', 'alt' => 'licence_2'])?>
				</div>
				<div class="col-md-12 col-lg-4 text-center">
					<?=HTML::image('media/media/img/Lic_3.jpg', ['class' => 'img2 img-fluid', 'alt' => 'licence_3'])?>
				</div>
			</div>
		</div>
		
		<div id="map" style="margin-bottom: 165px;">
			<h3 style="padding: 0 30px;">КОНТАКТЫ</h3>
			<?=HTML::image('media/media/img/map.jpg', ['class' => 'img-fluid', 'alt' => 'map'])?>
		</div>
	</div>
</main>

<script>
	$('#check_analiz').on('click', function(){
		let fio = $('#fio').val();
		let number = $('#number').val();
		
		$('#fio').css({'border-color': '#ccc'});
		$('#number').css({'border-color': '#ccc'});
		
		$('#answer').show();
		$('#error_fio').hide();
		
		if(fio === '' || number === '')
		{
			if(fio === '')
			{
				$('#fio').css({'border-color': '#FF2D3F'});
			}
			
			if(number === '')
			{
				$('#number').css({'border-color': '#FF2D3F'});
			}
		}
		else
		{
			let pat = /[А-ЯЁ][а-яё\-]+\s(\-?[А-ЯЁ]\.|[А-ЯЁ]-[А-ЯЁ]\.){2,}$/;
			
			if(pat.test(fio) === false)
			{
				$('#answer').hide();
				$('#error_fio').show();
			}
			else
			{
				$.ajax({
					type: "POST",
					url: "ajax/get_status",
					dataType: "json",
					data: {
						fio: fio,
						number: number
					},
					success: function(result){
						$('#status').html(result);
					}
				});
			}
		}
		
		return false;
	});
</script>