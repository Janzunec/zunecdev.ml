<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Personal website - Tools" />
    <meta name="author" content="Jan Žunec">
    <meta name="keywords" content="Jan Žunec, Languages, Tools, JavaScript, HTML, CSS, Python, C++, PHP">
    <title>Jan Žunec: Tools</title>
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

    <link rel="stylesheet" type="text/css" href="css/tools.css" />
</head>
<body>
    <!--<?php
      $datum = time();
    ?>
    <header>
        <?php include("components/nav.html"); ?>
    </header>-->

    <main>
      <table>
        <tr>
          <th colspan="3"><h3>Languages i use:</h3></th>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
            <td id="html">
                <img src="slike/html_1.png" alt="HTML5" height="50px">
            </td>
            <td class="border1"><a href="https://www.w3schools.com/html/default.asp" target="_blank" class="left">HTML5</a> </td>  
            <td><div class="about"><a href="https://www.w3schools.com/html/default.asp" target="_blank" class="left">HTML or The HyperText Markup Language, is the standard markup language for documents designed to be displayed in a web browser</a></div></td>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
                <td id="css">
                    <img src="slike/CSS3.png" alt="CSS3" height="50px">
                </td>
                <td class="border2"><a href="https://www.w3schools.com/css/" target="_blank" class="left">CSS3</a></td>
                <td><div class="about"><a href="https://www.w3schools.com/css/" target="_blank" class="left">Cascading Style Sheets (CSS) is a style sheet language used for describing the presentation of a document written in HTML</a></div></td>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
            <td id="PHP">
                <img src="slike/new-php-logo.png" width="70px" alt="PHP">
            </td>
            <td class="border1"><a href="https://www.php.net/" target="_blank" class="left">PHP</a></td>
            <td><div class="about"><a href="https://www.php.net/" target="_blank" class="left">PHP is a popular general-purpose scripting language that is especially suited to web development</a></div></td>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
            <td id="SQL">
                <img src="slike/javascript.png" width="70px">
            </td>
            <td class="border2"><a href="https://www.javascript.com/" target="_blank" class="left">JS</a></td>
            <td><div class="about"><a href="https://www.javascript.com/" target="_blank" class="left">JavaScript (JS) is a lightweight, interpreted, or just-in-time compiled programming language with first-class functions</a></div></td>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
            <td id="cpp">
                <img src="slike/c++logo.png" width="80px">
            </td>
            <td class="border1"><a href="https://www.w3schools.com/cpp/" target="_blank" class="left">C++</a></td>
            <td><div class="about"><a href="https://www.w3schools.com/cpp/" target="_blank" class="left">C++ is a popular programming language. C++ is used to create computer programs</a></div></td>
        </tr>
        <tr><td colspan="3">&nbsp;</td></tr>
        <tr>
            <td id="python">
                <img src="slike/pythonlogo.png" width="70px">
            </td>
            <td class="border2"><a href="https://www.python.org/" target="_blank" class="left">Python</a></td>
            <td><div class="about"><a href="https://www.python.org/" target="_blank" class="left"><b>Python is a programming language that lets you work quickly and integrate systems more effectively</a></div></td>
        </tr>
        </table>
    </main>
    <!--<footer id="name">
    <address id="footer1">&#169; Jan Žunec, <?php echo date('Y', $datum) ?></address>
    </footer>-->
    <?php include('nav.html') ?>
</body>
</html>