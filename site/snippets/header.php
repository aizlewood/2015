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

  <script type="text/javascript">
  WebFontConfig = { fontdeck: { id: '51080' } };

  (function() {
    var wf = document.createElement('script');
    wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
    '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
    wf.type = 'text/javascript';
    wf.async = 'true';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(wf, s);
  })();
  </script>
</head>
<body>

  <header class="header cf" role="banner">
  
    <?php snippet('menu') ?>

  </header>