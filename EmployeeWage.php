<?php
    //Welcome message
    echo "Welcome to Employee Wage Computation Program \n";

    //Variables
    $isEmpPresent = 1;
    $num = rand(0,1); //Generating random numbers 1 and 2
    $wagePerHour = 20;
    $fullDayHour = 8;
    
    //Condition to check employee is present or not
    if($num == $isEmpPresent){
        echo "Employee is Present \n";
    }
    else{
        echo "Employee is Absent \n";
    }

    $dailyEmpWage = $wagePerHour * $fullDayHour;
    echo "Employee Daily Wage :" . $dailyEmpWage;
?>