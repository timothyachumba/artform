<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="format-detection" content="telephone=no">
  <meta name="robots" content="index,follow,noarchive">
  <meta name="geo.placename" content="London" />

  <title><?= $site->title() ?> | <?= $page->title() ?></title>
  <meta name="description" content="<?php if($page->seodescription()->isNotEmpty()):?><?php echo $page->seodescription() ?><?php else: ?><?php echo $site->description() ?><?php endif ?>">

  <?php
    if($page->image('00.jpg')) {
      $ogimage = $page->image('00.jpg');
    } else {
      $ogimage = $page->images()->first();
    }
    if($page->seotitle()->isNotEmpty()) {
      $pageseotitle = $page->seotitle();
    } else {
      $pageseotitle = $site->title() | $page->title();
    }
    if($page->seodescription()->isNotEmpty()) {
      $pageseodescription = $page->seodescription();
    } else {
      $pageseodescription = $site->description();
    }
  ?>

  <meta content="summary" name="twitter:card">
  <meta content="<?= $pageseotitle ?>" name="twitter:title">
  <meta content="<?= $pageseodescription ?>" name="twitter:description">
  <meta name="twitter:image" content="<?= $ogimage->url() ?>" />
  <meta name="twitter:site" content="ARTFORM Creative Brand Consultancy">
  <meta content="<?= $pageseodescription ?>">
  <meta name="twitter:card" content="summary_large_image">

  <meta property="og:type" content="website" />
  <meta property="og:site_name" content="ARTFORM Creative Brand Consultancy" />
  <meta property="og:description" content="<?= $pageseodescription ?>" />
  <meta property="og:url" content="<?= $page->url() ?>" />
  <meta property="og:title" content="<?= $pageseotitle ?>" />
  <meta property="og:image" content="<?= $ogimage->url() ?>" />

  <link rel="canonical" href="<?php echo $page->url() ?>">

  <link rel="apple-touch-icon-precomposed" href="<?php echo $site->url() ?>/favicon-180.png">
  <link rel="icon" href="<?php echo $site->url() ?>/favicon-196.png">


  <link rel="stylesheet" type="text/css" href="<?php echo ($site->url() . '/assets/build/' . $page->template() . '.css') ?>">
  <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0'/>
</head>

<body class="<?php echo $page->uid() ?>">