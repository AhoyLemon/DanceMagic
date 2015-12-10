<?php snippet('header') ?>

<main class="main" role="main">

  <div class="text">
    <h1><?php echo $page->title()->html() ?></h1>

    <div class="event-listing">
      
      <?php if ($page->gcal_toggle() == "true"): ?>
        <article class="event calendar-holder" style="padding:5px">
          <iframe src="<?php echo $page->gcal_url(); ?>" style="border-width:0" width="100%" height="<?php echo $page->gcal_height(); ?>" frameborder="0" scrolling="no"></iframe>
        </article>
      <?php endif; ?>
      
      <?php foreach ($page->children()->visible() as $event): ?>
        <article class="event">
          <?php if ($event->featured_image() != ""): ?>
            <div style="background-image:url(<?php echo $event->featured_image()->toFile()->url(); ?>)" class="img-cover"></div>
          <?php endif; ?>
          <div class="inner">
            <h3><a href="<?php echo $event->url(); ?>"><?php echo $event->title(); ?></a></h3>
            <div class="glance">
              <?php if ($event->price() != ""): ?>
                <span class="cost">$<?php echo $event->price(); ?></span>
              <?php endif; ?>
              <?php if ($event->eventdate() != ""): ?>
                <time class="date"><?php echo date("l, F jS", strtotime($event->datestarts())); ?></time>
              <?php endif; ?>
              <?php if ($event->timestarts() != ""): ?>
                <time class="time">
                  <span class="time start"><?php echo date("g:ia", strtotime($event->timestarts())); ?></span>
                  <?php if ($event->timeends() != ""): ?>
                    -
                    <span class="time end"><?php echo date("g:ia", strtotime($event->timeends())); ?></span>
                  <?php endif; ?>
                </time>
              <?php endif; ?>
            </div>
            <summary>
              <?php echo $event->desc()->kirbytext(); ?>
            </summary>
            <a href="<?php echo $event->url(); ?>" class="button">Learn More</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>


  </div>

</main>

<?php snippet('footer') ?>