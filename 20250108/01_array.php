<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>array</title>
</head>

<body>
    <?php 
    function dd($array){
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }
    $arrays=[
    "name"=>[
        '台北',
        '台中',
        '高雄',
    ],
    "mobile"=>[
        '0911',
        '0922',
        '0933',
    ],
    "address"=>[
        '台北...',
        '台中...',
        '高雄...',
    ]
];
        // dd($arrays);

    $data=[
        [
            'id' => 1,
            'name'=> '台北店',
            'mobile'=>'0911-111-111',
            'adress'=>'台北市中正路1號',
        ],
        [
            'id' => 2,
            'name'=> '台中店',
            'mobile'=>'0911-111-222',
            'adress'=>'台中市中正路2號',
        ],
        [
            'id' => 3,
            'name'=> '高雄店',
            'mobile'=>'0911-111-333',
            'adress'=>'台北市中正路3號',
        ],
    ];
    // dd($datas);

    
    ?>

    <div class="container mt-3">
        <h3>data:</h3>

        <table class="table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>mobile</th>
                    <th>adress</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php 
                        foreach($data as $val):?>
                    <td><?=$val['id'];?></td>
                    <td><?=$val['name'];?></td>
                    <td><?=$val['mobile'];?></td>
                    <td><?=$val['adress'];?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>


</body>

</html>