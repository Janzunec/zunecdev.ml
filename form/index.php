<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="19.1vaje.css" />
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
    <title>Form</title>
</head>
<body>
    <?php 
    $ime = $email = $spol = $opomba = $priimek = $ulica = $hstevilka = $crka = $kraj = $pstevilka = $obcina = $emso = $telefon = "";
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    /*Funkcija za preverjanje telefonske stevilke ali je veljavna ali ne
    function validate_phone_number($phone){
     // Allow +, - and . in phone number
     $filtered_phone_number = filter_var($phone, FILTER_SANITIZE_NUMBER_INT);
     // Remove "-" from number
     $phone_to_check = str_replace("-", "", $filtered_phone_number);

     // Check the lenght of number
     // This can be customized if you want phone number from a specific country
     if (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 14) {
        return false;
     } else {
       return true;
     }
    }*/
    ?>
    <h1>Contact form</h1>
        <table>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <tr>
            <th colspan="3" class="crta">Prosimo, izpolnite spodnji obrazec: <div>Polja z <span>*</span> morajo biti izpolnjena</div></th>
        </tr>
        <tr>
            <td>Spol <span>*</span><div>Označi svoj spol</div></td>
            <td id="spol" colspan="2"><input class="spol" type="radio" name="spol" value="Moški">Moški  <input class="spol" type="radio" name="spol" value="Ženski">Ženski
            <span><?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["spol"])) {
                    $spolErr = "&nbsp; Izbira spola je zahtevana!";
                    echo $spolErr;
                } } ?> </span>
        </td>
        </tr>
        <tr>
            <td>
                Ime <span>*</span>
                <div>Vpiši svoje ime</div>
            </td>
            <td>
                <input type="textbox" name="ime">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["ime"])) {
                    $imeErr = "Ime je zahtevano!";
                    echo "<span>" . $imeErr . "</span>";
                } else {$ime = test_input($_POST["ime"]);
                } if (!preg_match("/^[a-zA-Z-' ]*$/",$ime)) {
                    $imeErr = "Dovoljene so le črke in presledki!";
                    echo "<span>" . $imeErr . "</span>";
                } } ?>  
            </td>
        </tr>
        <tr>
            <td>
                Priimek <span>*</span>
                <div>Vpiši svoj priimek</div>
            </td>    
            <td>
                <input type="textbox" name="priimek">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["priimek"])) {
                    $priimekErr = "Priimek je zahtevan!";
                    echo "<span>" . $priimekErr . "</span>";
                } else {$priimek = test_input($_POST["priimek"]);
                } if (!preg_match("/^[a-zA-Z-' ]*$/",$priimek)) {
                    $priimekErr = "Dovoljene so le črke in presledki!";
                    echo "<span>" . $priimekErr . "</span>";
                } } ?>  
            </td>
        </tr>
        <tr>
            <th colspan="3" class="crta">Naslov</th>
        </tr>
        <tr>
            <td>
                Ulica<div>Vpiši ulico kraja bivanja</div>
            </td>
            <td>
                <input type="textbox" name="ulica">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["ulica"])) {
                } else {$ulica = test_input($_POST["ulica"]);
                } if (!preg_match("/^[a-zA-Z-' ]*$/",$ulica)) {
                    $ulicaErr = "Dovoljene so le črke in presledki!";
                    echo "<span>" . $ulicaErr . "</span>";
                } } ?>  
            </td>
        </tr>
        <tr>
            <td>
                Hišna številka<div>Vpiši hišno številko in črko</div>
            </td>
            <td>
                <input id="hstevilka" type="number" name="hstevilka">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["hstevilka"])) {
                } else {$hstevilka = test_input($_POST["hstevilka"]);
                 if (strlen($hstevilka) !=3 && strlen($hstevilka) !=2 && strlen($hstevilka) !=1 || $hstevilka<0) {
                    $hstevilkaErr = "Dovoljeno je le 1-3 mestno število!";
                    echo "<span>" . $hstevilkaErr . "</span>";
                } } }?>
                <input id="crka" type="textbox" name="crka">
                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (empty($_POST["crka"])) {
                    } else {$crka = test_input($_POST["crka"]);
                    } if (!preg_match("/^[a-zA-Z]*$/",$crka)) {
                        $crkaErr = "Dovoljene so le črke!";
                        echo "<span>" . $crkaErr . "</span>";
                    } } ?>
                </td>
        </tr>
        <tr>
            <td>
                Kraj<div>Vpiši kraj bivanja</div>
            </td>
            <td>
                <input type="textbox" name="kraj">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["kraj"])) {
                } else {$kraj = test_input($_POST["kraj"]);
                } if (!preg_match("/^[a-zA-Z-' ]*$/",$kraj)) {
                    $krajErr = "Dovoljene so le črke in presledki!";
                    echo "<span>" . $krajErr . "</span>";
                } } ?> 
            </td>
        </tr>
        <tr>
            <td>
                Poštna številka<div>Vpiši 4 mestno poštno številko</div>
            </td>
            <td>
                <input type="number" name="pstevilka">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["pstevilka"])) {
                } else {$pstevilka = test_input($_POST["pstevilka"]);
                 if (strlen($pstevilka) != 4) {
                    $pstevilkaErr = "Dovoljeno je le 4 mestno število!";
                    echo "<span>" . $pstevilkaErr . "</span>";
                } } }?>  
            </td>
        </tr>
        <tr>
            <td>
                Občina<div>Vpiši občino bivanja</div>
            </td>
            <td>
                <input type="textbox" name="obcina">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["obcina"])) {
                } else {$obcina = test_input($_POST["obcina"]);
                } if (!preg_match("/^[a-zA-Z-' ]*$/",$obcina)) {
                    $obcinaErr = "Dovoljene so le črke in presledki!";
                    echo "<span>" . $obcinaErr . "</span>";
                } } ?>  
            </td>
        </tr>
        <tr>
            <th colspan="3" class="crta">Osebni podatki</th>
        </tr>
        <tr>
            <td>
                EMŠO<div>Vpiši 13 mestno matično številko</div>
            </td>
            <td>
                <input type="number" name="emso">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["emso"])) {
                } else {$emso = test_input($_POST["emso"]);
                 if (strlen($emso) != 13) {
                    $emsoErr = "Dovoljeno je le 13 mestno število!";
                    echo "<span>" . $emsoErr . "</span>";
                } } }?>  
            </td>
        </tr>
        <tr>
            <td>
                Email <span>*</span>
                <div>Vpiši veljaven poštni naslov</div>
            </td>
            <td>
                <input type="textbox" name="email">
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["email"])) {
                $emailErr = "Email je zahtevan!";
                echo "<span>" . $emailErr . "</span>";
            } else {$email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Neveljaven Email naslov!";
                echo "<span>" . $emailErr . "</span>";
            } } }?>
            </td>
        </tr>
        <tr>
            <td>
                Telefon<div>Vpiši telefonsko številko</div>
            </td>
            <td>
                <input type="text" name="telefon">
                <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["telefon"])) {
                } else {$telefon = test_input($_POST["telefon"]);
                 if (!preg_match("/^[0-9 ]*$/",$telefon)) {
                    $telefonErr = "Dovoljene so le števke in presledki!";
                    echo "<span>" . $telefonErr . "</span>";
                } } }?>  
            </td>
        </tr>
        <tr>
            <td>
                Opomba<div>Vnesi opombo</div>
            </td>
            <td>
                <textarea name="opomba" rows="5" cols="30" maxlength="100"></textarea>
            </td>
        </tr>        
        <tr>
            <td></td>
            <td><input class="button" type="submit" value="Pošlji"><input class="button" type="reset" value="Počisti"></td>
        </tr> 
        </form>
        </table>
        <h3>Vneseni podatki:</h3>
        <ul>
            <li>Spol: <?php echo $spol; ?> </li>
            <li>Ime: <?php echo $ime; ?></li>
            <li>Priimek: <?php echo $priimek; ?></li>
            <li>Ulica: <?php echo $ulica; ?></li>
            <li>Hišna številka: <?php echo $crka . $hstevilka; ?></li>
            <li>Kraj: <?php echo $kraj; ?></li>
            <li>Poštna številka: <?php echo $pstevilka; ?></li>
            <li>Občina: <?php echo $obcina; ?></li>
            <li>EMŠO: <?php echo $emso; ?></li>
            <li>Email: <?php echo $email; ?></li>
            <li>Telefon: <?php echo $telefon; ?></li>
            <li>Opomba: <?php echo $opomba; ?></li>
        </ul>
</body>
</html>