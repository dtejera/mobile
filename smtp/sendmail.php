 <?php
error_reporting(E_ALL); 
ini_set( 'display_errors','1');

include("class.phpmailer.php");
include("class.smtp.php");

print ($_POST['email']);
print ($_POST['name']);
print ($_POST['message']);

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = "ssl";
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->Username = "contacto@cfreiburghaus.com";
$mail->Password = "cynthia123456";

		
$mail->From = $_POST['email'];
$mail->FromName = $_POST['name'];
$mail->Subject = "Sushi Express: Mensaje de usuario";
//$mail->AltBody = "Hola, te doy mi nuevo numero\nxxxx.";
$mail->MsgHTML($_POST['message']);
//$mail->AddAttachment("files/files.zip");
//$mail->AddAttachment("files/img03.jpg");
$mail->AddAddress("juan.barba.o@gmail.com", "Juan Barba");
$mail->IsHTML(true);

$mail->Send();
  

echo "gracias";
 
?>