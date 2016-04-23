<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentCourse */

$this->title = 'Update Student Course: ' . $model->Cno;
$this->params['breadcrumbs'][] = ['label' => 'Student Courses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Cno, 'url' => ['view', 'id' => $model->Cno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-course-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
