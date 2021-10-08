<html>
    <head>
        <title>Employee Information</title>
    </head>
    <body>
        <form action="php_code_2.php" method="Get">
            Employee Name : <input type="text" name="emp_name"><br><br>
            <lable for="desi">Select Designation : </label>
            <select name="desi" id="desi">
                <option value="Area Manger"> Area Manger </option>
                <option value="Senior Computer Engineer"> Senior Computer Engineer </option>
                <option value="HR Head"> HR Head </option>
            </select><br><br>
            Employee Salary : <input type="text" name="emp_salary"><br><br>

            <br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    class employee{

        public $name, $desi, $salary;

        function accept_info(){
            $this->name = $_GET["emp_name"];
            $this->desi = $_GET["desi"];
            $this->salary = $_GET["emp_salary"];
        }

        function display(){
            echo "Employee Name : $this->name <br>";
            echo "Designation : $this->desi <br>";
            echo "Salary : $this->salary <br>";
            echo "<br>";
        }

    }

    $emp_1 = new employee();
    $emp_1->accept_info();
    $emp_1->display();

?>