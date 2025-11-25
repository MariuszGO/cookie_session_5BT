<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Formularz cookie</title>

</head>
<body>
    <header>
        <h1> Strona o sesjach </h1>
    </header>

    <nav>
        <ul>
                <li> <a href="logowanie.php"> Logowanie  </a> </li>
                <li> <a href="s1.php"> Podstrona1  </a> </li>
                <li> <a href="s2.php"> Podstrona2  </a> </li>
                <li> <a href="s3.php"> Podstrona3  </a> </li>
                <li> <a href="wylogowanie.php"> Wylogowanie  </a> </li>
            </ul>
    </nav>
    <main>
<?php
session_start();


if(isset($_SESSION["login"])){

echo "<H1>Witaj " . $_SESSION["login"] . " tutaj też jesteś rozpoznany S2</H1>"  ;
echo" <img src='gory1.jpg' alt='gro1'>";
}
else{
echo "<H1>Nie jestes zalogowany nie zobaczysz storny S2</H1>" ;

}


?>

    </main>
    <footer>
        <p> &copy; 2025 dla KL5 </p>    
    </footer>
</body>
</html>
