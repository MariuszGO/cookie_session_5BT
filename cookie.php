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
                <li> <a href="formularz_cookie.html"> Przykład cookie </a> </li>
                <li> <a href="wylogowanie.php"> Wylogowanie  </a> </li>
            </ul>
    </nav>
    <main>
<?php

$im = @$_GET['imie'];
$naz = @$_GET['nazwisko'];
$nr = @$_GET['nr'];
//echo $im;

$cookie_name = "dane";
//$cookie_value = $im . " " .  $naz;

//Nowe Dane

if(!isset($_COOKIE[$cookie_name])) {
    $cookie_value= 1;
    setcookie($cookie_name, $cookie_value, time() + 5, "/");
    //$_COOKIE[$cookie_name] = " ";
  echo "<H3 class='nowa'>Witaj: ". $im . ' ' .$naz . " jesteś po raz pierwszy na stornie. Twój numer to $nr</h3>";
} else {
    $cookie_value = @$_COOKIE[$cookie_name];
    $cookie_value++;
    setcookie($cookie_name, $cookie_value, time() + 5, "/");
    
    echo "<H3>Witaj: $im $naz byłeś już na tej stornie $_COOKIE[$cookie_name] razy. Twój numer:  $nr</h3>";
}
?>
    </main>
    <footer>
        <p> &copy; 2025 dla KL5 </p>
    </footer>

</body>
</html>