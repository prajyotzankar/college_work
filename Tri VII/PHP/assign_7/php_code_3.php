<html>
    <head>
        <title>Indexed Array operations</title>
    </head>
    <body>
        1 -> Find sum of array elements<br>
        2 -> Find product of array elements<br>
        3 -> Sort the array elements in ascending order<br>
        4 -> Sort the array elements in descending order<br>
        5 -> Removes the duplicate values from array<br>
        <form action="php_code_3.php" method="Get">
            Enter the option : <input type="text" name="option_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    $indexed_array = array(30, 20, 45, 56, 82, 45);
    $choice = $_GET['option_1'];

    switch($choice){
        case 1  :   echo "Summation of array Elements : ", array_sum($indexed_array),"<br>";
                    break;

        case 2  :   echo "Product of array elements : ", array_product($indexed_array),"<br>";
                    break;

        case 3  :   echo "Array Sorted in Asecending oreder : ";
                    sort($indexed_array);
                    print_r($indexed_array);
                    break;

        case 4  :   echo " Array Sorted in Descending order : ";
                    rsort($indexed_array);
                    print_r($indexed_array);
                    break;

        case 5  :   echo "Array after removieng duplicate elements : ";
                    print_r(array_unique($indexed_array));
                    break;

        default :   echo "Invalid option";
    }
?>