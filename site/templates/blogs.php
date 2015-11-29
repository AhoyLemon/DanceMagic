<?php snippet('header') ?>

  <main class="blogs">
      <h1>Blog Posts</h1>
      <section class="blog-listing">
        <?php foreach ($page->children()->visible() as $blog): ?>
          <article class="blog-summary">
            <?php if ($blog->featured_image() != ""): ?>
              <a href="<?php echo $blog->url(); ?>">
                <img src="<?php echo $blog->featured_image()->toFile()->url(); ?>" class="cover">
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
                <a class="tag" <?php if ($x > 1): ?> href="<?php echo url::home() ?>/find/tag:<?php echo trim($etag) ?>" <?php endif ?>><?php echo trim($etag) ?></a>
              <?php endforeach ?>
            <?php endif ?>
          </article>
        <?php endforeach; ?>
      </section>
        
      <section class="blog-signup">
        <div class="form-holder">
          <h3><?php echo $page->mailinglist_title(); ?></h3>
          <?php echo $page->mailinglist_text()->kirbytext(); ?>
          <form>
            <div class="full-width">
              <input type="email" placeholder="email address" required>
            </div>
            <div class="half-width">
              <label>
                <input type="checkbox" required><span>Opt In to receive emails from Dance N Magic</span>
              </label>
            </div>
            <div class="half-width">
              <button type="submit" class="submit">Sign Up</button>
            </div>
          </form>
        </div>
      </section>
        
    </main>

<?php snippet('footer') ?>