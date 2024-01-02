<?php
include('src/PHPMailer.php');
include('src/Exception.php');
include('src/OAuth.php');
include('src/POP3.php');
include('src/SMTP.php');
require_once "model/tai_khoan/tai_khoan.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$thong_tin_tai_khoan = all_tai_khoan_email($email_kh);
$email = $thong_tin_tai_khoan["email"];

$mail = new PHPMailer(true);
try {

    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'openaivdoan@gmail.com';
    $mail->Password = 'xepkbhygqjrgucug';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    $mail->setFrom('openaivdoan@gmail.com', 'DoandepTrai');
    $mail->addAddress($email, 'Doan');

    $mail->isHTML(true);
    $mail->Subject = 'Thanh toan hoa don';
    $mail->Body = 'Chân thành cảm ơn bạn đã chọn *Doan* để làm đẹp cho bản thân! Chúng tôi rất vui mừng được phục vụ và hy vọng rằng sản phẩm bạn chọn sẽ mang lại sự thoải mái và phong cách. Chúc bạn luôn tỏa sáng và hạnh phúc mỗi ngày. Hãy tiếp tục là chính mình và đừng quên ghé thăm cửa hàng của chúng tôi thường xuyên!';

    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
