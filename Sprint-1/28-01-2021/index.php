<?php
// $array = [];

// echo "Masukkan jumlah nilai array = ";
// $jumlah_nilai = trim(fgets(STDIN));

// for ($i=1; $i <= $jumlah_nilai; $i++) { 
//    echo "Nilai ke-". $i ." = ";
//    $nilai = trim(fgets(STDIN));
//    $array[] = $nilai;
// }

// echo "Array = [";
// foreach($array as $value) {
//    echo "$value, ";
// }
// echo "] \n";



$nilai = [5, 9, 6, 7, 9, 8, 10, 7, 8];

lowest($nilai);
$highest = function($array) {
   rsort($array);
   echo "Highest = ";
   for ($i=0; $i < 3; $i++) { 
      echo $array[$i].", ";
   }
   echo "\n";
};

$highest($nilai);

function lowest(array $array) {
   sort($array);
   echo "Lowest = ";
   for ($i=0; $i < 3; $i++) { 
      echo $array[$i].", ";
   }
   echo "\n";
}


// function tambah($a, $b = 2) {
//    echo $a+$b."\n";
// }

// $lima = 5;

// tambah($lima, 5);



// $santriName = 'Abdulghani';

// function printBadGreeting()
// {
//     echo 'Halo ' . $santriName; // PHP Notice: Undefined variable
// }

// function printGreeting($name)
// {
//    echo 'Halo ' . $name;
// }

// function printGoodGreeting(string $name): void
// {
//    echo 'Halo ' . $name;
// }

// printGoodGreeting('Syofyan');

// function arrangePoliteGreeting(string &$greeting): void
// {
//    $greeting += 5;
//    // $greeting .= ', senang bertemu Anda';
// }

// $casualGreeting = 10;

// echo $casualGreeting."\n";

// arrangePoliteGreeting($casualGreeting);

// echo $casualGreeting."\n"; // 'Halo Ghani, senang bertemu Anda

// function printGroupGreeting(string $leadName, string ...$others): void
// {
//    // var_dump(...$others);
//    echo 'Halo ' . implode(', ', $others) . ', dan ' . $leadName;
// }

// printGroupGreeting('Amin', 'Rouf', 'Miun', 'Rofik');

// var_dump(explode(',', "Rouf,Miun,Rofik"));

// $isEqual = function(string $a, string $b): bool {
//    return $a === $b;
// };

// // var_dump($isEqual);
// // var_dump(is_callable($isEqual)); // true
// // echo get_class($isEqual); // Closure

// $result = $isEqual('z', 'Z');

// var_dump($result);

// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];
// $oddNumbers = array_filter(
//     $numbers,
//     function (int $n): int {
//         // ganjil jika dibagi 2 memberikan sisa
//         return $n % 2;
//     }
// );

// var_dump($oddNumbers);

// $time = 'pagi';
// // mewariskan var $time mengunakan katakunci `use`
// $greet = function(string $name) use ($time): void {
//    echo "Selamat {$time} {$name}";
// };

// $greet('Rasyid');