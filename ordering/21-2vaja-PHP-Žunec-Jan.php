<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0BV8SB5CMK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0BV8SB5CMK');
    </script>
    <title>Ordering system: Step 3</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 120%;
            font-weight: 500;
            padding-left: 10px;
        }
        li:nth-child(3){
            background-color: #405a80;
            color: whitesmoke;
        }
        h1{
            color: #405a80;
        }
        td:nth-child(1){
            text-align: right;
        }
        input{
            border-radius: 3px;
            border: 1px solid #b0c8eb;
            font-size: 100%;
            margin-left: 5px;
            margin-right: 10px;
            height: 17px;
            width: 20px;
        }
        h4{
            color: #b0c8eb;
        }
        #button{
            background-color: #405a80;
            color: whitesmoke;
            height: 50px;
            width: 220px;
            margin-top: 20px;
        }
        #button:hover{
            background-color: #b0c8eb;
        }
        div{
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $_SESSION['naslov'] = $_POST["naslov"];
    $_SESSION['mesto'] = $_POST["mesto"];
    $_SESSION['pstevilka'] = $_POST["pstevilka"];
    $_SESSION['posta'] = $_POST["posta"];
    ?>
    <h1>3.korak: Način plačila</h1>
    <?php include("Nav.inc.php") ?>
    <h4>Izber način plačila:</h4>
    <table>
        <form method="post" action="21-3vaja-PHP-Žunec-Jan.php">
            <div><input type="radio" name="placilo" value="Gogotovina">Z gotovino ob prevzemu</div>
            <div><input type="radio" name="placilo" value="Kreditna kartica">Plačilo preko spleta s kreditno kartico</div>
            <div><input type="radio" name="placilo" value="Spletna banka">Prek spletne banke</div>
            <input id="button" type="submit" value="Nadaljuj na dostavo">

        </form>
    </table>
</body>
</html>