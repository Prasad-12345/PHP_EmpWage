<?php
    //Welcome message
    echo "Welcome to Employee Wage Computation Program \n";

    //Variables
    $isEmpPresent = 1;
    $num = rand(0,1); //Generating random numbers 1 and 2
    $wagePerHour = 20;
    $empHours;
    
    //Condition to check employee is present or not
    if($num == $isEmpPresent){
        //echo "Employee is Present \n";
        $empHours = 8;
    }
    else{
        echo "Employee is Absent \n";
        $empHours = 0;
    }

    //Calculate Daily Employee Wage
    $dailyEmpWage = $wagePerHour * $empHours;
    echo "Employee Daily Wage :" . $dailyEmpWage;
?>