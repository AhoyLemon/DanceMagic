<?php snippet('header') ?>

  <main class="about-us">
    <h1><?php echo $page->title(); ?></h1>
    <?php echo $page->text()->kirbytext(); ?>
    <section class="instructors">
      <h2><?php $page->staff_title(); ?></h2>
      <?php if ($page->staff_image() != ""): ?>
        <?php $thumb = thumb($page->staff_image()->toFile(), array('height' => 200)); ?>
        <img src="<?php echo $thumb->url(); ?>" class="cover">
      <?php endif; ?>
      <?php echo $page->staff_text()->kirbytext(); ?>
      <p>
        <a href="<?php echo $page->url(); ?>/staff" class="button">Meet Our Staff</a>
      </p>
    </section>
    <section class="faq">
      <h2><?php echo $page->faq_title(); ?></h2>
      <?php echo $page->faq_text()->kirbytext(); ?>
      <dl class="faq">
        <?php foreach ($page->faqs()->toStructure() as $faq): ?>
          <dt class="question"><?php echo $faq->question(); ?></dt>
          <dd class="answer"><?php echo $faq->answer()->kirbytext(); ?></dd>
        <?php endforeach; ?>
      </dl>
    </section>
  </main>

<?php snippet('footer') ?>