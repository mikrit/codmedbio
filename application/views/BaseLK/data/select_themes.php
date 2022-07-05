<?php foreach($list_themes as $theme){?>
	<option value="<?=$theme->id?>" <?=$theme_id === $theme->id ? 'selected' : ''?>><?=$theme->title?></option>
<?php }?>
