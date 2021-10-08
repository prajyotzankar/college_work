<html>
    <head>
        <title>Employee Details </title>
    </head>
</html>

<?php
    class employee{

        public $code, $name, $designation;

        function __construct($code, $name, $designation){
            $this->$code = $code;
            $this->$name = $name;
            $this->$designation = $designation;
        }

        public function display(){
            echo $this->$code."<br>";
            echo $this->$name."<br>";
            echo $this->designation."<br>";
        }

    }

    class emp_account extends employee{
        public $account_no, $joining_date;

        function __construct($joining_date, $account_no){
            $this->$joining_date = $joining_date;
            $this->$account_no = $account_no;
        }

        public function display(){
            parent::display();
            echo $this->$joining_date."<br>";
            echo $this->$account_no."<br>";
        }
    }

    class emp_sal extends emp_account{
        public $account_no, $joining_date;

        public $basic_pay, $earnings, $deduction;

        function __construct($basic_pay, $earnings, $deduction){
            $this->$basic_pay = $basic_pay;
            $this->$earnings = $earnings;
            $this->$deduction = $deduction;
        }

        public function display(){
            parent::display();
            echo $this->$basic_pay."<br>";
            echo $this->$earnings."<br>";
            echo $this->deduction."<br>";
        }
    }

    $emp_obj = new emp_sal()



?>