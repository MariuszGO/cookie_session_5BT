<?php
session_start();


if(isset($_SESSION["login"])){

echo "Witaj " . $_SESSION["login"] . " tutaj też jesteś rozpoznany" ;
}
else{
echo "Nie jestes zalogowany nie zobaczysz storny";

}


?>