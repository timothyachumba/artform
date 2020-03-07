<?php snippet('header') ?>
<main lang="en">

  <?php snippet('hero') ?>

  <?php snippet('marquee') ?>

  <div class="right">
    <?php snippet('about') ?>
    <?php snippet('sections') ?>
    <footer>
      <?php snippet('contact') ?>
      <?php $rocks = $page->images()->last(); ?>
      <?php if ($rocks): ?>
        <div class="rocks" style="background-image: url(<?php echo $rocks->url() ?>)"></div>
      <?php endif ?>
    </footer>
  </div>

</main>
<?php snippet('footer') ?>