<?= snippet('cookie'); ?>

<?php
  if($_SERVER['SERVER_NAME'] == 'localhost') {
    echo ('<script src="' . $site->url() . '/assets/scripts/' . $page->template() . '.dev.js"></script>');
  } else {
    echo ('<script src="' . $site->url() . '/assets/build/' . $page->template() . '.min.js"></script>');
  }
?>

</body>
</html>