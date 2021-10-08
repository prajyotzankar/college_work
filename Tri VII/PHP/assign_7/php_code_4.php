<html>
    <head>
        <title>Associative Array operations</title>
    </head>
    <body>
        1 -> Display the elements of an array along with the keys.<br>
        2 -> Display the size of an array<br>
        3 -> Delete the last element from an array.<br>
        4 -> Reverse the order of each element’s key-value pair <br>
        5 -> Reverse the array elements <br>
        6 -> Sort the array elements in ascending order depending on key.<br>
        <form action="php_code_4.php" method="Get">
            Enter the option : <input type="text" name="option_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    $associative_array= array("Pen"=>"60", "book"=>"70","Chalk"=>"65", "bag"=>"89"); 

    $choice = $_GET['option_1'];

    switch($choice){
        case 1  :   echo "Elements of an array alog with keys : ";
                    foreach($associative_array as $key => $value)
                        echo "Key = $key, Value = $value <br>";
                    break;

        case 2  :   echo "The size of the array : ", sizeof($associative_array), "<br>";
                    break;

        case 3  :   echo "Array after deleting the last elements : ";
                    array_pop($associative_array);
                    print_r($associative_array);
                    break;

        case 4  :   echo "Array after revering of key-value pair ; ";
                    array_flip($associative_array);
                    print_r($associative_array);
                    break;

        case 5  :   echo "Array reversed : ";
                    print_r(array_reverse($associative_array));
                    break;

        case 6  :   echo "Array sorted depending on the key : ";
                    ksort($associative_array);
                    print_r($associative_array);
                    break;

        default :   echo "Invalid Choice";

    }
?>