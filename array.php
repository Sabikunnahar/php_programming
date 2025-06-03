<?php
// ******************************************PHP - Day 07******************************8
//index array
$food = ['burger', 'pizza', 'fry', 'coke', 'apple']; 

foreach($food as $item){
        echo $item."<br>";
        }
        echo"===============================1"."<br>";

// asseociation array
$name = [                                  
        'motijheel'=> 'bristy', 
        'shamoly'=> 'akram', 
        'ponchogor'=> 'hasan'
        ];
 

foreach($name as $key => $value){
        echo $key."-".$value."<br>";
        }
echo"===============================2"."<br>";

//Multi dymentional array
$addresses = [                                  
        'motijheel'=> 'bristy', 
        'shamoly'=> 'akram', 
        'ponchogor'=> 'hasan',
        'mohammadpur'=> ['lina', 'gronthy', 'keya'],
        ];

// array count
$arry_count =[
        'iphone'=> 'Sabbir',
        'iphone'=> 'digonto',
        'xaomi'=> 'bristy',
        'mi'=> 'swty',
];
echo "The count of array count is: ";
echo count($arry_count);
echo "<br/>";
echo"===============================3"."<br>";

//in_array()     
if(in_array('lacchi', $food)){
        print("Yes, There are");
}
else{
        print("No, There is not")."<br>";
}
echo"===============================4"."<br>";

//sort function( for assending)
sort($food);
print_r($food);

echo"<br>";
echo"===============================5"."<br>";

//rsort function( for desending  or reverse)
rsort($food);
print_r($food);
echo "<br/>";
echo"===============================6"."<br>";

//arsort function for associate arry( for desending  or reverse)
arsort($food);
print_r($food);
echo "<br/>";
echo"===============================7"."<br>";

//arry push, pop
$fast_food = ['burger', 'pizza', 'fry', 'coke', 'apple']; 
array_push($fast_food, 'nachos', 'chicken fry', 'beef');//this function will add value in the last in the array
print_r($fast_food);
echo"<br/>";

array_pop($fast_food);// this function will remove the last value in the array
print_r($fast_food);
echo"<br/>";

array_shift($fast_food);// this function will remove the first value in the array
print_r($fast_food);
echo"<br/>";

array_unshift($fast_food, 'rui');// this function will add value in the first value in the array
print_r($fast_food);
echo"<br/>";
echo"===============================8"."<br>";

//array reverse for reversing any arry
$reverse = array_reverse($fast_food);
print_r($reverse);
echo"<br/>";
echo"===============================9"."<br>";

//array unique is for uniqe the items where there are multiple of same products
$food_items =['nachos', 'chicken fry', 'beef', 'burger', 'nachos', 'beef'];
$unique_foods = array_unique($food_items);
print_r($unique_foods);
echo"<br/>";
echo"===============================10"."<br>";

//array rand is for random choose like lottery
$cricketers =['sakib', 'tamim', 'rubel', 'mashrafi', 'mahmud', 'kayes'];
$random_cricketers = array_rand($cricketers);
echo $cricketers[$random_cricketers];
echo"<br/>";
echo"===============================11"."<br>";

//array splice is to find item in the middle
$food_items =['sakib', 'tamim', 'rubel', 'mashrafi', 'mahmud', 'kayes'];

array_splice($food_items, 2, 2); //here the str is(variable, start index, how many item have to delete /add.
array_splice($food_items, 2, 0, ['jahan', 'alo']); //default it deletes but you can also add in this position)
echo "<pre>";
print_r($food_items);
echo"<br/>";
echo"===============================12"."<br>";




//array slice for creating and array from an existing array
$slice =['sakib', 'tamim', 'rubel', 'mashrafi', 'mahmud', 'kayes'];

$slice_2 = array_slice($slice, 2, 3); //here it will create an array starts from index 2 and next 3
print_r($slice_2);






// print_r($name);
// echo("<br/> ");

// echo "<pre>";
// var_dump($addresses);
// echo "</pre>";

// echo $addresses['mohammadpur'][2];
// echo "<br>"."<br>";

// echo current($food)."<br>";  /*(currect = first value),(end = last value),(next = 2nd value)*/
// echo end($food);




// Array print korar jnno always print_r use korte hoy and var_dump diyeo kora jay ektu details e dekhar or dewar jnno
// pre tag shundor kore dekhanor jnno use kora hoy
