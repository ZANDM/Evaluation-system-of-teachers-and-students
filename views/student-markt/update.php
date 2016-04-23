<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMarkt */

$this->title = 'Update Student Markt: ' . $model->Sno;
$this->params['breadcrumbs'][] = ['label' => 'Student Markts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Sno, 'url' => ['view', 'id' => $model->Sno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-markt-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
