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
session_start();


if(isset($_SESSION["login"])){

echo "<H1>Witaj " . $_SESSION["login"] . " tutaj też jesteś rozpoznany S2</H1>"  ;
echo" <img src='gory1.jpg' alt='gro1'>";

$dane = "Adam";
$zaszyfrowane = sha1($dane);
$zaszyforowane_md5 = md5($dane);

$dane1 = "KowalskiNOwakzIELINSKIqwasfdwjSGDHJFWASHDFWJHSFDJKXHWFASDKHWEAKSJHZDFJKWESFDJKHCWEASJKDFKJWEHSFDJHWFESHGDFWEHGASDFHGWESFDSDGZFXCHFESKDGFDKXFSKDF";
$zaszyfrowane1 = sha1($dane1);
$zaszyforowane_md5_1 = md5($dane1);




echo "<br> Dane: " . $dane . "<br> Zaszyfrowane sha: " . $zaszyfrowane; 
echo "<br> Dane: " . $dane . "<br> Zaszyfrowane MDB5: " . $zaszyforowane_md5; 
echo "<br><br> Dane: " . $dane1 . "<br> Zaszyfrowane sha: " . $zaszyfrowane1;
echo "<br> Dane: " . $dane1 . "<br> Zaszyfrowane MDB5: " . $zaszyforowane_md5_1;
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
