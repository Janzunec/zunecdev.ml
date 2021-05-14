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
    <title>Ordering system: Step 5</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 120%;
            font-weight: 500;
            padding-left: 10px;
        }
        li:nth-child(5){
            background-color: #405a80;
            color: whitesmoke;
        }
        h1{
            color: #405a80;
        }
        td:nth-child(1){
            text-align: right;
        }
        td:nth-child(2){
            color: #4e70a3;
            font-style: italic;
        }
        input{
            border-radius: 3px;
            border: 1px solid #b0c8eb;
            height: 30px;
            font-size: 100%;
            width: 250px;
        }
        th{
            color: #b0c8eb;
            text-align: left;
            padding-top: 15px;
        }
        #button{
            background-color: #405a80;
            color: whitesmoke;
            height: 50px;
            width: 230px;
            margin-top: 20px;
        }
        #button:hover{
            background-color: #b0c8eb;
        }
    </style>
</head>
<body>
<?php
    $_SESSION ['dostava'] = $_POST['dostava'];
    $email = $_SESSION['email']; 
    $ime = $_SESSION['ime'];
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Instantiation and passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = 1;
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'zunec.jan2@gmail.com';                     //SMTP username
        $mail->Password   = 'zunko2004';                               //SMTP password
        $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
        $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

        //Recipients
        $mail->setFrom('zunec.jan2@gmail.com', 'Jan');

        $mail->addAddress($email, $ime);     //Add a recipient
        
        /*
        
            //Attachments
            $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

        */
        $body = "<p><strong>Hvala za vas nakup!</strong></p><div>Lp, Jan Zunec</div>";
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Narocilo';
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);

        $mail->send();
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
?>
    <h1>5.korak: Povzetek naročila</h1>
    <?php include("Nav.php") ?>
    <table>
    <tr><th colspan="2">1.korak: Prijava</th></tr>
    
        <tr>
            <td>Ime:</td>
            <td><?php echo $_SESSION['ime']; ?></td>
        </tr>
        <tr>
            <td>Priimek:</td>
            <td><?php echo $_SESSION['priimek']; ?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $_SESSION['email'];?></td>
        </tr>
    <tr><th colspan="2">2.korak: Naslov za dostavo</th></tr>
        <tr>
            <td>Naslov:</td>
            <td>
                <?php echo $_SESSION['naslov']; ?>
            </td>
        </tr>
        <tr>
            <td>Mesto:</td>
            <td>
                <?php echo $_SESSION['mesto']; ?>
            </td>
        </tr>
        <tr>
            <td>Poštna številka:</td>
            <td><?php echo $_SESSION['pstevilka']; ?>
            </td>
        </tr>
        <tr>
            <td>Pošta:</td>
            <td>
                <?php echo $_SESSION['posta']; ?>
            </td>
        </tr>
        <tr><th colspan="2">3.korak: Način plačila</th></tr>
        <tr>
            <td>Način:</td>
            <td>
                <?php echo $_SESSION['placilo']; ?>
            </td>
        </tr>
        <tr><th colspan="2">4.korak: Način dostave</th></tr>
        <tr>
            <td>Način:</td>
            <td>
                <?php echo $_SESSION['dostava']; ?>
            </td>
        </tr>
    </table>
        <?php session_destroy() ?>
        <form action="../projects.php">
        <input id="button" type="submit" value="Back">
    </form>
</body>
</html>