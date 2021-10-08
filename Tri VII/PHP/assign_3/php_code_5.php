<html>
    <head>
        <title>Student Information</title>
    </head>
    <body>
        <form action="php_code_5.php" method="Get">
            Student roll : <input type="text" name="student_roll"><br><br>
            Student Name : <input type="text" name="student_name"><br><br>
            Gender :    <input type="radio" id="male" name="gender" value="Male">
                            <label for="male">Male</label>
                        <input type="radio" id="female" name="gender" value="Female">
                            <label for="female">Female</label><br><br>
            
            <lable for="pro_lang">Select all the Programming language known : </label><br>
            
            <input type="checkbox" id="lang_1" name="lang[]" value="C">
                <label for="lang_1">C</lable><br>

            <input type="checkbox" id="lang_2" name="lang[]" value="C++">
                <label for="lang_2">C++</lable><br>

            <input type="checkbox" id="lang_3" name="lang[]" value="Python">
                <label for="lang_3">Python</lable><br>

            <input type="checkbox" id="lang_4" name="lang[]" value="JAVA">
                <label for="lang_4">JAVA</lable><br><br>

            <lable for="course">Select a Course : </label>
            <select name="course" id="course">
                <option value="BCS"> BCS </option>
                <option value="MCS"> MCS  </option>
                <option value="BTech">BTech </option>
            </select>
            <br>
            <input type="Submit"><br>
        </form>
    </body>
</html>

<?php
    
    $roll_no = $_GET["student_roll"];
    $name = $_GET["student_name"];
    $gender = $_GET["gender"];
    $course = $_GET["course"];

    function display($name, $roll_no, $gender, $course){
        echo "Student Roll : $roll_no <br>";
        echo "Student Name : $name <br>";
        echo "Gender : $gender <br>";
        echo "Languages : ";
        foreach ($_GET["lang"] as $lang) {
            echo "$lang ";
        }
        echo "<br>";
        echo "Course : $course <br>";
    }

    display($name, $roll_no, $gender, $course);
    
?>