<?php snippet('header') ?>

  <main class="home" style="background-image:url(<?php echo $page->bgimage()->toFile()->url(); ?>)">
    <div class="cover"></div>
    <div class="center-content">
      <div class="content">
        <summary><?php echo $page->text()->kirbytext(); ?></summary>
        <div class="button-holder">
          <a href="classes.html" class="button">
            <span class="first"><?php echo $page->cta_a(); ?></span>
            <span class="second"><?php echo $page->cta_b(); ?></span>
          </a>
        </div>
      </div>
    </div>
  </main>

  <script type="application/ld+json">
    {
      "@context": "http://schema.org",
      "@type": "School",
      "name": "<?php echo $site->title(); ?>",
      "url": "<?php echo $site->url(); ?>",
      "email": "<?php echo $site->email(); ?>",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo $site->street_address(); ?>",
        "addressLocality": "<?php echo $site->city(); ?>",
        "addressRegion": "<?php echo $site->state(); ?>",
        "postalCode": "<?php echo $site->zip(); ?>"
      },
      "logo": "http://thefpl.us/schemaLogo.png",
      "sameAs" : [ 
        "<?php echo $site->facebook(); ?>",
        "<?php echo $site->instagram(); ?>",
        "https://www.google.com/maps/place/Dance-N-Magic"
      ]
    }
  </script>

<?php snippet('footer') ?>

<?php 
        $array_testamonials = $site->find('generic-testamonials')->testamonials()->yaml();
        $array_key = array_rand($array_testamonials);
        $testamonial = kirbytext($array_testamonials[$array_key]['text']);
        $cite = $array_testamonials[$array_key]['cite'];
      ?>
      <div class="testamonial">
        <blockquote itemprop="description">
          <?php echo $testamonial; ?>
        </blockquote>
        <?php if ($cite != ""): ?>
          <cite itemprop="author">
            <?php echo $cite;  ?>
          </cite>
        <?php endif; ?>
      </div>