<?php
///////////////////////////////////////// Soal 2 /////////////////////////////////////////////////
// Buatlah sebuah fungsi untuk menghitung jumlah huruf hidup dan huruf mati dari sebuah string. //
//                                                                                              //
// contoh:                                                                                      //
// $string = "programmer";                                                                      //
// output :                                                                                     //
// huruf hidup: 3                                                                               //
// huruf mati: 7                                                                                //
//////////////////////////////////////////////////////////////////////////////////////////////////

$huruf_mati = 0;
$huruf_hidup = 0;

$string = "Technoclub";
// isi kode kamu dibawah ini
function hitung($string){
    $huruf_mati = 0;
    $huruf_hidup = 0;
    $huruf = str_split($string);
    foreach($huruf as $h){
        if($h == "a" || $h == "i" || $h == "u" || $h == "e" || $h == "o"){
            $huruf_hidup++;
        }else{
            $huruf_mati++;
        }
    }
    return array($huruf_hidup, $huruf_mati);
    
    
    print_r("huruf hidup: " . $huruf_hidup . "\n");
    print_r("huruf mati: " . $huruf_mati . "\n");
}

print_r(hitung($string));
