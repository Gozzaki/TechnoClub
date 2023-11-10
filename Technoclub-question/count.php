<?php
///////////////////////////////////////////////////////////// Soal 3 ////////////////////////////////////////////////////////////////////////
// Agus kebingungan melihat kode yang dibuatnya, hasil dari function pythagoras() selalu kosong, bantu agus untuk memperbaiki kode yang    //
// dibuat.                                                                                                                                 //
// Output yang diharapkan adalah angka.                                                                                                    //
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function pythagoras($a, $b)
{
    $c = sqrt($a * $a + $b * $b);

    return $c;
    
}

echo "Hasil dari pythagoras adalah " . pythagoras(3, 4) . "\n";