<?php snippet('header') ?>

  <main class="contact-page">
    <h1><?php echo $page->title(); ?></h1>
    <section class="contact-info">
      <div class="physical-address">
        <a href="<?php echo $page->map_link(); ?>" class="address">
          <span><?php echo $page->address_one(); ?></span>
          <span><?php echo $page->address_two(); ?></span>
        </a>
      </div>
      <div class="phone-and-email">
        <span><a href="mailto:<?php echo $page->email(); ?>"><?php echo $page->email(); ?></a></span>
        <span><a href="tel:<?php echo $page->tel(); ?>"><?php echo $page->tel(); ?></a></span>
      </div>
    </section>
    <section>
      <?php echo $page->map_frame(); ?>
    </section>
  </main>

<?php snippet('footer') ?>