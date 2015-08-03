	<nav class="sidebar" role="navigation">

	<div class="logo-wrap">
	    <a class="logo" href="<?php echo url() ?>">
	      <img src="<?php echo url('assets/img/logo4.svg') ?>" alt="<?php echo $site->title()->html() ?>" />
	    </a>
	</div>

	<?php

	// main menu items
	$items = $pages->visible();
	// only show the menu if items are available
	if($items->count() > 0):

	?>

	<nav class="nav-collapse">
	  <ul>
  <?php foreach($pages->visible()->not('projects') as $item): ?>
	    <li><a<?php ecco($item->isOpen(), ' class="active"') ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
    <?php endforeach ?>
	  </ul>  
	 </nav>
	</nav>
	<?php endif ?>

<!--         <?php if( ($page->template() == "project") || ($page->template() == "article")): ?>
            <?php snippet('nextprev') ?>
    <?php endif ?> -->
