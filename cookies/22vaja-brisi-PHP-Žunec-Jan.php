<?php 
    setcookie('uporabniskoime',"", time()-60*60*24*365*100);
    setcookie('geslo',"", time()-60*60*24*365*100);
    header('Location: 22vaja-odjava-brez-piškotkov-PHP-Žunec-Jan.php');
?>