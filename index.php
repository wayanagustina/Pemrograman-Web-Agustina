<?php

// Untuk memanggil file
require "array.php";

// if ($biodata['umur'] >= 25){
//     echo $biodata['pekerjaan'] . PHP_EOL;
// }

// echo $biodata['pendidikan'] .PHP_EOL;

// //enter
// echo "\n";

// if ($biodata['umur'] <= 25){
//     echo $biodata['pekerjaan'] . PHP_EOL;
// }   else {
//     echo $biodata["pendidikan"];
// }

// echo "\n";

// if ($biodata['umur'] >= 25) {
//     echo $biodata['pekerjaan'] .PHP_EOL;
// }  
// elseif ($biodata['umur'] <= 10){
//     echo $biodata['hobi'][0] .PHP_EOL;
//     echo $biodata['hobi'][2] .PHP_EOL;
// }   
// else {
//     echo $biodata('pendidikan');
// }

// echo "\n";

// switch ($biodata['nilai']){
//     case 'A':
//         echo "sangat baik";
//         break;
//     case 'B':
//         echo "baik";
//         break;
//     case 'C':
//         echo "cukup";
//         break;
//     case 'D':
//         echo "kurang";
//         break;

//     default:
//         echo "E = Enginer";
//         break;
// }

// foreach ($b['nilai'] as $k => $v) {
//     $s = "semester " . ($k + 1);
//     echo "nilai {$s} : {$v} \n";

//     switch ($v) {
//         case 'A':
//             echo "Predikat {$s} : Sangat Baik \n";
//             break;
//         case 'B':
//             echo "Predikat {$s} : Baik \n";
//             break;
//         case 'C':
//             echo "Predikat {$s} : Cukup \n";
//             break;
//         case 'D':
//             echo "Predikat {$s} : Kurang \n";
//             break;
//         default:
//             echo "Predikat {$s} : - \n";
//         break;
//     }
// }

function genPredikat($n)
{
    switch ($n) {
        case 'A':
            return "Sangat Baik";
        case 'B':
            return "Baik";
        case 'C':
            return "Cukup";
        case 'D':
            return "Kurang";
        default:
            return "-";
    }
}

foreach ($b['nilai'] as $k => $v) {
    $s = "semester " . ($k + 1);
    echo "nilai {$s} : {$v} \n";
    echo "Predikat {$s} : " . genPredikat($v) . " \n";
}

echo "----------------\n";


foreach ($b['kedisiplinan'] as $k => $v) {
    $s = "semester " . ($k + 1);
    echo "kedisiplinan {$s} : {$v} \n";
    echo "Predikat kedisiplinan {$s} : " . genPredikat($v)."\n";
}
