<?php
    class EmployeeWage{
        //Variables
        public $wagePerHour = 20;
        public $empHours;
        public $workingDaysPerMonth = 20;
        public $numOfWorkingDays = 0;
        public $maxWorkingHours = 100;
        public $totalEmpHours = 0;
        public $monthlyEmpWage = 0;

        //To calculate wage for a month
        public function calculateMonthlyWage(){
            while($this->numOfWorkingDays <= $this->workingDaysPerMonth && $this->totalEmpHours <= $this->maxWorkingHours){
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
                        echo "Employee is absent \n";
                        $this->empHours = 0;
                        break;
                }
                $this->numOfWorkingDays++;
                $this->totalEmpHours += $this->empHours;
                //Calculate Daily Employee Wage
                $dailyEmpWage = $this->wagePerHour * $this->empHours;
                $this->monthlyEmpWage +=$dailyEmpWage;
            }
            echo "Monthly Employee Wage :" . $this->monthlyEmpWage . "\n";
            echo $this->numOfWorkingDays;
        }
    }

    //Object
    $empWage = new EmployeeWage();
    $empWage->calculateMonthlyWage();
?>