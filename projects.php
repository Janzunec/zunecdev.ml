<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal website - Projects" />
    <meta name="author" content="Jan Žunec">
    <meta name="keywords" content="Jan Žunec, MyProjects, Calculator, Dicegame, Orderingsystem, Cookies, Form">
    <title>Jan Žunec: Projects</title>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0BV8SB5CMK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0BV8SB5CMK');
    </script>
        <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Ikona spletišča -->
    <link rel="icon" href="slike/logo1.png" type="image/x-icon">

        <!-- Googlove pisave -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="css/projects.css" />
</head>
<body>
    <!--<?php
      $datum = time();
    ?>
    <header>
        <?php include("components/nav.html"); ?>
    </header>
-->
    <main>
      <table id="table">
        <tr>
          <th colspan="2"><h3>My Projects:</h3></th>
        </tr>
        <tr>
            <td class="border1"><a href="calculator/" class="left">Calculator</a> </td>  
            <td><div><a href="calculator/" class="left">Calculator that gives you extra options to select only wanted operators</a></div></td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
                <td class="border2"><a href="ordering/" class="left">Ordering system</a></td>
                <td><div><a href="ordering/" class="left"><b>Simple ordering system that sends an email to a buyer with PHP Mailer</a></div></td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
            <td class="border1"><a href="dice/" class="left">Dice Game</a></td>
            <td><div><a href="dice/" class="left">Fun PHP game to try your luck and compete with friends</a></div></td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
            <td class="border2"><a href="cookies/" class="left">Cookies</a></td>
            <td><div><a href="cookies/" class="left">PHP script that allows you to create your website cookies</a></div></td>
        </tr>
        <tr><td colspan="2">&nbsp;</td></tr>
        <tr>
            <td class="border1"><a href="form/" class="left">Form</a></td>
            <td><div><a href="form/" class="left">PHP application form script, that checks input of the user for correct information</a></div></td>
        </tr>
        </table>
    </main>
    <!--
    <footer id="name">
    <address id="footer1">&#169; Jan Žunec, <?php echo date('Y', $datum) ?></address>
  </footer>
-->
  <?php include('nav.html') ?>
</body>
</html>