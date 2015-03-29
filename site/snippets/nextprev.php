
  <div class="nextprev" role="navigation">

    <div class="inner">

          <?php if($prev = $page->prevVisible()): ?>
          <a class="prev" href="<?php echo $prev->url() ?>"><img src="<?php echo url('assets/img/arrow-left.svg') ?>" alt="<?php echo $prev->url() ?>" /></a>
          <?php else : ?>
            
          <?php endif ?>

          <?php if($next = $page->nextVisible()): ?>
          <a class="next" href="<?php echo $next->url() ?>"><img src="<?php echo url('assets/img/arrow-right.svg') ?>" alt="<?php echo $next->url() ?>" /></a>
          <?php else : ?>
           
          <?php endif ?>
      
      </div>
    </div>
    