<div class="col-md-3 col-sm-6 hero-feature">
    <div class="thumbnail">
        <img width="800" height="500" src="/<?=$platform->image?>" alt="">
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
