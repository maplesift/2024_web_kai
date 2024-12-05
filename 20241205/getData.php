<?php
// echo "hello php 321"
$data=[
    's1' => '咚咚',
    's2' => '0911123456',
    's3' => '鹽酥雞魷魚百頁甜不辣',
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