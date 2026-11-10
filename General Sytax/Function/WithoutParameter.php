<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Without Parameter</title>
</head>
<body>
     <?php
        //Syntax - Function Definition
        /*
            function functionName():void{
                //Code to be executed
            }
        */
        function studentInfo():void{
            echo "===============================<br>";
            echo "Student Name: Pa Pui <br>";
            echo "Student Age: 19 <br>";
            echo "Student City: Siem Reap <br>";
            echo "===============================<br>";
        }
        //Function Call: functionName();
        studentInfo();
        studentInfo();
    ?>
</body>
</html>