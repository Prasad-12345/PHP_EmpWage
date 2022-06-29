<?php
/*
*Compute Employee wage for multiole companies
*Use function parematers instead of class variables
*/
    class EmployeeWage{
        //Variables
        public $empHours;

        //To calculate wage for a month
        public function calculateMonthlyWage($company, $wagePerHour, $workingDaysPerMonth, $maxWorkingHours){
            $monthlyEmpWage = 0;
            $numOfWorkingDays = 0;
            $totalEmpHours = 0;
            while($numOfWorkingDays <= $workingDaysPerMonth && $totalEmpHours <= $maxWorkingHours){
                $num = rand(0,2); //Generating random numbers 0 and 2
                //Condition to get empHours i.e part time, full time or absent
                switch($num){
                    case 1:
                        $this->empHours = 8;
                        break;

                    case 2:
                        $this->empHours = 4;
                        break;

                    default:
                        //echo "Employee is absent \n";
                        $this->empHours = 0;
                        break;
                }
                $numOfWorkingDays++;
                $totalEmpHours += $this->empHours;
                //Calculate Daily Employee Wage
                $dailyEmpWage = $wagePerHour * $this->empHours;
                $monthlyEmpWage +=$dailyEmpWage;
            }
            echo "$company Monthly Employee Wage :" . $monthlyEmpWage . "\n";
            //echo $this->numOfWorkingDays;
        }
    }

    //Object
    $empWage = new EmployeeWage();
    $empWage->calculateMonthlyWage("Reliance", 50, 25, 150);
    $empWage->calculateMonthlyWage("Dmart", 30, 20, 100);
?>