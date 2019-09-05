<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eigen opdracht psd 3</title>
</head>
<body>

<?php

      /*

    1e, 2e en 3e game: €60,- per stuk
    4e en 5e game: €38,- per stuk
    6e game of meer: €25 per stuk

    */

    if(isset($_POST['submit'])) {
        $games = $_POST['games'];

        if ($games <=3) {
            $tebetalenbedrag = $games*60;
        }
            else if ($games <=5) {
                     $tebetalenbedrag = 3*60+($games -3)*38;
        }
    
            else if ($games >=6) {
                     $tebetalenbedrag = 3*60+2*38+($games-5)*25;
        }
    }
?>

    <form action="opgave3.php" method="POST">
        <input type="number" name="games" placeholder="voer aantal games in" required>
        <br><br>
        <input type="number" name="tebetalenbedrag" value="<?php echo $tebetalenbedrag ?>" disabled>
        <br><br>
        <input type="submit" name="submit" value="bereken bedrag">
    </form>
</body>
</html>