<?php snippet('header') ?>

  <main class="classes">
    
    <h1><?php echo $page->title(); ?></h1>
    <div class="class-finder">
      <div class="criteria age">
        <label>age</label>
        <input id="AgePick" type="number" step="1" min="2" max="99" placeholder="all">
      </div>
      <div class="criteria level">
        <label>level</label>
        <select id="SelectLevel">
          <option value="any">any</option>
          <option value="beginner">beginner</option>
          <option value="intermediate">intermediate</option>
          <option value="advanced">advanced</option>
        </select>
      </div>
      <div class="criteria session">
        <label>session</label>
        <select id="SelectSession">
          <option val="any">any</option>
          <option value="schoolyear">School Year</option>
          <option value="summer">Summer</option>
        </select>
      </div>
      <div class="criteria type">
        <label>Type of Class</label>
        <select id="SelectClassType">
          <option value="any">any</option>
          <option value="dance">Dance</option>
          <option value="music">Music</option>
          <option value="camp">Camp</option>
        </select>
      </div>
    </div>
    
    
    <!-- Class Listing -->
    <div class="class-listing">
      <?php if ($page->find('free-class')): ?>
        <?php $class = $page->find('free-class'); ?>
        <article class="featured-class">
          <?php if ($class->featured_image() != ""): ?>
            <?php $thumb = thumb($class->featured_image()->toFile(), array('height' => 200)); ?>
            <img src="<?php echo $thumb->url(); ?>" class="cover">
          <?php endif; ?>
          <h3>
            <a href="<?php echo $class->url(); ?>">
              <?php echo $class->title(); ?>
            </a>
          </h3>
          <summary>
            <?php echo $class->desc()->kirbytext(); ?>
          </summary>
          <div class="button-holder">
            <a href="<?php echo $class->url(); ?>" class="button">SIGN UP</a>
          </div>
        </article>
      <?php endif; ?>
      
      <?php foreach ($page->children()->visible()->filterBy('template', 'class') as $class): ?>
        <article
          <?php if ($class->minage() != ""): ?>min-age="<?php echo $class->minage(); ?>"<?php endif; ?>
          <?php if ($class->maxage() != ""): ?>max-age="<?php echo $class->maxage(); ?>"<?php endif; ?>
          <?php if ($class->explevel() != "" || $class->explevel() != "any"): ?>explevel="<?php echo $class->explevel(); ?>"<?php endif; ?>
          <?php if ($class->session() != ""): ?>session="<?php echo $class->session(); ?>"<?php endif; ?>
          <?php if ($class->classtype() != ""): ?>classtype="<?php echo $class->classtype(); ?>"<?php endif; ?>
        class="class">
          <?php if ($class->featured_image() != ""): ?>
            <div style="background-image:url(<?php echo $class->featured_image()->toFile()->url(); ?>)" class="img-cover"></div>
          <?php endif; ?>
          <div class="inner">
            <h3><a href="<?php echo $class->url(); ?>"><?php echo $class->title(); ?></a></h3>
            <div class="audience">
              <?php if ($class->minage() != "" && $class->maxage() != ""): ?>
                <div class="age-range">
                  <span class="label">Ages: </span>
                  <span class="age min value"><?php echo $class->minage(); ?></span>
                  - 
                  <span class="age max value"><?php echo $class->maxage(); ?></span>
                </div>
              <?php endif; ?>
              <?php if ($class->classtype() != ""): ?>
                <div class="classtype">
                  <span class="label">Class Type:</span>
                  <span class="value"><?php echo $class->classtype(); ?></span>
                </div>
              <?php endif; ?>
              <?php if ($class->explevel() != ""): ?>
                 <?php if ($class->explevel() == "beginner") {
                    $level = '<span data-tooltip="less than 2 years experience">Beginner</span>';
                  } else if ($class->explevel() == "intermediate") {
                    $level = '<span data-tooltip="2-5 years of experience">Intermediate</span>';
                  } else if ($class->explevel() == "advanced") {
                    $level = '<span data-tooltip="more than 4 years of experience">Advanced</span>';
                  } else if ($class->explevel() == "beginner_intermediate") {
                    $level = '<span data-tooltip="up to 5 years of experience">Beginner+</span>';
                  } else if ($class->explevel() == "intermediate_advanced") {
                    $level = '<span data-tooltip="4-9 years of experience">Intermediate+</span>';
                  } else {
                    $level = $class->explevel();
                  } ?>
                <div class="explevel">
                  <span class="label">Level:</span>
                  <span class="value"><?php echo $level; ?></span>
                </div>
              <?php endif; ?>
            </div>
            <summary>
              <?php echo $class->desc()->kirbytext(); ?> 
            </summary>
            <div class="under-summary">
              <?php if ($class->weekday() != ""): ?>
                <div class="days"><span class="day"><?php echo $class->weekday(); ?></span></div>
              <?php endif; ?>
              <?php if ($class->datestarts() != "" && $class->dateends() != ""): ?>
                <div class="duration">
                  <span class="start"><?php echo date("M jS", strtotime($class->datestarts())); ?></span>
                  -
                  <span class="end"><?php echo date("M jS", strtotime($class->dateends())); ?></span>
                </div>
              <?php endif; ?>
              <?php if ($class->timestarts() != "" && $class->timeends() != ""): ?>
                <div class="times">
                  <span class="time start"><?php echo date("g:ia", strtotime($class->timestarts())); ?></span>
                  -
                  <span class="time end"><?php echo date("g:ia", strtotime($class->timeends())); ?></span>
                </div>
              <?php endif; ?>
              <?php if ($class->gender() != ""): ?>
                <div class="gender">
                  <span class="label">Gender:</span>
                  <span class="value"><?php echo $class->gender(); ?></span>
                </div>
              <?php endif; ?>
            </div>
            <?php if ($class->price() != ""): ?>
              <div class="cost">
                <span class="price">$<?php echo $class->price(); ?></span>
                <?php if ($class->priceper() != ""): ?>
                  <span class="costper"><?php echo $class->priceper(); ?></span>
                <?php endif; ?>
              </div>
            <?php endif; ?>
          </div>
          <a href="<?php echo $class->url(); ?>" class="button">Learn More</a>
        </article>
      <?php endforeach; ?>
    
    
  </main>

<?php snippet('footer') ?>