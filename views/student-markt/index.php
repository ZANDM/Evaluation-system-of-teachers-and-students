<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentMarktSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Student Markts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="student-markt-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Student Markt', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Sno',
            'ktfc',
            'khfd',
            'rwml',
            'totw',
            // 'ottr',
            // 'Tno',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
