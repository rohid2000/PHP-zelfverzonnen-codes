<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eigen opdracht psd 6</title>
</head>
<body>

<?php

    if(isset($_POST['submit'])) {
        $number = $_POST['number'];

            $number = 1;
            while ($number <= 12):
            echo "<br>$number";
            $number++;
            endwhile;
    }
?>

    <form action="opgave6.php" method="POST">
        <input type="number" name="number" placeholder="voer getal in">
        <input type="submit" name="submit">
    </form>
    
</body>
</html>