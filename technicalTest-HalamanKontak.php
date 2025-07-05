 <?php
$name = $_POST["userName"];
$jurusan = $_POST["usernameJurusan"];
$email = $_POST["usernameEmail"];
$subject = $_POST["usernameSubject"];
$message = $_POST["usernameMessage"];

require 'vendor/autoload.php';



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;



$mail = new PHPMailer(true);

// $mail-> SMTPDebug = SMTP::DEBUG_SERVER;

$mail->isSMTP();
$mail->SMTPAuth = true;

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = phpmailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "nadzif.hasan3work@gmail.com";
$mail->Password = "tqlo ntbs qljr qihi";

$mail->setFrom($email, $name);
$mail->addAddress("nadzif.hasan3work@gmail.com", "nadzif");

$mail->isHTML(true); 
$mail->Subject = $subject;
$mail->Body = 
    "Pesan dari Form Kontak MBC:\n\n" .
    "Nama     : $name\n\r" .
    "Jurusan  : $jurusan\n\r" .
    "Email    : $email\n\n\r" .
    "Pesan:\n$message";;

$mail->send();

echo "email";

?>



