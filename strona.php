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

<a href="s1.php"> Podstrona</a>
</BODY>
</HTML>
