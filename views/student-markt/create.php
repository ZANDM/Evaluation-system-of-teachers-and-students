<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StudentMarkt */

$this->title = 'Create Student Markt';
$this->params['breadcrumbs'][] = ['label' => 'Student Markts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-markt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
