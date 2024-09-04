<?php 
// ******************************************PHP - Day 08******************************
$devs =[
    [
        'id' => 1,
        'name'  => 'bristy',
        'age'  => 26,
        'address' => 'motijheel'
    ],
    [
        'id' => 2,
        'name'  => 'Kamrul',
        'age'  => 27,
        'address' => 'Shamoly'
    ],
    [
        'id' => 3,
        'name'  => 'Sadaf',
        'age'  => 28,
        'address' => 'panthapath'
    ],
    [
        'id' => 3,
        'name'  => 'Asif',
        'age'  => 29,
        'address' => 'Banaree'
    ],

];
foreach ($devs as $data) {
    if ($data['age'] >27) {
        echo "<h4>{$data['id']} </h4>";
        echo "<h4>{$data['name']} </h4>";
        echo "<h4>{$data['age']} </h4>";
        echo "<h4>{$data['address']} </h4>";
        echo "<hr>";
    }

}
