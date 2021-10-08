<!DOCTYPE html>

<html>
    <head>
        <title>Recursive Function</title>
    </head>
</html>

<?php 
    $num = 10;
    function display($num_1){
        if($num_1 < 1)
            return;
        else
            echo $num_1,"<br>";
            display($num_1 - 1);
    }
    display($num);
?>
