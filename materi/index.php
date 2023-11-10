<?php 
echo "hello word echo ni \n"; //untuk di tampilkan di dalam html
print("hello word print"); // sama aja seperti echo 
print_r("hello word pirnt_r ni bos"); // menapilkan datta secara readable untuk manusia 
var_dump("hello word ini var_dump"); // sama seperti perint_r tapi lebih sepesifik 

print_r([
    "1",
    "2",
    "3",
]);

var_dump([
    "1",
    "2",
    "3"
]);

// 3 cara membuat komen dalam php

// cara 1 hanya satu line

/**
 * komen lebih dari 1 baris
 * 1
 * 2
 * 3
 */

#komen cara lama

//variabel
$msg = "Hello Word"; 

echo"$msg\n";

define('APP','Hello Word!!!!!!!!');
print(APP);


//operator aritmatika 
$a = 5;
$b = 10;

print($a - $b."\n");
print($a + $b."\n");
print($a * $b."\n");
print($a / $b."\n");
print($a / $b."\n");
print($a % $b."\n");

$c = 15;
$c += 1;
$d = $c + 1;
print($c);
print($d);

// perbandiangan 




//pecabangan 

$a = 11;
$b = 12;

if ($a == $b){
    print("\nhaloo data kamu sama ");
} else{
    print("\ndata kamu tidak sama ");
}


// pengulangan
// $i++ = $i = $i + 1
for ($i = 0; $i < 10;$i++){
    print("Halo". $i . PHP_EOL);
}
$i = 1 ;
$n = 838;
while(true){
    print("\n data virus terkirim total : " . $i );
    $i++;
}