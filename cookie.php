<?php

$im = @$_GET['imie'];
$naz = @$_GET['nazwisko'];
$nr = @$_GET['nr'];
//echo $im;

$cookie_name = "dane";
//$cookie_value = $im . " " .  $naz;

//Nowe Dane

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    $cookie_value= 1;
    setcookie($cookie_name, $cookie_value, time() + 5, "/");
    //$_COOKIE[$cookie_name] = " ";
  echo "Witaj: ". $im . ' ' .$naz . " jesteś po raz pierwszy na stornie. Twój numer to $nr";
} else {
    $cookie_value = @$_COOKIE[$cookie_name];
    $cookie_value++;
    setcookie($cookie_name, $cookie_value, time() + 5, "/");
    
    echo "Witaj: $im $naz byłeś już na tej stornie $_COOKIE[$cookie_name] razy. Twój numer:  $nr";
}
?>

</body>
</html>