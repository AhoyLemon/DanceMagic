<?php snippet('header') ?>

  <main class="home" style="background-image:url(<?php echo $page->bgimage()->toFile()->url(); ?>)">
    <div class="cover"></div>
    <div class="center-content">
      <div class="content">
        <summary><?php echo $page->text()->kirbytext(); ?></summary>
        <div class="button-holder">
          <a href="classes.html" class="button">
            <span class="first"><?php echo $page->cta_a(); ?></span>
            <span class="second"><?php echo $page->cta_b(); ?></span>
          </a>
        </div>
      </div>
    </div>
  </main>

<?php snippet('footer') ?>