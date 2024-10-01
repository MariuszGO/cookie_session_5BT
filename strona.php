<?php
session_start();
?>
<HTML>
<HEAD>
  <TITLE>Zalogowany</TITLE>
</HEAD>
<BODY>
<?php
  echo "Użytkownik " . $_SESSION["login"] . " jest zalogowany ";
  //echo " został wylogowany.";
 // session_destroy();
?>
<a href="logowanie.php"> Logowanie</a>
<a href="s1.php"> Podstrona</a>
<a href="s2.php"> Podstrona2</a>
<a href="s2.php"> Podstrona2</a>
<a href="wylogowanie.php"> wylogowanie</a>



</BODY>
</HTML>
