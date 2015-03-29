<section class="blog home">
  <h3>Latest from the blog</h3>

  <?php foreach($blog as $article): ?>
  
  <div class="blog-articles">
    <div class="title">
      <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
      <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('F j, Y') ?></time>
  </div>

  <div class="excerpt">
      <p><?php echo excerpt($article->text(), 500) ?></p>
      <p><a class="cta" href="<?php echo $article->url() ?>">Keep reading</a></p>
    </div>
  </div>

  <?php endforeach ?>

</section>