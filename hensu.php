<?php
 $var = 1;
 var_dump(isset($var));
 //引数がnullの場合falseを返す
 var_dump(isset($var1)); 
?>

<?php
  $var = 1;
  $var_name = 'var';
  //可変変数
  echo $$var_name, PHP_EOL;
?>

<?php
  $array = array(1,2,3,4,5,);
  foreach ($array as $i) {
    echo $i, PHP_EOL;
  }
  echo "Last", $i, PHP_EOL;
?>