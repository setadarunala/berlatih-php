<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function papan_catur($angka)
{
    for ($i = 0; $i < $angka; $i++) {
        for ($a = 0; $a < ($angka * 2) - 1; $a++) {
            if ($a % 2 == 1 && $i % 2 == 1) {

                echo '# ';
            } elseif ($a % 2 == 0 && $i % 2 == 0) {
                echo " #";
            } else {
                echo " ";
            }

        }
        echo '<br>';
    }
}

papan_catur(4);
// TEST CA/SES
//  echo papan_catur(4)
/*
# # # #
# # #
# # # #
# # #
 */

//  echo papan_catur(8)
/*
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #
# # # # # # # #
# # # # # # #

echo papan_catur(5)
/*
# # # # #
# # # #
# # # # #
# # # #
# # # # #
 */
?>
</body>
</html>
