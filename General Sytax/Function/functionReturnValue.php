<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function getAcadamicYear(): string {
        $startYear = 2025;
        $endYear = 2027;
        return "ឆ្នាំសិក្សា​($startYear)-($endYear)";
    }

    $year = getAcadamicYear();
    echo "ព័ត៍មាន " , $year;
    ?>
</body>
</html>