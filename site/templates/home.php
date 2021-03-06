<?php snippet('header') ?>

  <main class="home main" role="main">


	<ul class="teaser cf animated fadeIn">
	  <?php foreach(page('projects')->children()->visible()->limit(100) as $project): ?>
	  <li>

	  	<?php if($project->bgblock() != ''): ?>
		<div class="intro" style="background-color:<?php echo $project->bgblock()?>;'">

	          <h1><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h1>
	          <p><?php echo $project->snippet()->html() ?></p>
	          <p class="read-case-study"><a class="cta" href="<?php echo $project->url() ?>">read&nbsp;the&nbsp;case&nbsp;study→</a></p>
	    </div>

		<?php else : ?>

	    <?php if($image = $project->images()->sortBy('sort', 'asc')->get('Artboard.jpg')): ?>
	    <div class="intro hub animated fadeIn" style="background-image:url('<?php echo $image->url() ?>')">

	    <?php endif ?>
	  
	          <h1 class="animated fadeIn"><a href="<?php echo $project->url() ?>"><?php echo $project->title()->html() ?></a></h1>
	          <p class="blurb animated fadeIn"><?php echo $project->snippet()->html() ?></p>
	          <p><a class="cta" href="<?php echo $project->url() ?>">read&nbsp;the&nbsp;case&nbsp;study→</a></p>
	    </div>

	    <?php endif ?>
	    
	  </li>
	  <?php endforeach ?>
	</ul>

  </main>

<?php snippet('footer') ?>