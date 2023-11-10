<?php
///////////////////////////////////// Soal 10 //////////////////////////////////////
//                           Buatlah 13 bilangan fibonacci                        //
////////////////////////////////////////////////////////////////////////////////////

// code here
function fibonacci($n)
{
    $angka_sebelumnya = 0;
    $angka_sekarang = 1;
    
    $hasil = "$angka_sebelumnya $angka_sekarang";

    for ($i=0; $i<$n-2; $i++)
    {
    $output = $angka_sekarang + $angka_sebelumnya;
    $hasil = $hasil." $output";
    
    $angka_sebelumnya = $angka_sekarang;
    $angka_sekarang = $output;
    }
    return $hasil;
}
