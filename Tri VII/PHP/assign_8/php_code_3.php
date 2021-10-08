<html>
    <head>
        <title>Circle Area</title>
    </head>
    <body>
        <form action="php_code_3.php" method="Get">
            Enter radius : <input type="text" name="rad_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    class circle_area{

        public $area, $radius;

        function accept_info(){
            $this->radius = $_GET["rad_1"];
        }

        function display(){
            define("pi", 3.14);
            $this->area = pi * $this->radius * $this->radius;
            echo "Area of Circle : $this->area <br>";
        }

    }

    $circle_1 = new circle_area();
    $circle_1->accept_info();
    $circle_1->display();

?>