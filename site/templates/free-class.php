<?php snippet('header') ?>

<main class="classpage">
  <h1><?php echo $page->title(); ?></h1>

  <div class="content">
    <?php echo $page->text()->kirbytext(); ?>
  </div>

  <?php snippet('free-class') ?>

</main>

<?php snippet('footer') ?>