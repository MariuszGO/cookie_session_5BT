<?php
if (isset($login) && isset($pass)){
  if ($login == "lockoom" && $pass == "test"){
    session_start();
    session_register("login");
    header("Location: strona.php?" . SID);
    exit();
  } else
    $error = "<B>Błędny login lub hasło!</B><BR>";
} else
  $error = false;
?>
<HTML>
<HEAD>
  <TITLE>Logowanie</TITLE>
</HEAD>
<BODY>
<?php
  echo $error ? $error : "";
?>
  <B>Podaj login i&nbsp;hasło</B>
  <FORM method="POST" action="<?php echo $PHP_SELF?>">
    Login: <INPUT type="text" name="login"><BR>
    Hasło: <INPUT type="password" name="pass"><BR>
    <INPUT type="submit" value="Zaloguj się">
  </FORM>
</BODY>
</HTML>
