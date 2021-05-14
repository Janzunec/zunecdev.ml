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
    <title>Ordering system: Step 4</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 120%;
            font-weight: 500;
            padding-left: 10px;
        }
        li:nth-child(4){
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
    $_SESSION['placilo'] = $_POST["placilo"];
    ?>
    <h1>4.korak: Način dostave</h1>
    <?php include("Nav.php") ?>
    <h4>Izberi način dostave:</h4>
    <table>
        <form method="post" action="21-4vaja-PHP-Žunec-Jan.php">
            <div><input type="radio" name="dostava" value="Osebni prevzem">Osebni prevzem</div>
            <div><input type="radio" name="dostava" value="Pošta Slovenije">Pošta Slovenije</div>
            <div><input type="radio" name="dostava" value="Preko dostavne službe">Dostava preko dostavne službe</div>
            <input id="button" type="submit" value="Nadaljuj na povzetek">

        </form>
    </table>
</body>
</html>