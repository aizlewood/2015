<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible()->sortBy($sort="date", $dir="desc") : false; 

?>
<?php if($items && $items->count()): ?>
<nav class="submenu">
  <ul>
    <?php foreach($items AS $item): ?>
    <li><time datetime="<?php echo $page->date('c') ?>" pubdate="pubdate"><?php echo $item->date('F j, Y') ?></time><a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
    <?php endforeach ?>            
  </ul>
</nav>
<?php endif ?>
