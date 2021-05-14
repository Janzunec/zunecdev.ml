<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <!-- Ikona spletišča -->
    <link rel="icon" href="../slike/logo1.png" type="image/x-icon">
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
            color: whitesmoke;
            text-align: center;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            background-image: url('https://media.istockphoto.com/videos/dice-rolling-against-black-background-slow-motion-4k-video-id805012718?s=640x640');
            font-size: 150%;
        }
        table{
            text-align: center;
            align-items: center;
            margin: 0 auto 0 auto;
            background-color: rgba(0,0,0,0.3);
        }
        h1{
            margin: 15px auto 10px auto;
            background-color: rgba(0,0,0,0.5);
            font-size: 180%;
        }
        code{
            text-decoration: underline;
            font-size: 140%;
        }
        span{
            font-size: 160%;
            background-image: linear-gradient(to top, #e22822,  #e24822,  #e27822, #e28822);   -webkit-background-clip: text;
            color: transparent;
        }
        #button{
            width: 230px;
            background-color: #000;
            color: whitesmoke;
            font-size: 110%;
        }
        #input1{
            background-color: #000;
            color: whitesmoke;
            width: 130px;
            font-size: 110%;
        }
        #input2{
            background-color: #000;
            color: whitesmoke;
            width: 128px;
            font-size: 110%;
        }
        #button:hover{
            background-color: #3a3a3a;
        }
        .igralec{
            padding-top: 20px;
            padding-bottom: 0;
        }
        i{
            padding-left: 2px;
            padding-right: 2px;
        }
        #player{
            font-size: 140%;
            color: whitesmoke;
        }
        #back{
            height: 40px;
            width: 250px;
            background-color: #000;
            color: whitesmoke;
            font-size: 110%;
        }
        #back:hover{
            background-color: #3a3a3a;
        }
        footer{
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 80px;
            text-align: center;
        }
        main{
            margin-bottom: 100px;
        }
    </style>
    <title>DICE GAME</title>
</head>
<body>
    <?php error_reporting(0) ;?>    
    <main>
        <h1>DICE GAME &#127922;</h1>
        <table>
            <form action="index.php" method="post">
            <tr>
                <td>
                    Players:&nbsp;<input id="input1" class="stevilo" type="number" name="igralci">
                </td>
            </tr>
            <tr>
                <td>Throws:&nbsp;<input id="input2" class="stevilo" type="number" name="meti"></td>
            </tr>
            <tr>
                <td>
                    <input id="button" type="submit" value="PLAY!">
                </td>
            </tr> 
            </form>
        </table>
        <table>
        <?php
        $igralci=$_POST["igralci"];
        $meti=$_POST["meti"];
        $kocka;
        $vsota=0;
        $min=0;
        $zmagovalec;
        $izenaceno;
        $izenacenec = array();
        $k=0;
        for($i=1;$i<=$igralci;$i++){
            $j=0;
            $vsota=0;
            echo "<tr><td class=\"igralec\"><span id=\"player\">PLAYER ";
            echo $i;
            echo ":</span><br>";
            for($j=0;$j<$meti;$j++){
                $kocka=rand(1,6);
                echo "<span>";
                switch ($kocka){ //Ta del kode bo izpisal sliko kocke glede na nakljucno stevilo
                    case(1): echo "<i class=\"fas fa-dice-one\"></i>"; break;
                    case(2): echo "<i class=\"fas fa-dice-two\"></i>"; break;
                    case(3): echo "<i class=\"fas fa-dice-three\"></i>"; break;
                    case(4): echo "<i class=\"fas fa-dice-four\"></i>"; break;
                    case(5): echo "<i class=\"fas fa-dice-five\"></i>"; break;
                    case(6): echo "<i class=\"fas fa-dice-six\"></i>"; break;
                }
                echo "</span> ";
                $vsota=$vsota+$kocka;
            }
            echo "<br> Player ";
            echo $i;
            echo " has ";
            echo $vsota;
            echo " points!</td></tr>";
            if($vsota>$min){
                $min=$vsota;
                $zmagovalec=$i;
                $izenacenec[0]=$zmagovalec;
                $k=0;
                $izenaceno=false;
                $igra = true;
            } elseif ($vsota==$min){
                $k++;
                $izenaceno=true;
                $izenacenec[$k]=$i;
                
            }
        }
        if ($izenaceno==false && $igra==true){
        echo "<tr><td id=\"winner\"><div>The winner is player <code>";
        echo $zmagovalec;
        echo "</code>, with ";
        echo $min;
        echo " points!</div></tr></td>";
        } elseif ($izenaceno==true){
            echo "<tr><td id=\"winner\><div>Players ";
            while($k>=0){
            echo "<code>";
            echo $izenacenec[$k];
            echo "</code>, ";
            $k--;
            }
            echo "are tied, with  ";
            echo $min;
            echo " points!</div></td></tr>";
        }
        ?>
        </table>
    </main>
    <footer>
        <form action="../projects.php">
            <input id="back" type="submit" value="Back">
        </form>
    </footer>
</body>
</html>