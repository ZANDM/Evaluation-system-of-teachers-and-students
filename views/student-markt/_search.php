<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMarktSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-markt-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Sno') ?>

    <?= $form->field($model, 'ktfc') ?>

    <?= $form->field($model, 'khfd') ?>

    <?= $form->field($model, 'rwml') ?>

    <?= $form->field($model, 'totw') ?>

    <?php // echo $form->field($model, 'ottr') ?>

    <?php // echo $form->field($model, 'Tno') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
