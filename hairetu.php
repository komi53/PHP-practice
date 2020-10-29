<?php
  $fruits_mixed = array (
    'peach',
    'blueberry',
    'apple' => 'red',
    'banana' => 'yellow',
    'orange' => 'orange',
  );
  echo $fruits_mixed[1], PHP_EOL;
  echo $fruits_mixed['banana'], PHP_EOL;
  var_dump($fruits_mixed);
?>
<?php
$fruites = array(
  'apple' => array(
    'price' => 100,
    'count' => 2,
  ),
  'banana' => array(
    'price' => 80,
    'count' => 5,
  ),
  'orange' => array(
    'price' => 90,
    'count' => 3,
  ),
);

foreach ($fruites as $name => $value) {
  echo "$name は１つ {$value['price']}円で、{$value['count']}個です", PHP_EOL;
}
?>

<?php
  $a = array('a' => 1, 'b' => 3, 'c' => 5);
  $b = array('a' => 1, 'c' => 5, 'b' => 3);
  $c = array('a' => 1, 'b' => 2);

  var_dump($a == $b);
  var_dump($a === $b);

  var_dump($a + $c);
  var_dump($c + $a);

?>