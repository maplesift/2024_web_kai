<?php
// echo "getSum ok";

$input = $_GET;
$num1 = $input['num1'];
$num2 = $input['num2'];
$opt = $input['opt'];


// $sum = $num1 + $num2;
// switch ($opt) {
//         case '+':
//             $sum = $num1 + $num2;
//         break;    
//         case '-':
//             $sum = $num1 - $num2;
//         break;    
//         case '*':
//             $sum = $num1 * $num2;
//         break;    
//         case '/':
//             $sum = $num1 / $num2;
//          break;
//     default:
//         # code...
//         break;
// }
function result($opt,$num1,$num2){
    switch ($opt) {
        case '+':
            return  $num1 + $num2;
        break;    
        case '-':
            return  $num1 - $num2;
        break;    
        case '*':
            return  $num1 * $num2;
        break;    
        case '/':
            return  $num1 / $num2;
         break;
        default:
        # code...
        break;
    }
}
$sum = result($opt, $num1, $num2);

// result($opt,$sum,$num1,$num2);


$data = [
    'num1' => $num1,
    'num2' => $num2,
    'opt' => $opt,
    'sum' => $sum
];

function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

// dd($data);

$myJSON = json_encode($data);

echo $myJSON;