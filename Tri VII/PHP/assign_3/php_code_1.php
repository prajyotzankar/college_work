<html>
    <head>
        <title>Dropdown list Example</title>
    </head>
    <body>
        <form action="php_code_1.php" method="Get">
            Enter a number : <input type="text" name="num_1"><br><br> 
            <lable for="number">Select a choice from the drop down list : </label>
            <select name="choice" id="choice">
                <option value="1"> Check positive or negative </option>
                <option value="2"> Check even or odd </option>
                <option value="3"> Check number divisibility by 10 </option>
                <br>
            </select>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    
    $num_1 = $_GET["num_1"];
    $ch = $_GET["choice"];

    switch($ch){
        case 1 :    if($num_1 >= 0)
                        echo "Number $num_1 is positive";
                    else
                        echo "Number $num_1 id negative";
                    break;

        case 2 :    if($num_1%2 == 0)
                        echo "Number $num_1 is even";
                    else
                        echo "Number $num_1 is odd";
                    break;

        case 3 :    if($num_1%10 == 0)
                        echo "Number $num_1 is divisible by 10";
                    else
                        echo "Number $num_1 is not divisible by 10";
                    break;    
    }

?>