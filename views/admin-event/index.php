<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\EventSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Events';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="event-index">

    <div class="row back-button">
        <?= Html::a('<span class=" glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;Back', ['/admin'], ['class' => 'btn btn-success']) ?>
    </div>
    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Event', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'platform.name',
            'start_date',
            'name',
            'image',
            // 'description',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
