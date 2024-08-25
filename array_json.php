<?php 
// ******************************************PHP - Day 08******************************
$devs =[
    [
        'id' => 1,
        'name'  => 'bristy',
        'address' => 'motijheel'
    ],
    [
        'id' => 2,
        'name'  => 'Kamrul',
        'address' => 'motijheel'
    ],

];
foreach ($devs as $data) {
    echo "<h1>{$data['name']} </h1>";
}
