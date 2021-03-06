<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Platform */

$this->title = 'Create Platform';
$this->params['breadcrumbs'][] = ['label' => 'Platforms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row back-button">
    <?= Html::a('<span class=" glyphicon glyphicon-arrow-left" aria-hidden="true"></span>&nbsp;Back', ['/admin-platform'], ['class' => 'btn btn-success']) ?>
<div class="platform-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
