<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eigen opdracht psd 4</title>
</head>
<body>

<?php
    
    if(isset($_POST['submit'])) {
        $tebestedenbedrag = $_POST['tebestedenbedrag'];


        if ($tebestedenbedrag <= 300) {
                echo "op basis van uw te besteden bedrag
                 is de smartphone HUAWEI het beste geschikt";
        }

        else if ($tebestedenbedrag <= 450) {
                    echo "op basis van uw te besteden bedrag
                    is de smartphone SONY het best geschikt";
        }

        else if ($tebestedenbedrag <= 500) {
                    echo "op basis van uw te besteden bedrag
                    is de smartphone SAMSUNG het best geschikt";
        }

        else {
                echo "op basis van uw te besteden bedrag
                is de smartphone APPLE het best geschikt";
        }
    }

?>

    <form action="opgave4.php" method="POST">
        <input type="number" name="tebestedenbedrag" placeholder="voer te besteden bedrag in" required>
        <br><br>
        <input type="submit" name="submit" value="bereken welke mobiel geschikt is">
    </form>

</body>
</html>