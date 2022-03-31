<?php


//$numbers = ['one', 'two', 'three', 'four', 'five'];
//
//$length = count($numbers);
//
//for($a=1; $a < $length; $a += 2) {
//  for ($a = 1; $a <= 10; $a++) {
//    echo '*';
//  }
//
//  echo $numbers[$a];
//  for ($a = 1; $a <= 10; $a++) {
//    echo '*';
//  }
//  echo '<br>';
//}

//$numbers = ['one', 'two', 'three', 'four'];
//
//
//$i = 0;
//
//do {
//  echo $numbers[$i];
//  $i++;
//} while($i < 4);



//$i = 0;
//
//while($i < count($numbers)) {
//  echo $numbers[$i] . '<br>';
//
//
//if($i == 2) {
//  break;
//}
//
//  $i++;
//}


$numbers = ['one', 'two', 'three', 'four'];

foreach($numbers as $key => $value) {
  echo "Key is $key and value is $value <br>";
}

//$numbers = ['one', 'two', 'three', 'four'];
//foreach ($numbers as $value) {
//  echo "value is $value <br>";
//}