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
<a href="s1.php"> Podstrona1  </a>
<a href="s2.php"> Podstrona2  </a>
<a href="s3.php"> Podstrona3  </a>
<a href="wylogowanie.php"> wylogowanie</a>
<?php
session_start();


if(isset($_SESSION["login"])){

echo "Witaj " . $_SESSION["login"] . " tutaj też jesteś rozpoznany S1" ;

echo "<H1> To jest strona S1 </H1>";
echo "<p> Twoj numer to " . $_SESSION["nr"] . "</p>";
echo "<p> Twój login to " . $_SESSION["login"] . "</p>";

echo"<p> Po zalogowniu masz dostęp do wszystkich stron i możesz przeglądać całą zawartość strony </p>";
echo"<p> Po wylogowaniu nie masz dostępu do żadnej podstrony </p>";
echo"<p> Aby zobaczyć zawartość podstron musisz się zalogować </p>";
echo"<p> Po wylogowaniu wróć do strony logowania </p>";
echo"<p> Miłego dnia </p>";
echo"<p> Zespół Szkół Nr 1 im. Igncego Łukasiewicza </p>";
echo"<p> 2025 </p>";




}
else{
echo "Nie jestes zalogowany nie zobaczysz storny S1";

}


?>
</body>
</html>