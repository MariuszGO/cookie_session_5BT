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
<a href="s1.php"> Podstrona  </a>
<a href="s2.php"> Podstrona2  </a>
<a href="s3.php"> Podstrona2  </a>
<a href="wylogowanie.php"> wylogowanie</a>
<?php
session_start();


if(isset($_SESSION["login"])){

echo "Witaj " . $_SESSION["login"] . " tutaj też jesteś rozpoznany S3" ;
}
else{
echo "Nie jestes zalogowany nie zobaczysz storny S3";

}


?>
</body>
</html>