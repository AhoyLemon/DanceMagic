<section class="blog-signup">
  <div class="form-holder">
    <h3><?php echo $site->find('blogs')->mailinglist_title(); ?></h3>
    <?php echo $site->find('blogs')->mailinglist_text()->kirbytext(); ?>
    <form action="<?php echo $site->url(); ?>/mlsignup.php" id="FreeClassForm" role="form" method="post">
      <div class="full-width">
        <input type="email" placeholder="email address" id="EmailAddress" name="EmailAddress" required>
      </div>
      <div class="half-width">
        <label>
          <input type="checkbox" required>
          <span>Opt In to receive emails from Dance N Magic</span>
        </label>
      </div>
      <div class="half-width">
        <button type="submit" class="submit">Sign Up</button>
      </div>
    </form>
  </div>
</section>