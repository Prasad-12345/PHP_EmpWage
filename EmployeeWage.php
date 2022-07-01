<?php
    class EmployeeWage{
        //Variables
        public $wagePerHour;
        public $empHours;
        public $workingDaysPerMonth;
        public $maxWorkingHours;
        public $isFullTime = 1;
        public $isPartTime = 2;
        public $company;
        public $num;

        public function __construct($company, $wagePerHour, $workingDaysPerMonth, $maxWorkingHours)
        {
            $this->company = $company;
            $this->wagePerHour = $wagePerHour;
            $this->workingDaysPerMonth = $workingDaysPerMonth;
            $this->maxWorkingHours = $maxWorkingHours;    
        }

        //To calculate wage for a month
        public function calculateMonthlyWage(){
            $numOfWorkingDays = 0;
            $totalEmpHours = 0;
            $monthlyEmpWage = 0;
            $num = 0;
            while($numOfWorkingDays <= $this->workingDaysPerMonth && $totalEmpHours <= $this->maxWorkingHours){
                function randomNum(){
                    $num = rand(0,2); //Generating random numbers 0 and 2
                }
                
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
                $dailyEmpWage = $this->wagePerHour * $this->empHours;
                $monthlyEmpWage +=$dailyEmpWage;
            }
            return $this->company . " "  . "Monthly Employee Wage :" . $monthlyEmpWage . "\n";
            
            //echo $this->numOfWorkingDays;
        }
    }

    class childEmpWage extends EmployeeWage{
        public function __construct($company, $wagePerHour, $workingDaysPerMonth, $maxWorkingHours)
        {
            $this->company = $company;
            $this->wagePerHour = $wagePerHour;
            $this->workingDaysPerMonth = $workingDaysPerMonth;
            $this->maxWorkingHours = $maxWorkingHours;    
        }
    }

    //Object
    $empWage = new childEmpWage("Reliance", 50, 20, 120);
    $empWage->calculateMonthlyWage();
    $empWage1 = new childEmpWage("Dmart", 40, 25, 150);
    $empWage->calculateMonthlyWage();
?>