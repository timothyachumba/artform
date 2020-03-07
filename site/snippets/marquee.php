<div class="clients sticky">
  <div class="marquee3k" data-speed="1.25" data-reverse="true" data-pausable="true">
    <div>
    <?php foreach($page->clients()->split(',') as $client): ?>
      <span><?php echo $client ?></span>&nbsp;&bull;&nbsp;
    <?php endforeach ?> 
    </div>
  </div>
</div>