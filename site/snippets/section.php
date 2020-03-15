<div class="<?php echo $sectionName ?> <?php echo $sectionName ?>-nav <?php echo $state ?> section">
  <h1><?php echo $sectionName ?></h1>
  <?php
    $sectionTitle = $page->children()->find($sectionName)->title();
    $sectionTitleCount = strlen($sectionTitle);
    $sectionTitleFirst = floor(($sectionTitleCount / 2) - 1);
    $sectionTitleSecond = ($sectionTitleCount - $sectionTitleFirst);
    $sectionTitleFirstString = substr($sectionTitle, 0, $sectionTitleFirst);
    $sectionTitleSecondString = substr($sectionTitle, $sectionTitleFirst, $sectionTitleSecond);
  ?>

  <?php
    $index = 0;
    foreach($page->children()->find($sectionName)->children() as $section): ?>
  <div class="single-section">
    <button class="accordion"><span><?php $number = 2 + $index; echo '&#1010' . $number . ';'?></span> <?php echo $section->title() ?></button>

    <div class="panel">
      <?php echo $section->text()->kirbytext() ?>
      <?php if($section->steps()->isNotEmpty()):?>
      <div class="section-steps">
        <?php if($section->stepstitle()->isNotEmpty()):?>
          <?php echo $section->stepstitle()->kirbytext() ?>
        <?php endif ?>
        <ul>
          <?php foreach($section->steps()->split(',') as $step): ?>
            <li>&rarr; <?php echo $step ?></li>
          <?php endforeach ?> 
        </ul>
      </div>
      <?php endif ?>
    </div>
  </div>
  <?php $index++; endforeach ?> 
</div>