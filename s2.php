<br>
<a href="logowanie.php"> Logowanie  </a>
<a href="s1.php"> Podstrona  </a>
<a href="s2.php"> Podstrona2  </a>
<a href="s3.php"> Podstrona2  </a>
<a href="wylogowanie.php"> wylogowanie</a>
<?php
session_start();


if(isset($_SESSION["login"])){

echo "Witaj " . $_SESSION["login"] . " tutaj też jesteś rozpoznany S2"  ;
}
else{
echo "Nie jestes zalogowany nie zobaczysz storny S2" ;

}


?>
