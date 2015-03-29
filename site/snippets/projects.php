<ul class="teaser cf">
  <?php foreach(page('projects')->children()->visible()->limit(100) as $project): ?>
  <li>

    <?php if($image = $project->images()->sortBy('sort', 'asc')->get('Artboard.jpg')): ?>

    <?php if($page->bgblock() != ''): ?>
      <div class="intro" style="background-color:<?php echo $page->bgblock()?>;'">

      <?php else : ?>

      <div class="intro" style="background-image:url('<?php echo $image->url()?>')">

    <?php endif ?>


  

          <h1 class="alpha"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h1>
          <p><em><?php echo $project->snippet()->html() ?></em></p>
          <p><a class="cta" href="<?php echo $project->url() ?>">read&nbsp;the&nbsp;case&nbsp;study→</a></p>
    </div>

    <?php endif ?>
  </li>
  <?php endforeach ?>
</ul>
