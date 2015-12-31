<?php snippet('header') ?>

<?php $ftag = urldecode (param('tag')); ?>


  <main class="blogs">
      <?php if ($ftag): ?>
        <?php $blogs = $page->children()->visible()->filterBy('tags', $ftag, ','); ?>
        <h1>Blog Posts tagged <?php echo $ftag; ?></h1>
      <?php endif; ?>
      <?php if (!$ftag): ?>
        <h1>Blog Posts</h1>
        <?php $blogs = $page->children()->visible(); ?>
      <?php endif; ?>
      <section class="blog-listing">
        <?php foreach ($blogs as $blog): ?>
          <article class="blog-summary">
            <?php if ($blog->featured_image() != ""): ?>
              <?php $thumb = thumb($blog->featured_image()->toFile(), array('height' => 200)); ?>
              <a href="<?php echo $blog->url(); ?>">
                <img src="<?php echo $thumb->url(); ?>" class="cover">
              </a>
            <?php endif; ?>
            <h2>
              <a href="<?php echo $blog->url(); ?>">
                <?php echo $blog->title(); ?>
              </a>
            </h2>
            <div class="posted">
              <label>Posted</label>
              <time>
                <?php echo date("F jS, Y", strtotime($blog->postdate())); ?>
                @
                <?php echo date("g:ia", strtotime($blog->posttime())); ?>
              </time>
            </div>
            <summary>
              <?php echo $blog->teaser()->kirbytext(); ?>
            </summary>
            <?php if ($blog->tags() != ""):
              $etags = explode(",", $blog->tags());
            ?>
              <div class="tags">
              <span class="label">Tagged with:</span>
              <?php foreach($etags as $etag): ?>
                <?php $tagmatches = $page->children()->filterBy('tags', $etag, ','); ?>
                <?php $x = 0; ?>
                <?php foreach($tagmatches as $tagmatch): $x = $x+1; ?>
                <?php endforeach ?>
                <a class="tag" <?php if ($x > 1): ?> href="<?php echo $page->url() ?>/tag:<?php echo trim($etag) ?>" <?php endif ?>><?php echo trim($etag) ?></a>
              <?php endforeach ?>
            <?php endif ?>
          </article>
        <?php endforeach; ?>
      </section>
      
      <?php snippet('signup') ?>
        
    </main>

<?php snippet('footer') ?>