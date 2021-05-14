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
            font-size: 120%;
            width: 210px;
            height: 35px;
            background-color: #afe5f0;
            color: black;
            border: #405a80 2px solid;
            margin-top: 10px;
        }
        input:hover{
            background-color: skyblue;
        }
        #gumb{
            background-color: #405a80;
            color: white;
        }
        #gumb:hover{
            background-color: skyblue;
        }
        td:nth-child(1){
            text-align: right;
            padding-top: 10px;
        }        
        td:nth-child(2){
            text-align: left;
        }
        #checkbox{
            font-size: 50%;
            height: 23px;
            width: 23px;
        }
    </style>
    <title>Cookies</title>
</head>
<body>
    <h1>Prijava uporabnika</h1>
    <table>
        <form action="22vaja-obrazec-PHP-Žunec-Jan.php" method="POST">
            <tr><td>Uporabniško ime:</td><td><input type="text" name="uporabniskoime"></td></tr>
            <tr><td>Geslo:</td><td><input type="password" name="geslo"></td></tr>
            <tr><td>Zapomni si me:</td><td><input id="checkbox" type="checkbox" name="zapomni"></td></tr>
            <tr><td></td><td><input id="gumb" type="submit" value="Prijava"></td></tr>
        </form>
    </table>
    <?php error_reporting(0) ;?>
    <?php
    $uime = $_COOKIE["uporabniskoime"];
    $geslo = $_COOKIE["geslo"];  
        if (($_POST['uporabniskoime'] == $uime) && ($_POST['geslo'] == $geslo)){
            if (isset($_POST['zapomni'])) {
                setcookie('uporabniskoime',$_POST["uporabniskoime"], time()+60*60*24*365);
                setcookie('geslo',$_POST["geslo"], time()+60*60*24*365);
            
            } else {
                setcookie('uporabniskoime',$_POST["uporabniskoime"], false);
                setcookie('geslo',$_POST["geslo"], false);
            }
            header('Location: 22vaja-main-PHP-Žunec-Jan.php');
            
        } elseif(($_POST['uporabniskoime'] != null) && ($_POST['geslo'] != null)){
            echo '<br>Uporabniško ime/geslo ni pravilno!';
            echo "<form action=\"22vaja-prijava-PHP-Žunec-Jan.php\"><input type=\"submit\" value=\"Pojdi na prijavo\"></form>";
        }
    ?>
</body>
</html>