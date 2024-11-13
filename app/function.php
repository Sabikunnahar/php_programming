<?php

/**
 * function for age call
 */
function ageCall($name, $year){

    $age = 2024 - $year;
    $alert_type = '';
    switch (CheckUserStatus($age)) {
        case 'Child':
            $alert_type = 'success';
            break;
        case 'Kid':
            $alert_type = 'primary';
            break;
        case 'Teenager':
            $alert_type = 'info';
            break;
        case 'Young':
            $alert_type = 'warning';
            break;
        case 'Old':
            $alert_type = 'dark';
            break;
    }
    
    return "<p class=\"alert alert-{$alert_type}\">Hi {$name}, Your age is {$age} and You are a".CheckUserStatus($age)."<p>"; //you can call a value with {} and for function it's need to concat
}

/**
 * function for user check
 */
function CheckUserStatus($age){
    if($age>0 && $age < 9){
        return "Child";
    }
    else if($age>10 && $age < 17){
        return "Kid";
    }
    else if($age>18 && $age < 18){
        return "Teenager";
    }
    else if($age>19 && $age < 35){
        return "Young";
    }
    else{
        return "Old";
    }
}