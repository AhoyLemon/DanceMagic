<?php snippet('header') ?>

  <?php if ($page->eventdate() != "") {
    $itemType = "http://schema.org/Event";
  } else {
    $itemType = "";
  } ?>

  <main class="classpage" itemscope itemtype="<?php echo $itemType; ?>">
    <?php if ($page->featured_image() != ""): ?>
      <img src="<?php echo $page->featured_image()->toFile()->url(); ?>" class="cover" itemprop="image">
    <?php endif; ?>
    <h1 itemprop="name"><?php echo $page->title(); ?></h1>
    <meta itemprop="description" content="<?php echo $page->desc()->xml(); ?>" />
    <?php echo $page->text()->kirbytext(); ?>
    <div class="under-summary">
      <?php if ($page->eventdate() != ""): ?>
        <time class="date" itemprop="startDate" content="<?php echo $page->eventdate(); ?>"><?php echo date("l, F jS", strtotime($page->eventdate())); ?></time>
      <?php endif; ?>
      <?php if ($page->timestarts() != ""): ?>
        <time class="time" itemprop="doorTime" content="<?php echo $page->timestarts(); ?>">
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
      <?php if ($page->register_link() != ""): ?>
        <div class="register-holder" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
          <?php if ($page->price() != ""): ?>
            <meta itemprop="priceCurrency" content="USD" />
            <meta itemprop="price" content="<?php echo $page->price(); ?>" />
          <?php endif; ?>
          <a itemprop="url" href="<?php echo $page->register_link(); ?>" class="button jackrabbit">REGISTER NOW</a>
        </div>
      <?php endif; ?>
    </div>
    
    <!-- Location Schema -->
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