<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eigen opdracht psd 5</title>
</head>
<body>

<?php

    if(isset($_POST['submit'])) {
        $number = $_POST['number'];

        for ($number = $number; $number <= 50; $number++) {
            echo "<br> $number";
        }
    }

?>

    <form action="opgave5.php" method="POST">
        <input type="number" name="number" placeholder="voer getal in">
        <input type="submit" name="submit">
</body>
</html>