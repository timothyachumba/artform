<?php
  $items = $pages->listed();
  if($items->isNotEmpty()):
?>
<nav>
  <ul>
    <?php foreach($items as $item): ?>
    <li><h2><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a></h2></li>
    <?php endforeach ?>
    <li><h2><a href="https://instagram.com/<?php echo $site->instagram() ?>">Instagram &#x2197;</a></h2></li>
    <li><h2><a href="mailto:<?php echo $site->email() ?>">EMAIL &#x2197;</a></h2></li>
  </ul>
</nav>
<?php endif ?>