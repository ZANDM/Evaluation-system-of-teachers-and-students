<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentCourseSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-course-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Cno') ?>

    <?= $form->field($model, 'Cname') ?>

    <?= $form->field($model, 'Tname') ?>

    <?= $form->field($model, 'Tno') ?>

    <?= $form->field($model, 'Sno') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
