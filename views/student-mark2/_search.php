<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMark2Search */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-mark2-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Sno') ?>

    <?= $form->field($model, 'jxhjw') ?>

    <?= $form->field($model, 'jxhjr') ?>

    <?= $form->field($model, 'zshjw') ?>

    <?= $form->field($model, 'zshjr') ?>

    <?php // echo $form->field($model, 'yshjw') ?>

    <?php // echo $form->field($model, 'yshjr') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
