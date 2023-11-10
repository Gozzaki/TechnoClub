<?php
////////////////////////////////////// Soal 8 //////////////////////////////////////
//                Gunakan perulangan untuk menampilkan contoh berikut             //
// contoh :                                                                       //
//          Technoclub pertemuan 1                                                //
//          Technoclub pertemuan 2                                                //      
//          Technoclub pertemuan 3                                                //      
//          Technoclub pertemuan 4 (sekarang)                                     //
////////////////////////////////////////////////////////////////////////////////////

// code here
for($i = 1; $i <= 4; $i++){
    if ($i != 4){
        echo "Technoclub pertemuan " . $i . "\n";
    } else{
        echo "Technoclub pertemuan " . $i . " Sekarang\n";
    }
}