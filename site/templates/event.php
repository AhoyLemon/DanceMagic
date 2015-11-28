<?php snippet('header') ?>

  <main class="classpage">
    <?php if ($page->featured_image() != ""): ?>
      <img src="<?php echo $page->featured_image()->toFile()->url(); ?>" class="cover">
    <?php endif; ?>
    <h1><?php echo $page->title(); ?></h1>
    <?php echo $page->text()->kirbytext(); ?>
    <div class="under-summary">
      <?php if ($page->eventdate() != ""): ?>
        <time class="date"><?php echo date("l, F jS", strtotime($page->eventdate())); ?></time>
      <?php endif; ?>
      <?php if ($page->timestarts() != ""): ?>
        <time class="time">
          <span class="time start"><?php echo date("g:ia", strtotime($page->timestarts())); ?></span>
          <?php if ($page->timeends() != ""): ?>
            -
            <span class="time end"><?php echo date("g:ia", strtotime($page->timeends())); ?></span>
          <?php endif; ?>
        </time>
      <?php endif; ?>
      
      <?php if ($page->price() != ""): ?>
        <span class="cost">$<?php echo $page->price(); ?></span>
      <?php endif; ?>
      <?php if ($page->register_link()): ?>
        <div class="register-holder">
          <a href="<?php echo $page->register_link(); ?>" class="button jackrabbit">REGISTER NOW</a>
        </div>
      <?php endif; ?>
    </div>
  </main>

<?php snippet('footer') ?>