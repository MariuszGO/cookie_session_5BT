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
</BODY>
</HTML>
