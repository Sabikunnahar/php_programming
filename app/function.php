<?php

/**
 * function for age call
 */
function ageCall($name, $year){

    $age = 2024 - $year;
    return "<p class=\"alert alert-success\">Hi {$name}, Your age is {$age} and ".CheckUserStatus($age)."<p>";
}

/**
 * function for user check
 */
function CheckUserStatus($age){
    if($age>0 && $age < 9){
        return " You are a Kid";
    }
    else if($age>10 && $age < 17){
        return " You are a Older Kid";
    }
    else if($age>18 && $age < 18){
        return " You are a Teenager";
    }
    else if($age>19 && $age < 35){
        return " You are a Young";
    }
    else{
        return " You are a Old";
    }
}