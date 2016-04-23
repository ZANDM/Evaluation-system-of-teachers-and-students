<?php 
use yii\helpers\Html;
unset($params['params']);
?>
<div class="longtext">
	<?=Html::textarea($name, null, $params)?>
	<img class="noimg" />
	<label>
		<span class="btnAddImg">上传图片</span>
		<input type="file" name="<?=$name . '-img'?>" accept="image/jpeg,image/png,image/gif" />
	</label>
	<span class="btnRemoveImg">取消图片</span>
</div>