<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Formularz cookie</title>

</head>
<body>
<br>
<a href="logowanie.php"> Logowanie  </a>


<?php

session_start();

if(isset($_SESSION["login"])){

    echo "Witaj " . $_SESSION["login"] . " na stronie wylogowanie"  ;
    }
    else{
    echo "Nie jestes zalogowany nie zobaczysz storny wylogowamie" ;
    
    }

session_destroy();

echo "Wylogowano."
?>
</body>
</html>