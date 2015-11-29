<?php snippet('header') ?>

  <main class="contact-page">
    <h1><?php echo $page->title(); ?></h1>
    <section class="contact-info">
      <div class="physical-address">
        <a href="<?php echo $site->google_map(); ?>" class="address">
          <span><?php echo $site->street_address(); ?></span>
          <span><?php echo $site->city(); ?>,<?php echo $site->state(); ?> <?php echo $site->zip(); ?></span>
        </a>
      </div>
      <div class="phone-and-email">
        <span><a href="mailto:<?php echo $site->email(); ?>"><?php echo $site->email(); ?></a></span>
        <span><a href="tel:<?php echo $site->tel(); ?>"><?php echo $site->tel(); ?></a></span>
      </div>
    </section>
    <section>
      <?php echo $page->map_frame(); ?>
    </section>
  </main>

<?php snippet('footer') ?>