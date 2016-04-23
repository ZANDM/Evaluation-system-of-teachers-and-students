<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMarkt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-markt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Sno')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ktfc')->textInput() ?>

    <?= $form->field($model, 'khfd')->textInput() ?>

    <?= $form->field($model, 'rwml')->textInput() ?>

    <?= $form->field($model, 'totw')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ottr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Tno')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
