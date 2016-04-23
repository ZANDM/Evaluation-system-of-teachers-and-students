<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentCourse */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-course-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Cno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Cname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Sno')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
