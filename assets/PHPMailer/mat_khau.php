<?php
include('src/PHPMailer.php');
include('src/Exception.php');
include('src/OAuth.php');
include('src/POP3.php');
include('src/SMTP.php');
require_once "model/tai_khoan/tai_khoan.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$arr_mat_khau = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0];
$thong_tin_tai_khoan = all_tai_khoan($email);
$email = $thong_tin_tai_khoan["email"];
$mat_khau_rand = array_rand($arr_mat_khau, 4);
$mat_khau_moi = [];

foreach ($mat_khau_rand as $key) {
    $mat_khau_moi[] = $arr_mat_khau[$key];
}

$mat_khau_moi = implode('', $mat_khau_moi);

$mail = new PHPMailer(true);
try {

    $mail->SMTPDebug = 0;
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
    $mail->Subject = 'Lay lai mat khau';
    $mail->Body = 'Mật khẩu của bạn là: ' . $mat_khau_moi;
    quen_mat_khau($thong_tin_tai_khoan["id"], $mat_khau_moi);


    $mail->send();
    // echo 'Message has been sent';
} catch (Exception $e) {
    // echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}
