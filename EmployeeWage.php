<?php
/*
*Compute Employee wage for multiple companies
*Use function parematers instead of class variables
*/
    class EmployeeWage{
        //Variables
        public $empHours;
        public $isFullTime = 1;
        public $isPartTime = 2;
        public $isAbsent = 0;

        //To calculate wage for a month
        public function calculateMonthlyWage($company, $wagePerHour, $workingDaysPerMonth, $maxWorkingHours){
            $monthlyEmpWage = 0;
            $numOfWorkingDays = 0;
            $totalEmpHours = 0;
            while($numOfWorkingDays <= $workingDaysPerMonth && $totalEmpHours <= $maxWorkingHours){
                $num = rand(0,2); //Generating random numbers 0 and 2
                //Condition to get empHours i.e part time, full time or absent
                switch($num){ 
                    case $this->isFullTime:
                        $this->empHours = 8;
                        break;

                    case $this->isPartTime:
                        $this->empHours = 4;
                        break;

                    default:
                        $this->empHours = 0;
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
