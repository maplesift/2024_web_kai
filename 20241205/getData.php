<?php
// echo "hello php 321"
$data=[
    'name' => '咚咚',
    'number' => '0911123456',
    'text' => '鹽酥雞魷魚百頁甜不辣',
];

function dd($data){
    echo '<br>';
    print_r($data);
    echo '<br>';
}
$myJSON = json_encode($data);

echo $myJSON;
// dd($data);
?>