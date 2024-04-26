<?php
ob_start();
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "";

require_once "model/pdo.php";
require_once "model/the_loai/the_loai.php";
require_once "model/san_pham/san_pham.php";
require_once "model/san_pham_kich_co/san_pham_kich_co.php";
require_once "model/tai_khoan/tai_khoan.php";
require_once "model/phuong_thuc_thanh_toan/phuong_thuc_thanh_toan.php";
require_once "model/don_hang/don_hang.php";

if (isset($_SESSION["tai_khoan"]["id"])) {
    $so_luong_san_pham_gio_hang = so_luong_san_pham_gio_hang($_SESSION["tai_khoan"]["id"]);
    $ds_san_pham_gio_hang = san_pham_gio_hang($_SESSION["tai_khoan"]["id"]);
}

$ds_the_loai = all_the_loai();

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
        // Danh sách sản phẩm
    case "ds_san_pham":
        $title = "Danh sách sản phẩm";
        $kyw = isset($_GET["ten_san_pham"]) ? $_GET["ten_san_pham"] : "";
        $id_tl = isset($_GET["the_loai"]) ? $_GET["the_loai"] : 0;
        $ds_san_pham = all_san_pham_view($kyw, $id_tl);
        $VIEW = "client/product/danh_sach_san_pham.php";
        break;

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
            $binh_luann = so_luong_binh_luan($_GET["id_sp_kc"]);
            $ds_bl = danh_sach_binh_luan($_GET["id_sp_kc"]);
        }

        $VIEW = "client/product/chi_tiet_san_pham.php";
        break;

    case "binh_luan":
        if (isset($_POST["cmt"]) && $_POST["cmt"] != "") {
            if (isset($_SESSION["tai_khoan"])) {
                binh_luan($_SESSION["tai_khoan"]["id"], $_POST["id_sp_kc"], $_POST["cmt"]);
            }
        }
        $redirect_url = "index.php?url=ct_san_pham&id_sp=" . $_POST['id_sp'] . "&id_tl=" . $_POST['id_tl'] . "&id_th=" . $_POST['id_th'] . "&id_sp_kc=" . $_POST['id_sp_kc'];
        header("Location: $redirect_url");
        exit;
        break;

        // Giỏ hàng
    case "them_gio_hang":
        $title = "Giỏ hàng";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);

            if (empty($so_luong)) {
                echo "<script>alert('Vui lòng chọn số lượng sản phẩm')</script>";
                $ct_san_pham = ct_san_pham($id_sp);
                $kich_co_san_pham = kich_co_san_pham($id_sp);
                $san_pham_cung_loai = san_pham_cung_loai($id_tl, $id_sp);
                $san_pham_ban_them = san_pham_ban_them($id_th);
                $VIEW = "client/product/chi_tiet_san_pham.php";
            }

            if (empty($id_kc)) {
                echo "<script>alert('Vui lòng kích cỡ phù hợp với bản thân')</script>";
                $ct_san_pham = ct_san_pham($id_sp);
                $kich_co_san_pham = kich_co_san_pham($id_sp);
                $san_pham_cung_loai = san_pham_cung_loai($id_tl, $id_sp);
                $san_pham_ban_them = san_pham_ban_them($id_th);
                $VIEW = "client/product/chi_tiet_san_pham.php";
            } else {
                $lay_id_san_pham_kich_co = lay_id_san_pham_kich_co($id_sp, $id_kc);
                $check_san_pham_gio_hang = check_san_pham_gio_hang($_SESSION["tai_khoan"]["id"], $lay_id_san_pham_kich_co["id"]);
            }

            if (!empty($_SESSION["tai_khoan"]["id"]) && !empty($lay_id_san_pham_kich_co["id"]) && !empty($so_luong)) {
                san_pham_kich_co_gio_hang($_SESSION["tai_khoan"]["id"], $lay_id_san_pham_kich_co["id"], $so_luong);
                if (!isset($_SESSION["gio_hang"])) {
                    $_SESSION["gio_hang"] = array();
                }

                $san_pham = array(
                    "id_kh" => $_SESSION["tai_khoan"]["id"],
                    "id_sp_kc" => $lay_id_san_pham_kich_co["id"],
                    "so_luong" => $so_luong
                );
                header("location: index.php?url=gio_hang");
            }
        }
        break;

    case "gio_hang":
        $title = "Giỏ hàng";
        if (isset($_SESSION["tai_khoan"]["id"])) {
            $ds_san_pham_gio_hang = san_pham_gio_hang($_SESSION["tai_khoan"]["id"]);
        }
        $ds_san_pham_ban_them = san_pham_ban_them_gio_hang();
        $VIEW = "client/product/gio_hang.php";
        break;

    case "xoa_gio_hang":
        $id_gh = isset($_GET["id_gh"]) ? $_GET["id_gh"] : "";
        $xoa_gh = xoa_gio_hang($id_gh);
        header("location: index.php?url=gio_hang");
        // ========== SẢN PHẨM ========== //

        // ========== THANH TOÁN ========== //
    case "thanh_toan":
        $title = "Thanh toán";

        $all_phuong_thuc_thanh_toan = all_phuong_thuc_thanh_toan();
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_kh = $_POST["id_kh"];
            $tong_gia_gio_hang = $_POST["tong_gia_gio_hang"];
            $tong_sl_sp = $_POST["tong_sl_sp"];

            if (isset($_POST["id_sp_kc"]) && is_array($_POST["id_sp_kc"])) {
                $id_sp_kc = $_POST["id_sp_kc"];
            }

            // var_dump($id_sp_kc);
        }
        $VIEW = "assets/vnpay_php/index.php";
        break;

    case "tien_hanh_thanh_toan":
        $title = "Thanh toán";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            extract($_POST);

            $thong_tin_tai_khoan = thong_tin_tai_khoan($id_kh);
            $email_kh = $thong_tin_tai_khoan["email"];

            // var_dump($id_sp_kc);
            if (!is_array($id_sp_kc)) {
                $id_sp_kc = explode(",", $id_sp_kc);
            }
            $id_sp_kc_string = implode(",", $id_sp_kc);
            // var_dump($id_sp_kc_string);

            if ($pttt == 1) {
                $id_don_hang = add_don_hang($id_kh, $ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dc_nguoi_nhan, $ghi_chu, $pttt, $amount, 0);
                add_don_hang_chi_tiet($id_don_hang, $id_sp_kc_string, $so_luong_san_pham, $amount);
                xoa_gio_hang_kh($_SESSION["tai_khoan"]["id"]);
                require_once "assets/PHPMailer/sendmail.php";
                $_SESSION["successPay"] = $id_don_hang;
                header("location: index.php?url=trang_chu");
                exit();
            } else {
                $id_don_hang = add_don_hang($id_kh, $ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dc_nguoi_nhan, $ghi_chu, $pttt, $amount, $amount);
                add_don_hang_chi_tiet($id_don_hang, $id_sp_kc_string, $so_luong_san_pham, $amount);
                xoa_gio_hang_kh($_SESSION["tai_khoan"]["id"]);
                require_once "assets/PHPMailer/sendmail.php";
                $_SESSION["successPay"] = $id_don_hang;
                $VIEW = "assets/vnpay_php/vnpay_create_payment.php";
            }
        }
        break;
        // ========== THANH TOÁN ========== //

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
            $is_password = '/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/';
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
            } else {
                if (!preg_match($is_password, $mat_khau)) {
                    $errors["mat_khau"] = "Mật khẩu quá yếu, cần có ít nhất 8 ký tự, 1 chữ hoa và 1 chữ thường và 1 ký tự đặc biệt!";
                }
            }

            $hashed_password = password_hash($mat_khau, PASSWORD_DEFAULT);

            if (empty($errors)) {
                add_tai_khoan($email, $hashed_password);
                $success = "Đăng ký thành công !";
            }
        }
        $VIEW = "client/tai_khoan/tai_khoan.php";
        break;

        // Đăng nhập
    case "dang_nhap":
        $title = "Đăng nhập";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST['email'];
            $mat_khau = $_POST['mat_khau'];

            $tai_khoan = all_tai_khoan($email, password_verify($mat_khau, $tai_khoan['mat_khau']));

            $is_email = '/^\\S+@\\S+\\.\\S+$/';
            $errors = [];

            if (empty(trim($email))) {
                $errors["email_dang_nhap"] = "Email đang trống !";
            } else {
                if (!preg_match($is_email, $email)) {
                    $errors["email_dang_nhap"] = "Email không đúng định dạng !";
                }
            }

            if (empty(trim($mat_khau))) {
                $errors["mat_khau_dang_nhap"] = "Chưa nhập mật khẩu !";
            }

            if (empty($errors)) {
                if ($tai_khoan) {
                    $_SESSION["tai_khoan"] = $tai_khoan;
                    if ($tai_khoan["role"] == 1) {
                        header("location: index.php?url=admin");
                    } else {
                        header("location: index.php?url=trang_chu");
                    }
                } else {
                    $errors["dang_nhap"] = "Không tồn tại email hoặc sai mật khẩu";
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
                $tai_khoan = all_tai_khoan($email, $mat_khau);
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
