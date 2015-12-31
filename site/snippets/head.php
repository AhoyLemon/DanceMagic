<meta charset="utf-8" />
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html(); ?></title>
<?php if ($page->text() != "") { ?>
  <meta name="description" content="<?php echo excerpt($page->text()->xml(), 150) ?>">
<?php } else { ?>
  <meta name="description" content="<?php echo $site->description()->html(); ?>">
<?php } ?>
<link href="http://fonts.googleapis.com/css?family=Raleway:400,300,700" rel="stylesheet">
<?php echo css('assets/css/dance.css') ?>


<!-- Favicon stack -->
<link rel="apple-touch-icon" sizes="57x57" href="/apple-touch-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-touch-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-touch-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-touch-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
<link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="/android-chrome-192x192.png" sizes="192x192">
<link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96">
<link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="/manifest.json">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#380f47">
<meta name="msapplication-TileImage" content="/mstile-144x144.png">
<meta name="theme-color" content="#380f47">

<!-- Twitter -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@<?php echo $site->twitter_handle(); ?>" />
<meta name="twitter:title" content="<?php echo $page->title(); ?>" />
<meta name="twitter:description" content="<?php echo excerpt($page->text()->xml(), 180) ?>" />
<?php if($image = $page->featured_image() != "") { ?>
  <meta name="twitter:image" content="<?php echo $page->featured_image()->toFile()->url(); ?>" />
<?php } else { ?>
  <meta name="og:image" content="<?php echo $site->social_media_image()->toFile()->url(); ?>" />
<?php } ?>
<meta name="twitter:url" content="<?php echo $page->url() ;?>" />

<!-- OpenGraph Details -->
<meta property="og:title" content="<?php echo $page->title()->xml(); ?>">
<meta property="og:type" content="school">
<meta property="og:url" content="<?php echo $page->url() ;?>">
<?php if($image = $page->featured_image() != "") { ?>
  <meta name="og:image" content="<?php echo $page->featured_image()->toFile()->url(); ?>" />
<?php } else { ?>
  <meta name="og:image" content="<?php echo $site->social_media_image()->toFile()->url(); ?>" />
<?php } ?>
<meta property="og:description" content="<?php echo excerpt($page->text()->xml(), 200) ?>">
<meta property="og:email" content="<?php echo $site->email()->xml(); ?>">