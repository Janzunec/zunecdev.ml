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
    <title>Ordering system: Step 1</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 120%;
            font-weight: 500;
            padding-left: 10px;
        }
        li:nth-child(1){
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
            height: 30px;
            font-size: 100%;
            width: 250px;
        }
        h4{
            color: #b0c8eb;
        }
        #button{
            background-color: #405a80;
            color: whitesmoke;
            height: 50px;
            width: 230px;
            margin-top: 20px;
        }
        #button:hover{
            background-color: #b0c8eb;
        }
    </style>
</head>
<body>
    <h1>1.korak: Prijava</h1>
    <?php include("Nav.inc.php") ?>
    <h4>Vnesi svoje podatke za prijavo:</h4>
    <table>
        <form method="post" action="21-1vaja-PHP-Žunec-Jan.php">
        <tr>
            <td>Ime:</td>
            <td>
                <input type="textbox" name="ime">
            </td>
        </tr>
        <tr>
            <td>Priimek:</td>
            <td>
                <input type="textbox" name="priimek">
            </td>
        </tr>
        <tr>
            <td>Email:</td>
            <td>
                <input type="textbox" name="email">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input id="button" type="submit" value="Nadaljuj na korak naslov"></td>
        </tr>
        </form>
    </table>
</body>
</html>