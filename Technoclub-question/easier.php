<?php
//////////////////////////////// Soal 5 ///////////////////////////////////////////////
// Haikal ingin membuat perhitungan yang tidak ada nilai desimal, akan tetapi haikal //
// sepertinya tidak tau cara membuatnya. Bantu haikal untuk membuat perhitungan yang //
// tidak ada nilai desimal.                                                          //
///////////////////////////////////////////////////////////////////////////////////////

function pembagian($a, $b)
{
    $c = $a / $b; 

    return (int)$c;
}

echo pembagian(20, 2) . "\n";
echo pembagian(10, 3) . "\n";
echo pembagian(30, 12.5) . "\n";