<?php
  define('BOOK', 'Perfect PHP');
  echo BOOK, PHP_EOL;
?>

<?php
  const BOOK = 'Perfect PHP';
  echo BOOK, PHP_EOL;
?>

<?php
  define('BOOK', 'perfext PHP');

  $value = 'BOOK';
  echo constant($value), PHP_EOL;
?>

<?php
  $value = 'BOOK';
  echo $value, PHP_EOL;
?>