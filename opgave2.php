<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eigen opdracht psd 2</title>
</head>
<body>

    <p> hier kunt u berekenen of u winst of verlies heeft, wanneer u 3000 euro verdient.</p>

<?php


    if(isset($_POST['submit'])) {
        $uitgaven = $_POST['uitgaven'];
        
        if($uitgaven < 3000) {
            echo "u heeft winst";

        } else {
            echo "u heeft verlies";
        }
    }

?>

    <form action="opgave2.php" method="POST">
        <input type="number" name="uitgaven" placeholder="voer uw uitgaven in" required>
        <input type="submit" name="submit" value="bereken winst/verlies">
    </form>

</body>
</html>