  <!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <?php echo css('assets/css/all.css') ?>
  
<?php foreach($page->files()->filterBy('extension', 'css') as $css): ?>
  <?php echo css($css->url()) ?>
<?php endforeach ?>

<?php foreach($page->files()->filterBy('extension', 'js') as $js): ?>
  <?php echo js($js->url()) ?>
<?php endforeach ?>

</head>
<body>

  <header class="header cf" role="banner">
  
    <?php snippet('menu') ?>

  </header>