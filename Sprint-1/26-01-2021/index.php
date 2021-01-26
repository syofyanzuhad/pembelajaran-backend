<?php
// $a = 3;
// if (!$a) {
//    echo "nilai sama";
// } elseif($a == 2) {
//    echo "nilainya dua";
// } else {
//    echo "kondisi default";
// }

// $variable = 3;
// switch ($variable) {
//    case $variable<5:
//       echo "isinya kurang dari lima \n";
//       break;
   
//       case 2:
//       echo "isinya dua";
//       break;
//    default:
//       echo "kosong";
//       break;
// }

// $satu = 1;
// echo $satu++;
// echo ++$satu;

// $a = 11;
// while ($a <= 10) {
//    ++$a;
//    echo "$a variable a kurang dari 10 \n";
// }

// do {
//    echo "$a a kurang dari 10 \n";
//    $a++;
// } while ($a <= 10);

// for ($i=0.1; $i < 10; $i+=0.1) { 
//    echo "$i, \n";
// }

// $b = [1, 2, 3, 4, 5];
// print_r($b);
// foreach($b as $key => $value) {
//    echo "isinya adalah $value \n";
// }

for ($i=1; $i < 10; $i++) { 
   for ($j=1; $j < 10; $j++) { 
      echo "($i x $j) ";
   }
   echo "\n";
}