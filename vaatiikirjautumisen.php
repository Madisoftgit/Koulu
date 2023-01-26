<?php
session_start();
?>
<?php


if (!isset($_SESSION["user_ok"])){
    $_SESSION["paluuosoite"]="vaatiikirjautumisen.php";
    header("Location:kirjaudu.php");
    exit;
}

print "Tiedosto vaatiikirjautumisen.php";

?>
<!DOCTYPE html>
<html>
<head><title>Vaatii kirjautumisen</title></head>
<body>
<p>Kirjautuminen OK!</p>
</body>
</html>
