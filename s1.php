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
        echo "<H1>Nie jestes zalogowany nie zobaczysz storny S1</H1>" ;

        }


        ?>
    </main>
    <footer>
        <p> &copy; 2025 dla KL5 </p>    
    </footer> 
</body>
</html>