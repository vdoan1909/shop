<?php
ob_start();
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "";

require_once "model/pdo.php";
require_once "model/san_pham/san_pham.php";
require_once "model/san_pham_kich_co/san_pham_kich_co.php";
require_once "model/tai_khoan/tai_khoan.php";

if (isset($_SESSION["tai_khoan"]["id"])) {
    $so_luong_san_pham_gio_hang = so_luong_san_pham_gio_hang($_SESSION["tai_khoan"]["id"]);
    $ds_san_pham_gio_hang = san_pham_gio_hang($_SESSION["tai_khoan"]["id"]);
}

switch ($url) {
        // ========== TRANG CHỦ ========== //
    case "trang_chu":
        $title = "Trang chủ";
        $san_pham_ban_chay = san_pham_ban_chay();
        $san_pham_moi = san_pham_moi();
        $VIEW = "client/product/home.php";
        break;
        // ========== TRANG CHỦ ========== //

        // ========== SẢN PHẨM ========== //
        // Chi tiết sản phẩm
    case "ct_san_pham":
        $title = "Chi tiết sản phẩm";
        $id_tl = isset($_GET["id_tl"]) ? $_GET["id_tl"] : "";
        $id_sp = isset($_GET["id_sp"]) ? $_GET["id_sp"] : "";
        $id_th = isset($_GET["id_th"]) ? $_GET["id_th"] : "";

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $ct_san_pham = ct_san_pham($_GET["id_sp"]);
            $kich_co_san_pham = kich_co_san_pham($_GET["id_sp"]);
            $san_pham_cung_loai = san_pham_cung_loai($id_tl, $id_sp);
            $san_pham_ban_them = san_pham_ban_them($id_th);
        }
        $VIEW = "client/product/chi_tiet_san_pham.php";
        break;

        // Giỏ hàng
    case "them_gio_hang":
        $title = "Giỏ hàng";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);

            $lay_id_san_pham_kich_co = lay_id_san_pham_kich_co($id_sp, $id_kc);
            $san_pham_gio_hang = san_pham_gio_hang($_SESSION["tai_khoan"]["id"]);

            if (count($san_pham_gio_hang) > 0) {
                update_san_pham_kich_co_gio_hang($_SESSION["tai_khoan"]["id"], $lay_id_san_pham_kich_co["id"], $so_luong);
            } else {
                san_pham_kich_co_gio_hang($_SESSION["tai_khoan"]["id"], $lay_id_san_pham_kich_co["id"], $so_luong);
            }
        }
        header("location: index.php?url=gio_hang");
        break;

    case "gio_hang":
        $title = "Giỏ hàng";
        $ds_san_pham_gio_hang = san_pham_gio_hang($_SESSION["tai_khoan"]["id"]);
        $VIEW = "client/product/gio_hang.php";
        break;
        // ========== SẢN PHẨM ========== //

        // ========== TÀI KHOẢN ========== //
    case "tai_khoan":
        $title = "Tài khoản";
        $VIEW = "client/tai_khoan/tai_khoan.php";
        break;

        // Đăng ký
    case "dang_ky":
        $title = "Đăng ký";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);

            $ds_email = all_email_tai_khoan();
            $is_email = '/^\\S+@\\S+\\.\\S+$/';
            $errors = [];

            if (empty(trim($email))) {
                $errors["email"] = "Email chưa được nhập !";
            } else {
                if (!preg_match($is_email, $email)) {
                    $errors["email"] = "Email không hợp lệ ?";
                } else {
                    foreach ($ds_email as $email_da_dung) {
                        if ($email == $email_da_dung["email"]) {
                            $errors["email"] = "Email đã được sử dụng !";
                        }
                    }
                }
            }

            if (empty(trim($mat_khau))) {
                $errors["mat_khau"] = "Chưa đặt mật khẩu !";
            }

            if (empty($errors)) {
                add_tai_khoan($email, $mat_khau);
                $success = "Đăng ký thành công <33";
            }
        }
        $VIEW = "client/tai_khoan/tai_khoan.php";
        break;

        // Đăng nhập
    case "dang_nhap":
        $title = "Đăng nhập";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);

            $ds_email = all_email_tai_khoan();
            $is_email = '/^\\S+@\\S+\\.\\S+$/';
            $errors = [];
            $email_flag = false;

            if (empty(trim($email))) {
                $errors["email_dang_nhap"] = "Email chưa được nhập !";
            } else {
                if (!preg_match($is_email, $email)) {
                    $errors["email_dang_nhap"] = "Email không hợp lệ ?";
                } else {
                    foreach ($ds_email as $email_da_dung) {
                        if ($email == $email_da_dung["email"]) {
                            $email_flag = true;
                            break;
                        }
                    }
                }
            }

            if (!$email_flag) {
                $errors["email_dang_nhap"] = "Email không tồn tại !";
            }

            if (empty(trim($mat_khau))) {
                $errors["mat_khau_dang_nhap"] = "Chưa nhập mật khẩu !";
            }

            if (empty($errors)) {
                $tai_khoan = all_tai_khoan($email);
                if ($tai_khoan["role"] == 1) {
                    $_SESSION["admin"] = $tai_khoan;
                    header("location: index.php?url=admin");
                } else {
                    $_SESSION["tai_khoan"] = $tai_khoan;
                    header("location: index.php?url=trang_chu");
                }
            }
        }
        $VIEW = "client/tai_khoan/tai_khoan.php";
        break;

        // Cập nhật tài khoản
    case "cap_nhat_tai_khoan":
        $title = "Cập nhật tài khoản";
        $thong_tin_tai_khoan = thong_tin_tai_khoan($_SESSION["tai_khoan"]["id"]);

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);
            extract($_FILES);
            $dir = "assets/upload/";

            $ds_email = all_email_tai_khoan();
            $is_email = '/^\\S+@\\S+\\.\\S+$/';
            $errors = [];

            if (!empty($_FILES['anh']['name'])) {
                $nameimg = $_FILES['anh']['name'];
                $base_name = basename($nameimg);
                $updateimg = $dir . $base_name;
                move_uploaded_file($_FILES['anh']['tmp_name'], $updateimg);
            } else {
                $updateimg = "";
                $base_name = "";
            }

            if (empty(trim($ten))) {
                $errors["ten"] = "Chưa nhập tên !";
            }

            if (empty(trim($email))) {
                $errors["email"] = "Email chưa được nhập !";
            } else {
                if (!preg_match($is_email, $email)) {
                    $errors["email"] = "Email không hợp lệ ?";
                }
            }

            if (empty(trim($dia_chi))) {
                $errors["dia_chi"] = "Chưa nhập địa chỉ !";
            }

            if (empty($errors)) {
                cap_nhat_tai_khoan($_SESSION["tai_khoan"]["id"], $base_name, $ten, $email, $dia_chi);
                $tai_khoan = all_tai_khoan($email);
                if ($tai_khoan["role"] == 1) {
                    $_SESSION["admin"] = $tai_khoan;
                    header("location: index.php?url=admin");
                } else {
                    $_SESSION["tai_khoan"] = $tai_khoan;
                    header("location: index.php?url=trang_chu");
                }
                $success = "Cập nhật tài khoản thành công !";
            }
        }
        $VIEW = "client/tai_khoan/cap_nhat_tai_khoan.php";
        break;

        // Quên mật khẩu
    case "quen_mat_khau":
        $title = "Quên mật khẩu";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);

            $ds_email = all_email_tai_khoan();
            $is_email = '/^\\S+@\\S+\\.\\S+$/';
            $errors = [];
            $email_flag = false;

            if (empty(trim($email))) {
                $errors["email"] = "Email chưa được nhập !";
            } else {
                if (!preg_match($is_email, $email)) {
                    $errors["email"] = "Email không hợp lệ ?";
                } else {
                    foreach ($ds_email as $email_da_dung) {
                        if ($email == $email_da_dung["email"]) {
                            $email_flag = true;
                        }
                    }
                }
            }

            if (isset($email_flag) && !$email_flag) {
                $errors["email"] = "Email không tồn tại !";
            }

            if (empty($errors)) {
                require_once "assets/PHPMailer/mat_khau.php";
                echo "<script>
                alert('Mật khẩu đã gửi về email !')
                </script>";
            }
        }
        $VIEW = "client/tai_khoan/quen_mat_khau.php";
        break;

    case "dang_xuat":
        dang_xuat();
        header("location: index.php?url=trang_chu");
        break;

    case "admin":
        header("location: admin/index.php");
        break;
        // ========== TÀI KHOẢN ========== //
    default:
        $title = "Trang chủ";
        $san_pham_ban_chay = san_pham_ban_chay();
        $san_pham_moi = san_pham_moi();
        $VIEW = "client/product/home.php";
        break;
}

require_once "client/layout/header.php";
require_once $VIEW;
require_once "client/layout/footer.php";
ob_end_flush();
