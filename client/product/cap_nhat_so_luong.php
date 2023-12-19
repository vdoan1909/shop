<?php
include "../../model/pdo.php";
include "../../model/san_pham_kich_co/san_pham_kich_co.php";
include "../../model/san_pham/san_pham.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //lấy dữ liệu từ ajax
    $id = $_POST['id']; //id giỏ hàng
    $so_luong = $_POST['soluong']; // Corrected variable name
    update_so_luong_gio_hang($id, $so_luong); // Corrected variable name
    die;
} else {
    echo "Yêu cầu không hợp lệ";
}