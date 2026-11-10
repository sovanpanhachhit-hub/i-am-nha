<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>function With Default Parameter</title>
</head>
<body>
    <?php
      //Syntax - Function Definition
        /*
            function functionName($argument1 = defaultValue1, $argument2 = defaultValue2,...,$argumentn = defaultValuen):void{
                //Code to be executed
            }
        */
        function studentInfo($name, $age, $city, $grade = "C"):void{
            echo "===============================<br>";
            echo "Student Name: {$name} <br>";
            echo "Student Age: {$age} <br>";
            echo "Student City: {$city} <br>";
            echo "Student Grade: {$grade} <br>";
            echo "===============================<br>";
        }
        //Function Call: functionName(parameter1, parameter2,...,parametern);
        studentInfo("Pa Pui", 19, "Siem reap", "A");
        studentInfo("Ju Papi", 21, "Phnom Penh", "B");
        studentInfo("Si Kinev", 22, "Chicago");
        ?>
</body>
</html>