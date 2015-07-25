<?php snippet('header') ?>

 <main class="main" role="main">

  <article>
    <h1 class="post-title"><?php echo html($page->title()) ?></h1>
  </article>


<?php $articles = $page->children()->visible()->flip()->paginate(10) ?>

<?php foreach($articles as $article): ?>

	<article class="post">
		<h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
		<p><?php echo excerpt($article->text(), 200) ?></p>
	</article>

<?php endforeach ?>
<?php if($articles->pagination()->hasPages()): ?>

	<nav class="pagination">

	  <?php if($articles->pagination()->hasNextPage()): ?>
	  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; Older</a>
	  <?php endif ?>

	  <?php if($articles->pagination()->hasPrevPage()): ?>
	  <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">Newer &rsaquo;</a>
	  <?php endif ?>

	</nav>
<?php endif ?>


<?php snippet('footer') ?>
</main>