<?php

$im = $_GET['imie'];
$naz = $_GET['nazwisko'];
//echo $im;

$cookie_name = "dane";
//$cookie_value = $im . " " .  $naz;

//Nowe Dane

?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    $cookie_value= 0;
    setcookie($cookie_name, $cookie_value, time() + 5, "/");
    //$_COOKIE[$cookie_name] = " ";
  echo "Witaj: ". $im . ' ' .$naz . " jesteś po raz pierwszy na stornie";
} else {
    $cookie_value = $_COOKIE[$cookie_name];
    $cookie_value++;
    setcookie($cookie_name, $cookie_value, time() + 5, "/");
    
    echo "Witaj: ".$_COOKIE[$cookie_name] . " byłeś już na tej stornie";
}
?>

</body>
</html>