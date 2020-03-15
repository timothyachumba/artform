<div id="services" class="section-container">
  <!-- <div class="section-navigation sticky">
  <?php $navindex = 0; foreach($page->children()->listed() as $section): ?>
    <?php if($navindex == 0) {
      $navstate = 'visible';
    } else {
      $navstate = ''; 
    } ?>
  <div id="<?php echo $section->uid() ?>-nav" class="<?php echo $section->uid() ?>-nav section-navigation-item <?php echo $navstate ?>"><?php echo $section->title() ?></div><span class="divider"></span>
  <?php $navindex++; endforeach ?>
  </div> -->
  <?php $sectionindex = 0; foreach($page->children()->listed() as $section): ?>
    <?php if($sectionindex == 0) {
      $sectionstate = 'visible';
    } else {
      $sectionstate = ''; 
    } ?>
    <?php snippet('section', ['sectionName' => $section->uid(), 'state' => $sectionstate ]) ?>
  <?php $sectionindex++; endforeach ?>
</div>