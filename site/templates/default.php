<?php snippet('header') ?>

  <main class="main" role="main">
  
<!--   <video autoplay id="bgvid" loop>
    <source src="https://dl.dropboxusercontent.com/u/600012/video.mp4" type="video/webm">
    <source src="https://dl.dropboxusercontent.com/u/600012/video.mp4" type="video/mp4">
  </video> -->
 
 <article class="post-intro">

    <h1 class="post-title">
      <div class="inner">
      <?php echo html($page->title()) ?>
      </div>
    </h1>  
  </article>

  <article class="post">
    <?php echo kirbytext($page->text()) ?>
  </article>


<?php snippet('submenu') ?>

<?php snippet('contact') ?>

  </main>

<?php snippet('footer') ?>