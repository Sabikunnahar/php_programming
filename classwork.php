<?php
$amount=90;
$currency;
if($amount=0 && $amount<86.01)
{
    $amount= 86;
}
elseif( $amount<98 && $amount>=115.12){
    $amount= 115.12;
}
elseif( $amount< 86.01 && $amount>=98){
    $amount=98.45;
}
echo " The current amount is {$currency}";
?>