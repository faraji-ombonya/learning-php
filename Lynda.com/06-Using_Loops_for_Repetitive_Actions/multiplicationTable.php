<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge: Using Loops</title>
</head>
<body>
    <h1>Multiplication Table</h1>
    <?php
        echo "<table>";
        echo "<tr>";
        echo "<th></th>";
        for ($k = 1; $k <= 12; $k++){
            echo "<th>$k</th>";
        }
        echo "</tr>";
        
        for($i = 1; $i <= 12; $i++){
            echo "<tr>";
            echo "<th>$i</th>";
            for($j = 1; $j <= 12; $j++){
                $prod = $i * $j;
                echo "<th>$prod</th>";
            }
            echo "</tr>";
        }
        echo "</table>";
    ?>
</body>
</html>