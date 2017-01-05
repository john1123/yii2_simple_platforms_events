<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Event */
/* @var $platforms */

$this->title = 'Create Event';
$this->params['breadcrumbs'][] = ['label' => 'Events', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row back-button">
    <?= Html::a('<span class=" glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;Back', ['/admin-event'], ['class' => 'btn btn-success']) ?>
</div>

<div class="event-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'platforms' => $platforms,
    ]) ?>

</div>
