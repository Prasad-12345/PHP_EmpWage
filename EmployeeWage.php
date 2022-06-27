<?php
    //Welcome message
    echo "Welcome to Employee Wage Computation Program \n";

    //Variables
    $wagePerHour = 20;
    $empHours;
    $workingDaysPerMonth = 20;
    $numOfWorkingDays = 1;
    $totalWorkingHours = 100;
    $totalEmpHours = 0;
    $monthlyEmpWage = 0;

    //To calculate wage for a month
    while($numOfWorkingDays <= $workingDaysPerMonth && $empHours <= $totalWorkingHours){
        $num = rand(0,2); //Generating random numbers 0 and 2
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
        $numOfWorkingDays++;
        $totalEmpHours += $empHours;
        //Calculate Daily Employee Wage
        $dailyEmpWage = $wagePerHour * $empHours;
        $monthlyEmpWage +=$dailyEmpWage;
    }
   
    echo "Monthly Employee Wage :" . $monthlyEmpWage;
?>