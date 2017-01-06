<div class="col-md-3 col-sm-6 hero-feature">
    <div class="thumbnail">
        <img class="img-responsive platform-list-item" src="/<?=$platform->image?>" alt="<?= $platform->name ?>" title="<?= $platform->name ?>>
        <div class="caption">
            <h3><?= $platform->name?></h3>
            <p><?= $platform->description?></p>
            <p>
                <a href="#" class="btn btn-primary">Buy Now!</a>
                <a href="/platform/view/?id=<?= $platform->id?>" class="btn btn-default">More Info</a>
            </p>
        </div>
    </div>
</div>
