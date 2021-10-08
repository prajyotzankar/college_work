<html>
    <head>
        <title>Patterns</title>
    </head>
</html>

<?php
    
    echo "Pattern 1 <br>";
    for($i = 4 ; $i >= 2 ; $i--){
        for($j = 1 ; $j <= $i ; $j++)
            echo " $j ";
        echo "<br>";
    }
    for($i = 2 ; $i <= 4 ; $i++){
        for($j = 1 ; $j <= $i ; $j++)
            echo " $j ";
        echo "<br>";
    }
    echo "<br>";

    echo "Pattern 2 <br>";
    for($i = 'a' ; $i <= 'd' ; $i++){
        for($j = 'a' ; $j <= $i ; $j++)
            echo "$j ";
        echo "<br>";
    }

    echo "<br>";
    echo "Pattern 3 <br>";
    $t = 'A';
    for($i = 'A' ; $i <= 'D' ; $i++){
        for($j = 'A' ; $j <= $i ; $j++, $t++)
            echo "$t ";
        echo "<br>";
    }
    
    
?>