<?php
    //Welcome message
    echo "Welcome to Employee Wage Computation Program \n";

    //Variables
    $num = rand(0,2); //Generating random numbers 0 and 2
    $wagePerHour = 20;
    $empHours;
    
    //Condition to get empHours i.e part time, full time or absent
    switch($num){
        case 1:
            $empHours = 8;
            break;

        case 2:
            $empHours = 4;
            break;

        default:
            echo "Employee is absent \n";
            $empHours = 0;
            break;
    }

    //Calculate Daily Employee Wage
    $dailyEmpWage = $wagePerHour * $empHours;
    echo "Employee Daily Wage :" . $dailyEmpWage;
?>