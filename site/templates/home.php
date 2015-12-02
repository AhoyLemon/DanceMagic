<?php snippet('header') ?>

  <main class="home" style="background-image:url(<?php echo $page->bgimage()->toFile()->url(); ?>)">
    <div class="cover"></div>
    <div class="center-content">
      <div class="content">
        <summary><?php echo $page->text()->kirbytext(); ?></summary>
        <div class="button-holder">
          <a href="classes" class="button">
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
      "logo": "<?php echo $site->schema_image()->toFile()->url(); ?>",
      "sameAs" : [ 
        "<?php echo $site->facebook(); ?>",
        "<?php echo $site->instagram(); ?>",
        "<?php echo $site->google_map(); ?>"
      ]
    }
  </script>

<?php snippet('footer') ?>