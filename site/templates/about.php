<?php snippet('header') ?>

  <div class="infoz">
    <div class="tidbit abril">36<span> years of age</span></div>
    <div class="tidbit abril">2<span> wonderful daughters</span></div>
    <div class="tidbit">ui &amp; ux<span> my skillset</span></div>    
    <div class="tidbit abril">3<span> cups of coffee a day (at least)</span></div>
    <div class="tidbit abril">7<span> years living in UK (post-Canada)</span></div>
    <div class="tidbit">Stumpy<span> the name for my n+1</span></div>
    <div class="tidbit abril">36<span> years of age</span></div>
    <div class="tidbit abril">2<span> wonderful daughters</span></div>
    <div class="tidbit">ui &amp; ux<span> my skillset</span></div>    
    <div class="tidbit abril">3<span> cups of coffee a day (at least)</span></div>
    <div class="tidbit abril">7<span> years living in UK (post-Canada)</span></div>
    <div class="tidbit">Stumpy<span> the name for my n+1</span></div>    
  </div>

  <main class="main" role="main">
 
     <h1 class="post-title about">
      <div class="inner">
      <?php echo html($page->title()) ?>
      </div>
    </h1> 

  <article class="post">
    <?php echo kirbytext($page->text()) ?>
  </article>


  </main>

<?php snippet('footer') ?>