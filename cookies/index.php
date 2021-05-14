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
            height: 40px;
            background-color: #405a80;;
            color: white;
            margin: 10px 0 0 50px;
        }
        input:hover{
            background-color: skyblue;
        }
    </style>
    <title>Cookies</title>
</head>
<body>
    <h1>Prijava s pomočjo piškotkov</h1>
    <p>Za prijavo uporabljamo piškotke</p>
    <div>Prijava omogoča, da se piškotki zapomnijo uporabniško ime in geslo za obdobje 1 leto. Če potrditveno polje ni potrjeno, veljavnost piškotkov poteče ob zaprtju brskalnika.</div>
    <?php
    if (count($_COOKIE)>0){
        echo "<form action=\"22vaja-obrazec-PHP-Žunec-Jan.php\"><input type=\"submit\" value=\"Pojdi na prijavo\"></form>";
    } else {
        echo "<form action=\"22vaja-prijava-PHP-Žunec-Jan.php\"><input type=\"submit\" value=\"Pojdi na prijavo\"></form>";
    }

    ?>
</body>
</html>