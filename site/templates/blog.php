<?php snippet('header') ?>

<main class="blog" itemscope itemtype="http://schema.org/BlogPosting">
  
  <!-- SET UP VARIABLES -->
  <?php 
    $etags = explode(",", $page->tags());
  ?>
  
    <article class="blog-post">
      <h1 itemprop="name"><?php echo $page->title(); ?></h1>
      <meta itemprop="headline" content="<?php echo $page->title(); ?>" />
      <meta itemprop="wordCount" content="<?php echo $page->text()->words(); ?>" />
      <?php if ($page->featured_image() != "") { ?>
        <meta itemprop="image" content="<?php echo $page->url() . '/' . $page->featured_image()->toFile()->filename(); ?>" />
      <?php } else if ($page->image() != "") { ?>
        <meta itemprop="image" content="<?php echo $page->url() . '/' . $page->image()->filename(); ?>" />
      <?php } else { ?>
        <meta itemprop="image" content="<?php echo $page->url() . '/' . $site->social_media_image()->toFile()->filename(); ?>" />
      <?php } ?>
      <div class="by-line">
        posted by 
        <span class="author" itemprop="author"><?php echo $page->author(); ?></span>
        on
        <time class="published" itemprop="datePublished" content="<?php echo $page->postdate('Y-m-d'); ?>T<?php echo $page->posttime(); ?>+06:00">
          <?php echo date("F jS, Y", strtotime($page->postdate())); ?>
          @ 
          <?php echo date("g:ia", strtotime($page->posttime())); ?>
        </time>
      </div>
      <meta itemprop="description" content="<?php echo $page->desc()->xml(); ?>" />
      
      <div class="content" itemprop="articleBody">
        <?php echo $page->text()->kirbytext(); ?>
      </div>
      
      <?php if ($page->tags() != ""): ?>
        <div class="tags" itemprop="keywords" content="<?php echo $page->tags(); ?>">
          <span class="label">Tagged with:</span>
          <?php foreach($etags as $etag): ?>
            <?php $tagmatches = $page->siblings()->filterBy('tags', $etag, ','); ?>
            <?php $x = 0; ?>
            <?php foreach($tagmatches as $tagmatch): $x = $x+1; ?>
            <?php endforeach ?>
            <a class="tag" <?php if ($x > 1): ?> href="<?php echo url::home() ?>/find/tag:<?php echo trim($etag) ?>" <?php endif ?>><?php echo trim($etag) ?></a>
          <?php endforeach ?>
        </div>
      <?php endif ?>
    </article>

    <?php snippet('signup') ?>
      
  </main>

<?php snippet('footer') ?>