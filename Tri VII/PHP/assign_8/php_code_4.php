<html>
    <head>
        <title>Rectangle Area</title>
    </head>
</html>

<?php

    class rect_area{

        public $length, $breadth, $area;

        function __construct(){
            $this->length = 20;
            $this->breadth = 50;

        }

        function __destruct(){
            $this->area = $this->length * $this->breadth;
            echo "Area of rect : $this->area <br>";
        }

    }

    $rect_1 = new rect_area();
?>