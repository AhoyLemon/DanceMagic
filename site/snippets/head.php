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