<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0BV8SB5CMK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0BV8SB5CMK');
    </script>
    <style>
        body{
            font-size: 120%;
            font-family: Arial, Helvetica, sans-serif;
        }
        h1{
            color: #405a80;
        }
        p{
            font-weight: 900;
        }
        input{
            font-size: 90%;
            height: 40px;
            background-color: #405a80;
            color: white;
            border: #405a80 2px solid;
            margin-top: 20px;
            margin-left: 70px;
        }
        input:hover{
            background-color: skyblue;
        }
    </style>
    <title>Cookies</title>
</head>
<body>
<?php error_reporting(0) ;?>
    <h1>Prijava uporabnika</h1>
    <p>Dostop do spletne strani je možen le prijavljenim uporabnikom!</p>
    <?php 
    $uime = $_COOKIE["uporabniskoime"];
    $geslo = $_COOKIE["geslo"];
    echo "<p>Pozdravljen <b>$uime!</b></p>";
    echo "<div>Trenutne vrednosti piškotkov:</div>";
    echo "<div>uime: $uime</div>";
    echo "<div>geslo: $geslo</div>";
    ?>
    <form action="22vaja-odjavaPHP-Žunec-Jan.php">
    <input type="submit" value="Odjava">
    </form>
    <form action="22vaja-odjava-brez-piškotkov-PHP-Žunec-Jan.php">
    <input type="submit" value="Odjava z brisanjem piškotkov">
    </form>
</body>
</html>