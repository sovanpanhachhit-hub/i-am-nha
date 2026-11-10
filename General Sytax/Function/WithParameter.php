<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>With Parameter</title>
</head>
<body>
     <?php
        //Syntax - Function Definition
        /*
            function functionName($argument1 = defaultValue1, $argument2 = defaultValue2,...,$argumentn = defaultValuen):void{
                //Code to be executed
            }
        */
        function studentInfo($name, $age=20, $city="Siem Reap", $grade = "C"):void{
            echo "===============================<br>";
            echo "Student Name: {$name} <br>";
            echo "Student Age: {$age} <br>";
            echo "Student City: {$city} <br>";
            echo "Student Grade: {$grade} <br>";
            echo "===============================<br>";
        }
        //Function Call: functionName(parameter1, parameter2,...,parametern);
        studentInfo("Pa Pui", 19, "Siem Reap", "A");
        studentInfo("Ju Papi", 20, "Los Angeles", "B");
        studentInfo("Ah Poy", 22, "Chicago");
        studentInfo("Si Kinev", 12);
        studentInfo("Charlie Davis");
    ?>
</body>
</html>