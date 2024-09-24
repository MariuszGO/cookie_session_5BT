<?php
session_start();
?>
<HTML>
<HEAD>
  <TITLE>Wylogowanie</TITLE>
</HEAD>
<BODY>
<?php
  echo "Użytkownik " . $_SESSION["login"] . " jest zalogowany ";
  //echo " został wylogowany.";
 // session_destroy();
?>
</BODY>
</HTML>
