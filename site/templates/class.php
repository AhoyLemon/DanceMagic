<?php snippet('header') ?>

  <main class="classpage">
    <?php if ($page->featured_image() != ""): ?>
      <img src="<?php echo $page->featured_image()->toFile()->url(); ?>" class="cover">
    <?php endif; ?>
    <h1><?php echo $page->title(); ?></h1>
    <div class="audience">
      <?php if ($page->minage() != "" && $page->maxage() != ""): ?>
        <div class="age-range">
          <span class="label">Ages: </span>
          <span class="age min value"><?php echo $page->minage(); ?></span>
          - 
          <span class="age max value"><?php echo $page->maxage(); ?></span>
        </div>
      <?php endif; ?>
      <?php if ($page->classtype() != ""): ?>
        <div class="classtype">
          <span class="label">Class Type:</span>
          <span class="value"><?php echo $page->classtype(); ?></span>
        </div>
      <?php endif; ?>
      <?php if ($page->explevel() != ""): ?>
        <?php if ($page->explevel() == "beginner") {
          $level = "Beginner (0-2 yrs)";
        } else if ($page->explevel() == "intermediate") {
          $level = "Intermediate (2-5 yrs)";
        } else if ($page->explevel() == "advanced") {
          $level = "Advanced (4-10 yrs)";
        } else if ($page->explevel() == "beginner_intermediate") {
          $level = "Beginner/Intermediate (0-5 yrs)";
        } else if ($page->explevel() == "intermediate_advanced") {
          $level = "Intermediate/Advanced (4-10 yrs)";
        } ?>
        <div class="explevel">
          <span class="label">Level:</span>
          <span class="value"><?php echo $level; ?></span>
        </div>
      <?php endif; ?>
    </div>
    <?php echo $page->text()->kirbytext(); ?>
    <div class="under-summary">
      <?php if ($page->weekday() != ""): ?>
        <div class="days"><span class="day"><?php echo $page->weekday(); ?></span></div>
      <?php endif; ?>
      <?php if ($page->datestarts() != "" && $page->dateends() != ""): ?>
        <div class="duration">
          <span class="start"><?php echo date("M jS", strtotime($page->datestarts())); ?></span>
          -
          <span class="end"><?php echo date("M jS", strtotime($page->dateends())); ?></span>
        </div>
      <?php endif; ?>
      <?php if ($page->timestarts() != "" && $page->timeends() != ""): ?>
        <div class="times">
          <span class="time start"><?php echo date("g:ia", strtotime($page->timestarts())); ?></span>
          -
          <span class="time end"><?php echo date("g:ia", strtotime($page->timeends())); ?></span>
        </div>
      <?php endif; ?>
      <?php if ($page->gender() != ""): ?>
        <div class="gender">
          <span class="label">Gender:</span>
          <span class="value"><?php echo $page->gender(); ?></span>
        </div>
      <?php endif; ?>
    </div>
    <div class="price-and-button">
      <div class="tuition">
        <?php if ($page->price() != ""): ?>
          <span class="price">$<?php echo $page->price(); ?></span>
        <?php endif; ?>
        <?php if ($page->priceper() != ""): ?>
          <span class="costper"><?php echo $page->priceper(); ?></span>
        <?php endif; ?>
      </div>
      <div class="signup"><a href="<?php echo $page->register_link(); ?>" class="button jackrabbit">Register Now</a></div>
    </div>
    <div class="testamonial">
      <?php if ($page->testamonial() != "") { ?>
        <blockquote>
          <?php echo $page->testamonial()->kirbytext(); ?>
        </blockquote>
        <?php if ($page->citation() != ""): ?>
          <cite><?php echo $page->citation(); ?></cite>
        <?php endif; ?>
      <?php } else { ?>
        <?php 
          $array_testamonials = $site->find('generic-testamonials')->testamonials()->yaml();
          $array_key = array_rand($array_testamonials);
          $testamonial = kirbytext($array_testamonials[$array_key]['text']);
          $cite = $array_testamonials[$array_key]['cite'];
        ?>
        <blockquote>
          <?php echo $testamonial; ?>
        </blockquote>
        <?php if ($cite != ""): ?>
          <cite>
            <?php echo $cite;  ?>
          </cite>
        <?php endif; ?>
      <?php } ?>
    </div>
  </main>

<?php snippet('footer') ?>