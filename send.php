<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
function sendEmail($recipient){
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;// Enable verbose debug output
    $mail->isSMTP();// gửi mail SMTP
    $mail->Host = 'smtp.gmail.com';// Set the SMTP server to send through
    $mail->SMTPAuth = true;// Enable SMTP authentication
    $mail->Username = 'phamthihongthang201@gmail.com';// SMTP username
    $mail->Password = 'ubyuvxpueaoionjk'; // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;// Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port = 587; // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('phamthihongthang201@gmail.com', '57.Phạm Thị Hồng Thắng.1951061017');

    $mail->addReplyTo('phamthihongthang201@gmail.com', 'Văn phòng Khoa CNTT - Trường ĐH Thủy lợi');
      
    $mail->addAddress('$recipient'); // Add a recipient
    
    // Attachments
    // $mail->addAttachment('pdf/XTT/'.$data[11].'.pdf', $data[11].'_1.pdf'); // Add attachments
    //$mail->addAttachment('pdf/Giay_bao_mat_sau.pdf', $data[11].'_2.pdf'); // Optional name

    // Content
    $mail->isHTML(true);   // Set email format to HTML
    //$tieude = '[kkk] ';
    $mail->Subject = '[localhost] Kích hoạt tài khoản';
    
    // Mail body content 
    $bodyContent = '<p>Kính gửi: Thầy Dũng </p>';
    $bodyContent .= '<p>Em tên là Phạm Thị Hồng Thắng </p>';
    $bodyContent .= '<p>Xin phép thầy cho em điểm danh</p>'; 
    
    $mail->Body = $bodyContent;
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    if($mail->send()){
        echo 'Thư đã được gửi đi';
    }else{
        echo 'Lỗi không gửi được thư';
    }
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

?>
âaâAhắAnAAgAAaâaaaaaaaaqwr