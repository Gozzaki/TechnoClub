<?php
//////////////////////////////////////////////   Soal 1   ///////////////////////////////////////////////////////
// Andi kebingungan cara memfilter isi array menjadi bilangan genap, bantu andi untuk menyelesaikan masalahnya.//
//                                                                                                             //
// Contoh:                                                                                                     // 
// $arr = [1,2,3,4,5,6,7,8,9,10];                                                                              // 
// output: [2,4,6,8,10]                                                                                        //
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////

$arr = range(1, 100);
// isi kode kamu dibawah ini

function filter($arr){
    $arr = array_filter($arr, function($value){
        return $value % 2 == 0;
    });
    return $arr;
}

print_r(filter($arr));