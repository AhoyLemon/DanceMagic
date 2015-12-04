<?php snippet('header') ?>

<main class="classpage">
  <?php if ($page->featured_image() != ""): ?>
    <img src="<?php echo $page->featured_image()->toFile()->url(); ?>" class="cover">
  <?php endif; ?>
  <h1><?php echo $page->title(); ?></h1>

  <div class="content">
    <?php echo $page->text()->kirbytext(); ?>
  </div>

  <?php snippet('free-class') ?>

</main>

<?php snippet('footer') ?>