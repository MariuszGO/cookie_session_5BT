<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Formularz cookie</title>

</head>
<body>
<?php

if(isset($_POST["login"]) && isset($_POST["pass"])){
  $login=$_POST["login"];
  $pass=$_POST["pass"];  
}


if (isset($login) && isset($pass)){
  if ($login == "admin" && $pass == "admin"){
    session_start();
    $_SESSION["login"] = $login;
    $_SESSION['nr'] = 12; 
    header("Location: strona.php?");
    exit();
  } else
    $error = "<B>Błędny login lub hasło!</B><BR>";
} else
  $error = false;
?>

  <B>Podaj login i&nbsp;hasło</B>
  <FORM method="POST" action="logowanie.php">
    Login: <INPUT type="text" name="login"><BR>
    Hasło: <INPUT type="text" name="pass"><BR>
    <INPUT type="submit" value="Zaloguj się">
  </FORM>
</BODY>
</HTML>
