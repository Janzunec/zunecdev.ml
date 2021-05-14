<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal website - Contacts" />
    <meta name="author" content="Jan Žunec">
    <meta name="keywords" content="Jan Žunec, Contacts, Instagram, Linkedin, Github, Mail">
    <link rel="stylesheet" type="text/css" media="screen" href="css/contact.css"/>
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
    <title>Jan Žunec: Contact</title>
</head>
<body>
    <!--
    <?php
      $datum = time();
    ?>
    <header>
    <?php include("components/nav.html"); ?>
    </header>
-->
    <main>
        <p> 
            <i id="instagram" class="fab fa-instagram"></i>&nbsp;
            <a class="left" href="https://www.instagram.com/janzunec/" target="_blank">
                janzunec
            </a>
        </p>
        <p> 
            <i id="twitter" class="fab fa-twitter"></i>&nbsp;
            <a class="left" href="https://twitter.com/janzunec" target="_blank">
                Janzunec
            </a>
        </p>
        <p> 
            <i id="github" class="fab fa-github"></i>&nbsp;
            <a class="left" href="https://github.com/Janzunec" target="_blank">
                Janzunec
            </a>
        </p>
        <p> 
            <i id="linkedin" class="fab fa-linkedin-in"></i>&nbsp;
            <a class="left" href="https://www.linkedin.com/in/jan-zunec-bb9454211/" target="_blank">
                Jan&nbsp;Zunec
            </a>
        </p>
        <p id="mailp">
            <i id="mail" class="far fa-envelope"></i>&nbsp;&nbsp;&nbsp;<a id="maila" href="mailto:zunec.jan@gmail.com" class="left">zunec.jan@gmail.com</a>
        </p>
        <p id="responsive">I am most responsive through <a id="iglink" class="left" href="https://www.instagram.com/janzunec/" target="_blank">instagram</a> DM's and Email</p>
    </main>
<!--
    <footer id="name">
    <address id="footer1">&#169; Jan Žunec, <?php echo date('Y', $datum) ?></address>
  </footer>
-->
  <?php include('nav.html') ?>
</body>
</html>