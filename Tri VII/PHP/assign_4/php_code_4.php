<html>
    <head>
        <title>Employee Salary</title>
    </head>
    <body>
        <form action="php_code_4.php" method="Get">
            Enter Base Salary : <input type="text" name="base_salary"><br>
            Enter HRA   : <input type="text" name="hra"><br>
            Enter DA   : <input type="text" name="da"><br>
            Enter TA   : <input type="text" name="ta"><br>
            Enter PT   : <input type="text" name="pt"><br>
            Enter PF   : <input type="text" name="pf"><br>
            <input type="Submit">
        </form>
    </body>
</html>

<?php

    $base_salary = $_GET["base_salary"];
    $hra = $_GET["hra"];
    $da = $_GET["da"];
    $ta = $_GET["ta"];
    $pt = $_GET["pt"];
    $pf = $_GET["pf"];

    function grosssalary($basic_salary, $hra, $da, $ta){
        $gross_salary = $basic_salary + $hra + $da + $ta;
        echo "Gross Salary is $gross_salary <br>";
        return $gross_salary;
    }

    function netsalary($gross_salary, $pt, $pf){
        $net_salary = $gross_salary - $pt - $pf;
        echo "Net Salary is $net_salary <br>";
    }
    $gross_salary = grosssalary($base_salary, $hra, $da, $ta);
    netsalary($gross_salary,  $pt, $pf);



?>