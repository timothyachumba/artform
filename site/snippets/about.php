<div class="about">
  <?php $building = $page->image('building.jpg'); ?>
  <?php if ($building): ?>
    <div class="building sticky" style="background-image: url(<?php echo $building->url() ?>)"></div>
  <?php endif ?>
  <div class="about-content">
    <div class="arrow">&darr;</div>
    <?php echo $page->abouttext()->kirbytext() ?>
  </div>
  
  
</div>