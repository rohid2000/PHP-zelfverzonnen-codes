<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Eigen opdracht psd 1</title>
</head>
<body>

<?php


    if(isset($_POST['submit'])) {
        $inkomsten = $_POST['inkomsten'];
        $uitgaven = $_POST['uitgaven'];
    
         $bedragmetrente = $inkomsten - $uitgaven;


    }       
        
?>    

    <form action="opgave1.php" method="POST">
        <input type="number" name="inkomsten" placeholder
        ="voer uw inkomsten in" required>
        <br>
        <input type="number" name="uitgaven" placeholder
        ="voer uw uitgaven in" required>
        <br><br>
        <input type="number" name="bedragmetrente" value="<?php echo $bedragmetrente ?>" disabled>
        <br><br>
        <input type="submit" name="submit" value
        ="bereken te besteden bedrag">
</body>
</html>