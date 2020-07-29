<?php
function ubah_huruf($string)
{
    $alphabet = "abcdefghijklmnopqrstuvwxyz;
";
    $output = "";
    for ($i = 0; $i < strlen($string); $i++) {
        $posision = strrpos($alphabet, $string[$i]);
        $output .= substr($alphabet, $posision + 1, 1);
    }
    return $output . "<br>";
}

// TEST CASES
echo ubah_huruf('wow'); // xpx
echo ubah_huruf('developer'); // efwfmpqfs
echo ubah_huruf('laravel'); // mbsbwfm
echo ubah_huruf('keren'); // lfsfo
echo ubah_huruf('semangat'); // tfnbohbu
