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
    <!-- Ikona spletišča -->
    <link rel="icon" href="../slike/logo1.png" type="image/x-icon">
    <style>
        html {
            height: 100%;
        }
        body {
            background-image: linear-gradient(340deg , #c200ae, #c200ae, #135fab,black, black ,black) !important;
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            background-size: 120%;
            color: white;
            font-size: 210%;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        @keyframes fadeIn {
        from {
        opacity: 0;
        transform: rotateX(-10deg);
        }
        to {
        opacity: 1;
        transform: rotateX(0);
        }
        }
        main{
            animation: fadeIn 1s;
        }
        table{
            border: 2px solid whitesmoke;
            margin: 0 auto 0 auto;
        }
        input{
            background-color: transparent;
            color: whitesmoke;
        }
        #button{
            font-size: 40px;
            width: 362px;
            height: 50px;
            background-color: rgba(70, 70, 70, 0.4);
        }
        #button:hover{
            background: #4a4a4a;
        }
        #button2{
            width: 358px;
            height: 40px;
            font-size: 30px;
            text-align: center;
            margin: 10px auto 0 auto;
            background-color: rgba(70, 70, 70, 0.4);
        }
        #button2:hover{
            background: #4a4a4a;
        }
        .stevilo{
            width: 119px;
            height: 35px;
            font-size: 80%;
        }
        h1{
            font-size: 230%;
            margin-top: 0;
            margin-bottom: 2px;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }
        .td{
            border-bottom: solid 1px;
        }
        div{
            display: inline-block;
            width: 75px;
            text-align: center;
        }
        .checkbox{
            height: 28px;
            width: 28px;
        }
        footer{
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            height: 70px;
        }
    </style>
    <title>Calculator</title>
</head>
<body>
    <?php error_reporting(0) ;?>
    <main>
        <h1>Calculator</h1>
            <form action="index.php" method="post">
            <table>
            <tr>
                <td class="td">
                    Enter a number:<input class="stevilo" type="number" step="0.00001" name="st1">
                </td>
            </tr>
            <tr>
                <td class="td">
                <div>&#65291;<input class="checkbox" type="checkbox" name="operator[]" value="+"></div>
                <div>&#xFE63;<input class="checkbox" type="checkbox" name="operator[]" value="-"></div>
                <div>&#215;<input class="checkbox" type="checkbox" name="operator[]" value="*"></div>
                <div>&#247;<input class="checkbox" type="checkbox" name="operator[]" value="/"></div>
                </td>
            </tr>
            <tr>    
                <td class="td">
                Enter a number:<input class="stevilo" type="number" step="0.00001" name="st2">
                </td>
            </tr>        
            <tr><td class="td"><input id="button" type="submit" value="="></td></tr> 
        
            </form>
            <tr>
                <td>
                    <?php 
                    function sestevek($st1, $st2){
                    return $st1 + $st2; }
                    function razlika($st1, $st2){
                        return $st1 - $st2; }
                    function zmnozek($st1, $st2){
                        return $st1 * $st2; }
                    function kolicnik($st1, $st2){
                        return $st1 / $st2; }
                    $operator=$_POST["operator"];
                    if ($operator[0]=="+"){
                        echo "Sum: ";
                        echo sestevek($_POST["st1"], $_POST["st2"]);
                        echo "<br>";
                    }
                    if ($operator[0]=="-" || $operator[1]=="-"){
                        echo "Sub: ";
                        echo razlika($_POST["st1"], $_POST["st2"]);
                        echo "<br>";
                    }
                    if($operator[0]=="*" || $operator[1]=="*"){
                        echo "Mul: ";
                        echo zmnozek($_POST["st1"], $_POST["st2"]);
                        echo "<br>";
                    } elseif ($operator[2]=="*"){
                        echo "Mul: ";
                        echo zmnozek($_POST["st1"], $_POST["st2"]);
                        echo "<br>";
                    }
                    if($operator[0]=="/" || $operator[1]=="/"){
                        echo "Div: ";
                        echo kolicnik($_POST["st1"], $_POST["st2"]);
                        echo "<br>";
                    } elseif ($operator[2]=="/" || $operator[3]=="/"){
                        echo "Div: ";
                        echo kolicnik($_POST["st1"], $_POST["st2"]);
                        echo "<br>";
                    }
                    ?>
                </td>
            </tr>
            </table>
    </main>
        <footer>
            <form action="../projects.php">
                <input id="button2" type="submit" value="Back">
            </form>
        </footer>
</body>
</html>