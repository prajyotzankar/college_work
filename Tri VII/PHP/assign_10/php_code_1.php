<html>
    <head>
        <title>File data info</title>
    </head>
    <body>
        1 -> Number of characters<br>
        2 -> Number of digits<br>
        3 -> Number of vowels<br>
        4 -> Number of words<br>
        5 -> Number of lines<br>
        <form action="php_code_1.php" method="Get">
            Enter the file name : <input type="text" name="file_name"><br><br>
            Enter the option : <input type="text" name="option_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php

    
    $choice = $_GET['option_1'];
    
    $count = 0;
    $myFile = $_GET['file_name']; 
    $fh = fopen($myFile, 'r');

    switch($choice){
        case 1  :   
                    echo count_chars($str,3);
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

        default :   echo "Invalid option";
    }
?>