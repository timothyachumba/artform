<?php
  if($_SERVER['SERVER_NAME'] == 'localhost') {
    echo ('<script src="assets/scripts/' . $page->template() . '.dev.js"></script>');
  } else {
    echo ('<script src="assets/build/' . $page->template() . '.min.js"></script>');
  }
?>

</body>
</html>