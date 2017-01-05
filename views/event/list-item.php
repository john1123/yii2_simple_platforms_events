<div class="col-md-4 portfolio-item">
    <a href="#">
        <img class="img-responsive" src="/<?php echo $event->image ?>" alt="">
    </a>
    <h3><a href="#"><?php echo $event->name ?></a></h3>
    <h4><?php echo $event->start_date ?></h4>
    <h4><a href="/platform/view/?id=<?php echo $event->platform->id ?>"><?php echo $event->platform->name ?></a></h4>
    <p><?php echo $event->description ?></p>
</div>
