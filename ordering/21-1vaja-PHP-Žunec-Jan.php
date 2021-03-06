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
    <title>Ordering system: Step 2</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 120%;
            font-weight: 500;
            padding-left: 10px;
        }
        li:nth-child(2){
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
            width: 220px;
            margin-top: 20px;
        }
        #button:hover{
            background-color: #b0c8eb;
        }
        #postna{
            width: 120px;
        }
    </style>
</head>
<body>
    <?php 
    $_SESSION['ime'] = $_POST["ime"];
    $_SESSION['priimek'] = $_POST["priimek"];
    $_SESSION['email'] = $_POST["email"];
    ?>
    <h1>2.korak: Naslov za dostavo</h1>
    <?php include("Nav.php") ?>
    <h4>Vpi??i naslov za dostavo:</h4>
    <table>
        <form method="post" action="21-2vaja-PHP-??unec-Jan.php">
        <tr>
            <td>Naslov:</td>
            <td>
                <input type="textbox" name="naslov">
            </td>
        </tr>
        <tr>
            <td>Mesto:</td>
            <td>
                <input type="textbox" name="mesto">
            </td>
        </tr>
        <tr>
            <td>Po??tna ??tevilka:</td>
            <td>
                <input id="postna" type="number" name="pstevilka">
            </td>
        </tr>
        <tr>
            <td>Po??ta:</td>
            <td>
                <input type="textbox" name="posta">
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input id="button" type="submit" value="Nadaljuj na pla??ilo"></td>
        </tr>
        </form>
    </table>
</body>
</html>