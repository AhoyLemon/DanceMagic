<?php snippet('header') ?>

  <main class="classpage" itemscope itemtype="http://schema.org/EducationEvent">
    <meta itemprop="url" content="<?php echo $page->url(); ?>" />
    
    <?php if ($page->featured_image() != ""): ?>
      <img src="<?php echo $page->featured_image()->toFile()->url(); ?>" class="cover" itemprop="image">
    <?php endif; ?>
    <h1 itemprop="name"><?php echo $page->title(); ?></h1>
    <div class="audience">
      <?php if ($page->minage() != "" && $page->maxage() != ""): ?>
        <div class="age-range" itemprop="typicalAgeRange" content="<?php echo $page->minage(); ?>-<?php echo $page->maxage(); ?>">
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
        <?php $classes = $page->parent(); ?>
        <?php if ($page->explevel() == "beginner") {
          $level = '<span data-tooltip="'.$page->parent()->beginner_desc().'">Beginner</span>';
        } else if ($page->explevel() == "intermediate") {
          $level = '<span data-tooltip="'.$page->parent()->intermediate_desc().'">Intermediate</span>';
        } else if ($page->explevel() == "advanced") {
          $level = '<span data-tooltip="'.$page->parent()->advanced_desc().'">Advanced</span>';
        } else if ($page->explevel() == "beginner_intermediate") {
          $level = '<span data-tooltip="'.$page->parent()->beginnerintermediate_desc().'">Beg/Int</span>';
        } else if ($page->explevel() == "intermediate_advanced") {
          $level = '<span data-tooltip="'.$page->parent()->intermediateadvanced_desc().'">Int/Adv</span>';
        } else {
          $level = $page->explevel();
        } ?>
        <div class="explevel">
          <span class="label">Level:</span>
          <span class="value"><?php echo $level; ?></span>
        </div>
      <?php endif; ?>
    </div>
    <meta itemprop="description" content="<?php echo $page->desc()->xml(); ?>" />
    <?php echo $page->text()->kirbytext(); ?>
    <div class="under-summary">
      <?php if ($page->weekday_list() != "") { ?>
        <div class="days"><span class="day"><?php echo $page->weekday_list(); ?></span></div>  
      <?php } else if ($page->weekday() != "") { ?>
        <div class="days"><span class="day"><?php echo $page->weekday(); ?></span></div>
      <?php } ?>
      <?php if ($page->datestarts() != "" && $page->dateends() != ""): ?>
        <div class="duration">
          <span class="start" itemprop="startDate" content="<?php echo $page->datestarts(); ?>"><?php echo date("M jS", strtotime($page->datestarts())); ?></span>
          -
          <span class="end" itemprop="endDate" content="<?php echo $page->dateends(); ?>"><?php echo date("M jS", strtotime($page->dateends())); ?></span>
        </div>
      <?php endif; ?>
      <?php if ($page->timestarts() != "" && $page->timeends() != ""): ?>
        <div class="times">
          <span class="time start" itemprop="doorTime" content="<?php echo $page->timestarts(); ?>" ><?php echo date("g:ia", strtotime($page->timestarts())); ?></span>
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
    <div class="price-and-button" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
      <?php if ($page->price() != ""): ?>
        <div class="tuition">
          <meta itemprop="priceCurrency" content="USD" />
          <span class="price" itemprop="price" content="<?php echo $page->price(); ?>">$<?php echo $page->price(); ?></span>
          <?php if ($page->priceper() != ""): ?>
            <span class="costper"><?php echo $page->priceper(); ?></span>
          <?php endif; ?>
        </div>
      <?php endif; ?>
      <?php if ($page->register_link() != ""): ?>
        <div class="signup">
          <?php if ($page->registration_status() == "open") { ?>
            <a itemprop="url" href="<?php echo $page->register_link(); ?>" class="button jackrabbit">Register Now</a>
          <?php } else if ($page->registration_status() == "pending") { ?>
            <a itemprop="url" disabled class="button">Registration Pending</a>
          <?php } else if ($page->registration_status() == "sold-out") { ?>
            <a itemprop="url" disabled class="button">Sold Out</a>
          <?php } else if ($page->registration_status() == "closed") { ?>
            <a itemprop="url" disabled class="button">Registration Closed</a>
          <?php } ?>
        </div>
      <?php endif; ?>
    </div>
    
    <?php if ($page->additional_details() != ""): ?>
      <div class="additional-details">
        <?php echo $page->additional_details()->kirbytext(); ?>
      </div>
    <?php endif; ?>
    
    <div itemprop="location" itemscope itemtype="http://schema.org/Place">
      <meta itemprop="name" content="<?php echo $site->title(); ?>" />
      <meta itemprop="url" content="<?php echo $site->url(); ?>" />
      <div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
        <meta itemprop="streetAddress" content="<?php echo $site->street_address(); ?>" />
        <meta itemprop="addressLocality" content="<?php echo $site->city(); ?>" />
        <meta itemprop="addressRegion" content="<?php echo $site->state(); ?>" />
        <meta itemprop="postalCode" content="<?php echo $site->zip(); ?>" />
      </div>
    </div>
    <div class="testamonial" itemprop="review" itemscope itemtype="http://schema.org/Review">
      <?php if ($page->testamonial() != "") { ?>
        <blockquote itemprop="description">
          <?php echo $page->testamonial()->kirbytext(); ?>
        </blockquote>
        <?php if ($page->citation() != ""): ?>
          <cite itemprop="author"><?php echo $page->citation(); ?></cite>
        <?php endif; ?>
      <?php } else { ?>
        <?php 
          $array_testamonials = $site->find('generic-testamonials')->testamonials()->yaml();
          $array_key = array_rand($array_testamonials);
          $testamonial = kirbytext($array_testamonials[$array_key]['text']);
          $cite = $array_testamonials[$array_key]['cite'];
        ?>
        <blockquote itemprop="description">
          <?php echo $testamonial; ?>
        </blockquote>
        <?php if ($cite != ""): ?>
          <cite itemprop="author">
            <?php echo $cite;  ?>
          </cite>
        <?php endif; ?>
      <?php } ?>
    </div>
    
    <!-- SUBLISTINGS -->
    
    <?php if ($page->sublisting_toggle() == "true"): ?>
    
      <?php foreach ($page->sublistings()->toStructure() as $sublisting): ?>
        <div class="sublisting">
          <?php if ($sublisting->weekday() != ""): ?>
            <div class="weekday">
              <?php echo $sublisting->weekday(); ?>
            </div>
          <?php endif; ?>
          <?php if ($sublisting->datestarts() != "" && $sublisting->dateends() != ""): ?>
            <div class="duration">
              <span class="start" itemprop="startDate"><?php echo date("M jS", strtotime($sublisting->datestarts())); ?></span>
              -
              <span class="end" itemprop="endDate"><?php echo date("M jS", strtotime($sublisting->dateends())); ?></span>
            </div>
          <?php endif; ?>
          <?php if ($sublisting->timestarts() != "" && $sublisting->timeends() != ""): ?>
            <div class="times">
              <span class="time start"><?php echo date("g:ia", strtotime($sublisting->timestarts())); ?></span>
              -
              <span class="time end"><?php echo date("g:ia", strtotime($sublisting->timeends())); ?></span>
            </div>
          <?php endif; ?>
          <?php if ($sublisting->price() != ""): ?>
            <div class="tuition">
              <meta itemprop="priceCurrency" content="USD" />
              <span class="price" itemprop="price" content="<?php echo $sublisting->price(); ?>">$<?php echo $sublisting->price(); ?></span>
              <?php if ($sublisting->priceper() != ""): ?>
                <span class="costper"><?php echo $sublisting->priceper(); ?></span>
              <?php endif; ?>
            </div>
          <?php endif; ?>
          <?php if ($sublisting->register_link() != ""): ?>
            <div class="signup">
              <?php if ($page->registration_status() == "open") { ?>
                <a href="<?php echo $sublisting->register_link(); ?>" class="button jackrabbit">Register Now</a>
              <?php } else if ($page->registration_status() == "pending") { ?>
                <a disabled class="button">Registration Pending</a>
              <?php } else if ($page->registration_status() == "sold-out") { ?>
                <a disabled class="button">Sold Out</a>
              <?php } else if ($page->registration_status() == "closed") { ?>
                <a disabled class="button">Registration Closed</a>
              <?php } ?>
            </div>
          <?php endif; ?>
        </div>
        
      <?php endforeach; ?>
    <?php endif; ?>
    
    <!-- SHARE THIS PAGE ON THE SOCIAL MEDIA OF YOUR CHOICE -->
    <div class="social-container">
      
      <div class="share-label">
        Share this:
      </div>
      
      <div class="social-buttons">
        <!-- FACEBOOK SHARE -->
        <a class="social facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo rawurlencode($page->url()); ?>" target="blank" title="Share on Facebook">
          <svg viewBox="0 0 100 100">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconFacebook"></use>
          </svg>
          <span class="label">Share on Facebook</span>
        </a>
        
        <!-- PIN THIS -->
        <?php if ($page->featured_image() != "") {
          $pinintent = 'https://pinterest.com/pin/create/button/?url=' . rawurlencode($page->url()) . '&description=' . rawurlencode($page->title()) .'&media=' . $page->featured_image()->toFile()->url();
        } else {
          $pinintent = 'https://pinterest.com/pin/create/button/?url=' . rawurlencode($page->url()) . '&description=' . rawurlencode($page->title());
        } ?>
        <a class="social pinterest" href="<?php echo $pinintent; ?>" target="blank" title="Pin This">
          <svg viewBox="0 0 100 100">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconPinterest"></use>
          </svg>
          <span class="label">Pin This</span>
        </a>

        <!-- TWEET THIS -->
        <a class="social twitter" href="https://twitter.com/intent/tweet?text=<?php echo rawurlencode($page->title()); ?>&url=<?php echo rawurlencode($page->url()); ?>" title="Tweet this">
          <svg viewBox="0 0 100 100">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconTwitter"></use>
          </svg>
          <span class="label">Tweet This</span>
        </a>

        <!-- GOOGLE+ SHARE -->
        <a class="social googleplus" href="https://plus.google.com/share?url=<?php echo rawurlencode ($page->url()); ?>&title=<?php echo rawurlencode($page->title()); ?>" target="_blank" title="Share on Google+"> 
          <svg viewBox="0 0 100 100">
            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconGooglePlusCircle"></use>
          </svg>
          <span class="label">Share on Google+</span>
        </a>
      </div>

    </div>
  </main>

<?php snippet('footer') ?>