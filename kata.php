<?php
  $int1 = 1;
  $int2 = -1;
  $int3 = 011;
  $int4 = 0xff;
  $int5 = PHP_INT_MAX;
  $int6 = PHP_INT_MAX + 1;

  echo $int1,PHP_EOL;
  echo $int2,PHP_EOL;
  echo $int3,PHP_EOL;
  echo $int4,PHP_EOL;
  echo $int5,PHP_EOL;
  echo $int6,PHP_EOL;

?>
<?php
  if(!isset($argv[1])){
    exit;
  }
  $num = $argv[1];
  if ($num == 100) {
    echo "num is 100", PHP_EOL;
  }else{
    echo "num is not 100", PHP_EOL;
  }
?>
<?php
  $age = 15;
  echo "tom is ${age} years old", PHP_EOL;
  echo 'tom is '. $age.' years old';
?>