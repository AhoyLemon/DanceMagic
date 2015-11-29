<?php snippet('header') ?>

<main class="classes">
  <h1>Meet The Staff</h1>
  <section class="staff-listing">
    <?php foreach ($page->staff()->toStructure() as $staff): ?>
    <article class="staff-member">
      <div class="inner">
        <h3><?php echo $staff->title(); ?></h3>
        <h4><?php echo $staff->jobtitle(); ?></h4>
        <?php if ($staff->staff_image() != ""): ?>
          <img src="<?php echo $staff->staff_image()->toFile()->url(); ?>" class="profile">
        <?php endif; ?>
        <summary>
          <?php echo $staff->text()->kirbytext(); ?>
        </summary>
        <div class="contact">
          <?php if ($staff->facebook() != ""): ?>
          <a href="<?php echo $staff->facebook(); ?>" class="facebook">
            <svg viewBox="0 0 100 100">
              <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconFacebook" class="symbol"></use>
            </svg>
          </a>
          <?php endif; ?>
          <?php if ($staff->pinterest() != ""): ?>
            <a class="pinterest" href="<?php echo $staff->pinterest(); ?>">
              <svg viewBox="0 0 100 100">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconPinterest" class="symbol"></use>
              </svg>
            </a>
          <?php endif; ?>
          <?php if ($staff->twitter() != ""): ?>
            <a class="twitter" href="<?php echo $staff->twitter(); ?>">
              <svg viewBox="0 0 100 100">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconTwitter" class="symbol"></use>
              </svg>
            </a>
          <?php endif; ?>
          <?php if ($staff->linkedin() != ""): ?>
            <a class="linkedin" href="<?php echo $staff->linkedin(); ?>">
              <svg viewBox="0 0 100 100">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconLinkedIn" class="symbol"></use>
              </svg>
            </a>
          <?php endif; ?>
          <?php if ($staff->googleplus() != ""): ?>
            <a class="pinterest" href="<?php echo $staff->googleplus(); ?>">
              <svg viewBox="0 0 100 100">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconGooglePlusCircle" class="symbol"></use>
              </svg>
            </a>
          <?php endif; ?>
          <?php if ($staff->email() != ""): ?>
            <a class="email" href="mailto:<?php echo $staff->email(); ?>">
              <svg viewBox="0 0 100 100">
                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#IconEmail" class="symbol"></use>
              </svg>
            </a>
          <?php endif; ?>
        </div>
      </div>
    </article>
    <?php endforeach; ?>
  </section>
</main>

<?php snippet('footer') ?>