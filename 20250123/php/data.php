<?php
function dd($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

$data = [
    's1' => 'amy',
    's2' => 'bob',
    's3' => 'cat'
];

// dd($data);

// header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Origin: http://127.0.0.1:5501');

echo json_encode($data);