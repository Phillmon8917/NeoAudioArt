<?php

if(isset($_POST["submit"]))
{
   

$msg =  $_POST['message'];
$subject = "";
$name =  $_POST['name'];
$email =  $_POST['email'];

$checkbox1 = $_POST['checkbox1'];
$checkbox2 = $_POST['checkbox2'];
$checkbox3 = $_POST['checkbox3'];
$checkbox4 = $_POST['checkbox4'];
$checkbox5 = $_POST['checkbox5'];

if(!empty($checkbox1))
{
    $subject .=$checkbox1;
}

if(!empty($checkbox2))
{
    $subject .=$checkbox2;
}

if(!empty($checkbox3))
{
    $subject .=$checkbox3;
}

if(!empty($checkbox4))
{
    $subject .=$checkbox4;
}

if(!empty($checkbox5))
{
    $subject .=$checkbox5;
}


$headers = "Content-type:text/html;charset=UTF-8" . "\r\n";
$header = "From: info@tjtlaw.co.za \r\n";
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";



$bodymsg1 = "
<html>
<head>
<title>Booking Notification</title>
</head>
<body>
<p>Good day Jack Tsoai<br><br></p>
<p>Please note that ".$name." has sent you a message :  '$subject'.</p><br><br><br>
<p>Their email : ".$email." </p>
<p>Their Message: ".$msg." </p>
</body>
</html>
";

// More headers

// use wordwrap() if lines are longer than 70 characters

// send email
if(mail("admin@tjtlaw.co.za",$subject,$bodymsg1,$headers))
{
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
    echo '</script>';

echo "<script type='text/javascript'>
    window.location = 'index.html';
    </script>";

}


}






?>