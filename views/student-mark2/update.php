<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMark2 */

$this->title = 'Update Student Mark2: ' . $model->Sno;
$this->params['breadcrumbs'][] = ['label' => 'Student Mark2s', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Sno, 'url' => ['view', 'id' => $model->Sno]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="student-mark2-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
