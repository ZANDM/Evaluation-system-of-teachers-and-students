<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StudentMarkt */

$this->title = $model->Sno;
$this->params['breadcrumbs'][] = ['label' => 'Student Markts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-markt-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->Sno], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->Sno], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'Sno',
            'ktfc',
            'khfd',
            'rwml',
            'totw',
            'ottr',
            'Tno',
        ],
    ]) ?>

</div>
