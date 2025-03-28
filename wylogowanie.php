<br>
<a href="logowanie.php"> Logowanie  </a>


<?php

session_start();

if(isset($_SESSION["login"])){

    echo "Witaj " . $_SESSION["login"] . " na stronie wylogowanie"  ;
    }
    else{
    echo "Nie jestes zalogowany nie zobaczysz storny wylogowamie" ;
    
    }

session_destroy();

echo "Wylogowano."
?>