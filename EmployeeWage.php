<?php
    //Welcome message
    echo "Welcome to Employee Wage Computation Program \n";
    //Variables
    $isEmpPresent = 1;
    $isEmpAbsent = 2;
    $check = rand(1,2); //Generating random numbers 1 and 2
    
    //Condition to check employee is present or not
    if($check == $isEmpPresent){
        echo "Employee is Present";
    }
    else{
        echo "Employee is Absent";
    }
?>