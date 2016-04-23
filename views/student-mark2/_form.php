<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMark2 */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-mark2-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Sno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jxhjw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jxhjr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zshjw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zshjr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yshjw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'yshjr')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
