<?php
session_start();
?>
<HTML>
<HEAD>
  <TITLE>Zalogowany</TITLE>
</HEAD>
<BODY>
<?php

if(isset($_SESSION["login"])){
echo "Użytkownik " . $_SESSION["login"] . " jest zalogowany i masz numer " . $_SESSION["nr"] ;
  //echo " został wylogowany.";
 // session_destroy();

echo "
<a href='logowanie.php'> Logowanie</a>
<a href='s1.php'> Podstrona</a>
<a href='s2.php'> Podstrona2</a>
<a href='s2.php'> Podstrona2</a>
<a href='wylogowanie.php'> wylogowanie</a>
";
}
else{
echo "nie zalogowałeś się";

}
?>

</BODY>
</HTML>
