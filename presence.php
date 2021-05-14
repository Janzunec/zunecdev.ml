<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal website - Presence" />
    <meta name="author" content="Jan Žunec">
    <meta name="keywords" content="Jan Žunec, Discord, Presence, Lanyard">
    <link rel="stylesheet" type="text/css" media="screen" href="css/presence.css" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0BV8SB5CMK"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-0BV8SB5CMK');
    </script>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    
    <!-- Ikona spletišča -->
    <link rel="icon" href="slike/logo1.png" type="image/x-icon">

    <!-- Googlove pisave -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <title>Contact</title>
</head>
<body>
    <!--<?php
      $datum = time();
    ?>
    <header>
    <?php include("components/nav.html"); ?>
    </header>-->

    <main>
        <h3 id="prenaslov"><i class="fab fa-discord"></i>&nbsp;Presence</h3>
        <p id="responsive">You might have noticed, when I am doing something like coding, playing a game or listening to Spotify, it appears in bottom left corner or in the navigation. This is possible with the project called <a id="iglink" class="left" href="https://github.com/phineas/lanyard">Lanyard</a> that takes your Discord presence and updates it to an API and WebSocket service. It's easy to setup, you just have to join a Discord server!</p>
    </main>

    <!--<footer id="name">
    <address id="footer1">&#169; Jan Žunec, <?php echo date('Y', $datum) ?></address>
  </footer>-->
  <?php include('nav.html') ?>
</body>
</html>