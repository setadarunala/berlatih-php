<?php
function tukar_besar_kecil($string)
{
    for ($i = 0; $i < strlen($string); $i++) {
        if (ctype_lower($string[$i])) {
            echo strtoupper($string[$i]);
        } else {
            echo strtolower($string[$i]);
        }
    }
}

tukar_besar_kecil("Hello World");
echo "<br>";
tukar_besar_kecil('I aM aLAY');
echo "<br>";
tukar_besar_kecil('My Name is Bond!!');
echo "<br>";
tukar_besar_kecil('IT sHOULD bE me');
echo "<br>";
tukar_besar_kecil('001-A-3-5TrdYW');
// TEST CASES
// echo tukar_besar_kecil('Hello World'); // "hELLO wORLD"
// echo tukar_besar_kecil('I aM aLAY'); // "i Am Alay"
// echo tukar_besar_kecil('My Name is Bond!!'); // "mY nAME IS bOND!!"
// echo tukar_besar_kecil('IT sHOULD bE me'); // "it Should Be ME"
// echo tukar_besar_kecil('001-A-3-5TrdYW'); // "001-a-3-5tRDyw"
