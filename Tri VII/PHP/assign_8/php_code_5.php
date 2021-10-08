<html>
    <head>
        <title>Student Information</title>
    </head>
    <body>
        <form action="php_code_5.php" method="Get">
            Student Name : <input type="text" name="student_name"><br><br>
            Java Marks : <input type="text" name="java"><br><br>
            PHP Marks : <input type="text" name="php"><br><br>
            CPP Marks : <input type="text" name="cpp"><br><br>
            <br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    class student{

        public $name, $java, $php, $cpp;
        public $sum, $percent;

        function __construct(){
            $this->name = $_GET["student_name"];
            $this->java = $_GET["java"];
            $this->php = $_GET["php"];
            $this->cpp = $_GET["cpp"];
        }

        function calculate(){
            $this->sum = $this->java + $this->php + $this->cpp;
            $this->percent = $this->sum/3;

            echo "Name : $this->name <br>";
            echo "Java Marks : $this->java <br>";
            echo "PHP Marks : $this->php <br>";
            echo "CPP Marks : $this->cpp <br>";

            echo "Total Marks : $this->sum <br>";
            echo "Percentage : $this->percent <br>";

        }

    }
    $student_1 = new student();
    $student_1->calculate();
?>