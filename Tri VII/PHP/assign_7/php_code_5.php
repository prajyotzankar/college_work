<html>
    <head>
        <title>Array operations</title>
    </head>
    <body>
        1 -> Merge two arrays and display it.<br>
        2 -> Find difference of two arrays<br>
        3 -> Display common elements of the arrays.<br>
        4 -> Replace the 1st array elements to 2nd array elements.<br>
        <form action="php_code_5.php" method="Get">
            Enter the option : <input type="text" name="option_1"><br><br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    $indexed_array1 = array(30, 20, 50, 10, 40);
    $indexed_array2 = array(90, 70, 100, 80, 60);

    $choice = $_GET['option_1'];

    switch($choice){
        case 1  :   echo "Mereged Array : ";
                    print_r(array_merge($indexed_array1, $indexed_array2));
                    break;

        case 2  :   echo "Difference of the 2 arrays : ";
                    print_r(array_diff($indexed_array1, $indexed_array2));
                    break;

        case 3  :   echo "Common elements of the arrays : ";
                    print_r(array_intersect($indexed_array1, $indexed_array2));
                    break;

        case 4  :   echo "Elements replacement : ";
                    print_r(array_replace($indexed_array1,$indexed_array2));
                    break;

        default :   echo "Invalid Choice";
    }
?>