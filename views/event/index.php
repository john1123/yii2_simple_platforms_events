<?php
 use \yii\widgets\LinkPager;
?>
<h1>Events</h1>
<div class="row">
    <ul>
        <?php foreach ($events as $event): ?>
            <?= $this->render('list-item', ['event' => $event]) ?>
        <?php endforeach; ?>
    </ul>
</div>
<div class="row">
    <?= LinkPager::widget(['pagination' => $pagination]) ?>
</div>

