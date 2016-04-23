<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMark1 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-mark1-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Sno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zt')->textInput() ?>

    <?= $form->field($model, 'jxhj')->textInput() ?>

    <?= $form->field($model, 'zshj')->textInput() ?>

    <?= $form->field($model, 'yshj')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
