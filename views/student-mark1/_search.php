<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMark1Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-mark1-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Sno') ?>

    <?= $form->field($model, 'zt') ?>

    <?= $form->field($model, 'jxhj') ?>

    <?= $form->field($model, 'zshj') ?>

    <?= $form->field($model, 'yshj') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
