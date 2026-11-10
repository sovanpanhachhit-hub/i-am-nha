<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Variables</title>
</head>
<body>
    <?php
        $gpa = 3.85;
echo "Is float? " . (is_float($gpa) ? "Yes" : "No") . " | Type: " . gettype($gpa);
    ?>
</body>
</html>