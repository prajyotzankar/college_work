<html>
    <head>
        <title>Indexed Array operations</title>
    </head>
    <body>
        1 -> Replace one array with another array<br>
        2 -> Find reverse of an array<br>
        3 -> Display array elements from 2nd index<br>
        4 -> Display two array elements from 3rd index<br>
        5 -> Removes the duplicate values from array<br>
        6 -> Find sum and product of an array element<br>
        <form action="php_code_1.php" method="Get">
            Enter the option : <input type="text" name="option_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    $indexed_array1 = array(30, 20, 50, 10, 40, 20, 60);
    $indexed_array2 = array(90, 70, 100, 80, 60);
    $choice = $_GET['option_1'];
    
    echo "Array 1 -> "; 
    print_r($indexed_array1);
    echo "<br>";

    echo "Array 2 -> "; 
    print_r($indexed_array2);
    echo "<br><br>";

    switch($choice){
        case 1  :   echo "Elements replacement : ";
                    print_r(array_replace($indexed_array1,$indexed_array2));
                    break;

        case 2  :   echo "Array reversed : ";
                    print_r(array_reverse($indexed_array1));
                    break;

        case 3  :   echo "Array Sliced : ";
                    print_r(array_slice($indexed_array1, 2));
                    break;

        case 4  :   echo "Array Sliced : ";
                    print_r(array_slice($indexed_array1, 3, 2));
                    break;

        case 5  :   echo "Array after removieng duplicate elements : ";
                    print_r(array_unique($indexed_array1));
                    break;

        case 6  :   echo "Summation of array Elements : ", array_sum($indexed_array1),"<br>";
                    echo "Product of array elements : ", array_product($indexed_array1),"<br>";
                    break;

        default :   echo "Invalid option";
    }
?>