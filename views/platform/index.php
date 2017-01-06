<?php
 use \yii\widgets\LinkPager;
?>
<h1>Platforms</h1>
<div class="row">
    <ul>
        <?php foreach ($platforms as $platform): ?>
            <?= $this->render('list-item', ['platform' => $platform]) ?>
        <?php endforeach; ?>
    </ul>
</div>
<div class="row">
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>

