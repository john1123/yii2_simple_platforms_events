<div class="row">
    <div class="col-platform-image-preview pull-left">
        <img class="img-responsive platform-view" src="/<?= $platform->image?>" alt="<?= $platform->name ?>" title="<?= $platform->name ?>">
    </div>
    <div class="pull-left">
        <h2 class="name"><?= $platform->name ?></h2>
        <div class="description"><?= $platform->description ?></div>
    </div>
</div>
<p></p>
<div class="row">
    <?php foreach ($platform->events as $event) {
        echo $this->render('../event/list-item', ['event' => $event]);
    } ?>
</div>
