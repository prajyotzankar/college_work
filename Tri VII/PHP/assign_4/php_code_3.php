<html>
    <head>
        <title>Employee Information</title>
    </head>
    <body>
        <form action="php_code_3.php" method="Get">
            Employee Number : <input type="text" name="emp_num"><br>
            Employee Name : <input type="text" name="emp_name"><br><br>
            Gender :    <input type="radio" id="male" name="gender" value="Male">
                            <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label><br><br>
            
            <lable for="pro_lang">Select all language known : </label><br>
            
            <input type="checkbox" id="lang_1" name="lang[]" value="English">
                <label for="lang_1">English</lable><br>

            <input type="checkbox" id="lang_2" name="lang[]" value="Hindi">
                <label for="lang_2">Hindi</lable><br>

            <input type="checkbox" id="lang_3" name="lang[]" value="Marathi">
                <label for="lang_3">Marathi</lable><br>

            <input type="checkbox" id="lang_4" name="lang[]" value="French">
                <label for="lang_4">French</lable><br><br>

            <lable for="desi">Select Designation : </label>
            <select name="desi" id="desi">
                <option value="Area Manger"> Area Manger </option>
                <option value="Senior Computer Engineer"> Senior Computer Engineer </option>
                <option value="HR Head"> HR Head </option>
            </select>
            <br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    
    $emp_num = $_GET["emp_num"];
    $name = $_GET["emp_name"];
    $gender = $_GET["gender"];
    $desi = $_GET["desi"];
    $lang = $_GET["lang"];

    function display($emp_num, $name, $gender, $desi, $lang){
        echo "Employee Number : $emp_num <br>";
        echo "Employee Name : $name <br>";
        echo "Gender : $gender <br>";
        echo "Designation : $desi <br>";
        echo "Languages : ";
        foreach ($lang as $lang) {
            echo "$lang ";
        }
        echo "<br>";
    }


    display($emp_num, $name, $gender, $desi, $lang);
?>