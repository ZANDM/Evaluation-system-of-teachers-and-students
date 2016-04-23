<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentMark1Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Mark1s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-mark1-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Mark1', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Sno',
            'zt',
            'jxhj',
            'zshj',
            'yshj',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
