<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Formularz cookie</title>

</head>
<body>

<body>
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

if(isset($_POST["login"]) && isset($_POST["pass"])){
  $login=$_POST["login"];
  $pass=$_POST["pass"];  
}


if (isset($login) && isset($pass))
  {
            if ($login == "admin" && $pass == "admin")
              {
                session_start();
                $_SESSION["login"] = $login;
                $_SESSION['nr'] = 12; 
                header("Location: strona.php?");
                exit();
            } 
            else
            {
            $error = "<B>Błędny login lub hasło!</B><BR>";
           // echo $error;
            }
  } 
  else $error = false;
?>

  <B>Podaj login i&nbsp;hasło</B>
  <form method="POST" action="logowanie.php">
    <label for="login">Login: </label>
    <input type="text" id="login" name="login"><br>
    <label for="pass">Hasło: </label>
    <input type="password" name="pass"><br>
    <input type="submit" value="Zaloguj się">
</form>
  <?php echo $error; ?>
    </main> 
    <footer>
        <p> &copy; 2025 dla KL5 </p>  
    </footer>
</BODY>
</HTML>
