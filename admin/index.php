<?php
ob_start();
session_start();

if ($_SESSION["tai_khoan"]["role"] !=  1) {
    header("location: ../index.php");
}

$url = isset($_GET['url']) ? $_GET['url'] : "";

require_once "../model/pdo.php";
require_once "../model/the_loai/the_loai.php";
require_once "../model/thuong_hieu/thuong_hieu.php";
require_once "../model/san_pham/san_pham.php";
require_once "../model/kich_co/kich_co.php";
require_once "../model/san_pham_kich_co/san_pham_kich_co.php";
require_once "../model/trang_thai_don_hang/trang_thai_don_hang.php";
require_once "../model/phuong_thuc_thanh_toan/phuong_thuc_thanh_toan.php";
require_once "../model/don_hang/don_hang.php";
require_once "../model/quan_tri/quan_tri.php";
require_once "../model/tai_khoan/tai_khoan.php";
require_once "../model/thong_ke/thong_ke.php";

$thong_tin_quan_tri = quan_tri($_SESSION["tai_khoan"]["id"]);

switch ($url) {
    case 'trang_chu':
        $title = "Trang chủ";
        $tong_so_luong_san_pham_dang_co = tong_so_luong_san_pham_dang_co();
        $tong_so_khach_hang = tong_so_khach_hang();
        $sap_het_hang = sap_het_hang();
        $tong_don_hang = tong_don_hang();
        $thong_ke_thai_khoan_moi = thong_ke_thai_khoan_moi();
        $don_hang_moi = don_hang_moi();
        $VIEW = "public/home.php";
        break;

        // ========== THỂ LOẠI ========== //
        // Danh sách
    case 'danh_sach_tl':
        $title = "Danh sách thể loại";
        $ds_the_loai = all_the_loai();
        $VIEW = "the_loai/list.php";
        break;

        // Thêm
    case 'them_tl':
        $title = "Thêm mới thể loại";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $errors = [];

            if (empty(trim($ten_loai))) {
                $errors['ten_loai'] = "Tên không được để trống !";
            }

            if (empty($errors)) {
                add_the_loai($ten_loai);
                $success = "Thêm thể loại thành công !";
            }
        }
        $VIEW = "the_loai/add.php";
        break;

        // Sửa
    case 'sua_the_loai':
        $title = "Sửa thể loại";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            extract($_GET);
            $ct_the_loai = one_the_loai($id_tl);
        }
        $VIEW = "the_loai/update.php";
        break;

    case "update_the_loai":
        $title = "Sửa thể loại";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            if (empty(trim($ten_loai))) {
                $errors['ten_loai'] = "Tên không được để trống !";
            }

            if (empty($errors)) {
                update_the_loai($id, $ten_loai, $trang_thai);
                $success = "Sửa thể loại thành công !";
            }
        }
        $ct_the_loai = one_the_loai($id);
        $VIEW = "the_loai/update.php";
        break;

        // Xoá
    case "xoa_the_loai":
        $title = "Xoá thể loại";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            delete_the_loai($_GET['id_tl']);
        }
        header('location: index.php?url=danh_sach_tl');
        break;
        // ========== THỂ LOẠI ========== //

        // ========== THƯƠNG HIỆU ========== //
        // Danh sách
    case "ds_thuong_hieu":
        $title = "Danh sách thương hiệu";
        $ds_thuong_hieu = all_thuong_hieu();
        $VIEW = "thuong_hieu/list.php";
        break;

        // Thêm
    case "them_thuong_hieu":
        $title = "Thêm thương hiệu";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $errors = [];

            if (empty(trim($ten_thuong_hieu))) {
                $errors['ten_thuong_hieu'] = "Tên không được để trống !";
            }

            if (empty($errors)) {
                add_thuong_hieu($ten_thuong_hieu);
                $success = "Thêm thương hiệu thành công !";
            }
        }
        $VIEW = "thuong_hieu/add.php";
        break;

        // Sửa
    case "sua_thuong_hieu":
        $title = "Sửa thương hiệu";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            extract($_GET);
            $ct_thuong_hieu = one_thuong_hieu($id_th);
        }
        $VIEW = "thuong_hieu/update.php";
        break;

    case "update_thuong_hieu":
        $title = "Sửa thương hiệu";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            if (empty(trim($ten_thuong_hieu))) {
                $errors['ten_thuong_hieu'] = "Tên không được để trống !";
            }

            if (empty($errors)) {
                update_thuong_hieu($id, $ten_thuong_hieu, $trang_thai);
                $success = "Sửa thương hiệu thành công !";
            }
        }
        $ct_thuong_hieu = one_thuong_hieu($id);
        $VIEW = "thuong_hieu/update.php";
        break;

        // Xoá
    case "xoa_thuong_hieu":
        $title = "Xoá thương hiệu";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            delete_thuong_hieu($_GET['id_th']);
        }
        header('location: index.php?url=ds_thuong_hieu');
        break;
        // ========== THƯƠNG HIỆU ========== //

        // ========== SẢN PHẨM ========== //
        // Danh sách
    case "ds_san_pham":
        $title = "Danh sách sản phẩm";
        $kyw = isset($_POST["ten_san_pham"]) ? $_POST["ten_san_pham"] : "";
        $id_tl = isset($_POST["the_loai"]) ? $_POST["the_loai"] : 0;
        $ds_san_pham = all_san_pham($kyw, $id_tl);
        $ds_the_loai = all_the_loai();
        $VIEW = "san_pham/list.php";
        break;

        // Thêm
    case "them_san_pham":
        $title = "Thêm sản phẩm";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $id_the_loai = isset($_POST['id_the_loai']) ? $_POST['id_the_loai'] : "";
            $id_thuong_hieu = isset($_POST['id_thuong_hieu']) ? $_POST['id_thuong_hieu'] : "";
            $anh = $_FILES['anh'];

            $upload = $anh['name'];
            move_uploaded_file($anh['tmp_name'], "../assets/upload/" . $upload);

            $errors = [];

            if (empty(trim($upload))) {
                $errors['anh'] = "Ảnh chưa được chọn !";
            }

            if (empty(trim($ten))) {
                $errors['ten'] = "Tên không được để trống !";
            }

            if (empty(trim($mo_ta))) {
                $errors['mo_ta'] = "Mô tả không được để trống !";
            }

            if (empty(trim($id_the_loai))) {
                $errors['the_loai'] = "Thể loại chưa được chọn !";
            }

            if (empty(trim($id_thuong_hieu))) {
                $errors['thuong_hieu'] = "Thương hiệu chưa được chọn !";
            }

            if (empty($errors)) {
                add_san_pham($upload, $ten, $mo_ta, $id_the_loai, $id_thuong_hieu);
                $success = "Thêm sản phẩm thành công !";
            }
        }
        $ds_the_loai = all_the_loai();
        $ds_thuong_hieu = all_thuong_hieu();
        $VIEW = "san_pham/add.php";
        break;

    case "sua_san_pham":
        $title = "Sửa sản phẩm";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $ct_san_pham = one_san_pham($_GET['id_sp']);
        }
        $ds_the_loai = all_the_loai();
        $ds_thuong_hieu = all_thuong_hieu();
        $VIEW = "san_pham/update.php";
        break;

    case "update_san_pham":
        $title = "Sửa sản phẩm";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            extract($_FILES);
            $dir = "../assets/upload/";
            $id_the_loai = isset($_POST['id_the_loai']) ? $_POST['id_the_loai'] : "";
            $id_thuong_hieu = isset($_POST['id_thuong_hieu']) ? $_POST['id_thuong_hieu'] : "";

            if (!empty($_FILES['anh']['name'])) {
                $nameimg = $_FILES['anh']['name'];
                $base_name = basename($nameimg);
                $updateimg = $dir . $base_name;
                move_uploaded_file($_FILES['anh']['tmp_name'], $updateimg);
            } else {
                $updateimg = "";
                $base_name = "";
            }
            update_san_pham($id, $base_name, $ten, $mo_ta, $id_the_loai, $id_thuong_hieu, $trang_thai);
            $success = "Sửa sản phẩm thành công !";
        }
        $ds_the_loai = all_the_loai();
        $ds_thuong_hieu = all_thuong_hieu();
        $ct_san_pham = one_san_pham($id);
        $VIEW = "san_pham/update.php";
        break;
        // ========== SẢN PHẨM ========== //

        // ========== BIẾN THỂ SẢN PHẨM ========== //
        // Danh sách
    case "san_pham_kich_co":
        $title = "Sản phẩm biến thể";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $ct_san_pham = one_san_pham($_GET['id_sp']);
        }
        $ct_sp_kc = san_pham_kich_co($_GET['id_sp']);
        $VIEW = "san_pham_kich_co/san_pham_kich_co.php";
        break;

        // Thêm
    case "them_sp_kc":
        $title = "Thêm kích cỡ sản phẩm";
        $id = isset($_GET['id_sp']) ? $_GET['id_sp'] : $_POST['id'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            $errors = [];

            if (empty(trim($kich_co))) {
                $errors["kich_co"] = "Chưa chọn kích cỡ của sản phẩm";
            }
            if (empty(trim($gia))) {
                $errors["gia"] = "Chưa nhập giá của sản phẩm";
            }
            if (empty(trim($so_luong))) {
                $errors["so_luong"] = "Chưa nhập số lượng của sản phẩm";
            }

            if (empty($errors)) {
                add_san_pham_kich_co($id, $kich_co, $so_luong, $gia);
                $success = "Thêm kích cỡ sản phẩm thành công";
            }
        }
        $ct_san_pham = one_san_pham($id);
        $ds_kich_co = all_kich_co();
        $VIEW = "san_pham_kich_co/them_san_pham_kich_co.php";
        break;

        // Sửa
    case "sua_sp_kc":
        $title = "Sửa sản phẩm biến thể";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $ct_sp_kc = one_san_pham_kich_co($_GET['id_sp_kc']);
            $ds_kich_co = all_kich_co();
        }
        $VIEW = "san_pham_kich_co/sua_san_pham_kich_co.php";
        break;

    case "update_sp_kc":
        $title = "Sửa sản phẩm biến thể";
        $id = isset($_GET['id_sp_kc']) ? $_GET['id_sp_kc'] : $_POST['id'];

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            update_san_pham_kich_co($id, $id_sp, $id_kc, $so_luong, $gia, $trang_thai);
            $success = "Sửa thành công";
        }
        $ct_sp_kc = one_san_pham_kich_co($id);
        $VIEW = "san_pham_kich_co/sua_san_pham_kich_co.php";
        break;

        // Xoá
    case "xoa_sp_kc":
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            delete_san_pham_kich_co($_GET['id_sp_kc']);
        }
        header("location: index.php?url=san_pham_kich_co&id_sp=" . $_GET['id_sp']);
        break;
        // ========== BIẾN THỂ SẢN PHẨM ========== //

        // ========== KÍCH CỠ ========== //
        // Danh sách
    case "ds_kich_co":
        $title = "Danh sách kích cỡ";
        $ds_kich_co = all_kich_co();
        $VIEW = "kich_co/list.php";
        break;

        // Thêm
    case "them_kich_co":
        $title = "Thêm kích cỡ";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            $errors = [];

            if (empty(trim($kich_co))) {
                $errors["kich_co"] = "Chưa nhập kích cỡ";
            }

            if (empty($errors)) {
                add_kich_co($kich_co);
                $success = "Thêm kích cỡ thành công";
            }
        }
        $VIEW = "kich_co/add.php";
        break;

        // Sửa
    case "sua_kich_co":
        $title = "Sửa kích cỡ";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            extract($_GET);
            $ct_kich_co = one_kich_co($id_kc);
        }
        $VIEW = "kich_co/update.php";
        break;

    case "update_kich_co":
        $title = "Sửa kích cỡ";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            if (empty(trim($kich_co))) {
                $errors['kich_co'] = "Chưa nhập kích cỡ !";
            }

            if (empty($errors)) {
                update_kich_co($id, $kich_co, $trang_thai);
                $success = "Sửa kích cỡ thành công !";
            }
        }
        $ct_kich_co = one_kich_co($id);
        $VIEW = "kich_co/update.php";
        break;

        // Xoá
    case "xoa_kich_co":
        $title = "Xoá kích cỡ";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            delete_kich_co($_GET['id_kc']);
        }
        header("location: index.php?url=ds_kich_co");
        break;
        // ========== KÍCH CỠ ========== //

        // ========== TRẠNG THÁI ĐƠN HÀNG ========== //
        // Danh sách
    case "ds_tt_dh":
        $title = "Danh sách trạng thái đơn hàng";
        $ds_tt_dh = all_trang_thai_don_hang();
        $VIEW = "trang_thai_don_hang/list.php";
        break;

        // Thêm
    case "them_tt_dh":
        $title = "Thêm trạng thái đơn hàng";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $errors = [];

            if (empty(trim($tt_dh))) {
                $errors["tt_dh"] = "Chưa nhập trạng thái !";
            }

            if (empty($errors)) {
                add_trang_thai_don_hang($tt_dh);
                $success = "Thêm thành công !";
            }
        }
        $VIEW = "trang_thai_don_hang/add.php";
        break;

        // Sửa
    case "sua_tt_dh":
        $title = "Sửa trạng thái đơn hàng";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $ct_tt_dh = one_trang_thai_don_hang($_GET["id_tt_dh"]);
        }
        $VIEW = "trang_thai_don_hang/update.php";
        break;

    case "update_tt_dh":
        $title = "Sửa trạng thái đơn hàng";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $errors = [];

            if (empty(trim($tt_dh))) {
                $errors["tt_dh"] = "Chưa nhập trạng thái !";
            }

            if (empty($errors)) {
                update_trang_thai_don_hang($id, $tt_dh);
                $success = "Sửa thành công !";
            }
        }
        $ct_tt_dh = one_trang_thai_don_hang($id);
        $VIEW = "trang_thai_don_hang/update.php";
        break;
        // ========== TRẠNG THÁI ĐƠN HÀNG ========== //

        // ========== PHƯƠNG THỨC THANH TOÁN ========== //
        // Danh sách
    case "ds_pt_tt":
        $title = "Danh sách phương thức thanh toán";
        $ds_pt_tt = all_phuong_thuc_thanh_toan();
        $VIEW = "phuong_thuc_thanh_toan/list.php";
        break;

        // Thêm
    case "them_pt_tt";
        $title = "Thêm phương thức thanh toán";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $errors = [];

            if (empty(trim($pt_tt))) {
                $errors["pt_tt"] = "Chưa nhập trạng thái !";
            }

            if (empty($errors)) {
                add_phuong_thuc_thanh_toan($pt_tt);
                $success = "Thêm thành công !";
            }
        }
        $VIEW = "phuong_thuc_thanh_toan/add.php";
        break;

        // Sửa
    case "sua_pt_tt":
        $title = "Sửa phương thức thanh toán";
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $ct_pt_tt = one_phuong_thuc_thanh_toan($_GET["id_pt_tt"]);
        }
        $VIEW = "phuong_thuc_thanh_toan/update.php";
        break;

    case "update_pt_tt":
        $title = "Sửa phương thức thanh toán";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);
            $errors = [];

            if (empty(trim($pt_tt))) {
                $errors["pt_tt"] = "Chưa nhập phương thức thanh toán !";
            }

            if (empty($errors)) {
                update_phuong_thuc_thanh_toan($id, $pt_tt);
                $success = "Sửa thành công !";
            }
        }
        $ct_pt_tt = one_phuong_thuc_thanh_toan($id);
        $VIEW = "phuong_thuc_thanh_toan/update.php";
        break;
        // ========== PHƯƠNG THỨC THANH TOÁN ========== //

        // ========== ĐƠN HÀNG ========== //
    case "ds_don_hang":
        $title = "Quản lý đơn hàng";
        $ds_don_hang = all_don_hang();
        $VIEW = "don_hang/list.php";
        break;

    case "sua_don_hang":
        $title = "Sửa đơn hàng";
        $ct_don_hang = one_don_hang($_GET["id_dh"]);
        $all_trang_thai_don_hang = all_trang_thai_don_hang();
        $VIEW = "don_hang/update.php";
        break;

    case "update_don_hang":
        $title = "Sửa đơn hàng";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            sua_don_hang($id_dh, $ttdh);
            $success = "Sửa thành công !";
        }
        $ct_don_hang = one_don_hang($id_dh);
        $all_trang_thai_don_hang = all_trang_thai_don_hang();
        $VIEW = "don_hang/update.php";
        break;
        // ========== ĐƠN HÀNG ========== //

        // ========== TÀI KHOẢN ========== //
        // Quản trị
    case "ds_quan_tri":
        $title = "Danh sách quản trị";
        $ds_quan_tri = ds_quan_tri();
        $VIEW = "quan_tri/list.php";
        break;

        // Nhân viên
    case "ds_nhan_vien":
        $title = "Danh sách nhân viên";
        $ten_nhan_vien = isset($_POST["ten_nhan_vien"]) ? $_POST["ten_nhan_vien"] : "";
        $ds_nhan_vien = ds_nhan_vien($ten_nhan_vien);
        $VIEW = "nhan_vien/list.php";
        break;

    case "sua_nhan_vien":
        $title = "Sửa nhân viên";
        $thong_tin_tai_khoan = thong_tin_tai_khoan($_GET["id_nv"]);
        $VIEW = "nhan_vien/update.php";
        break;

    case "update_nhan_vien":
        $title = "Sửa nhân viên";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            update_nhan_vien($id, $cap_bac, $trang_thai);
            $success = "Sửa thành công !";
            $thong_tin_tai_khoan = thong_tin_tai_khoan($id);
        }
        $VIEW = "nhan_vien/update.php";
        break;

    case "xoa_nhan_vien":
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            xoa_nhan_vien($_GET["id_nv"]);
        }
        header("location: index.php?url=ds_nhan_vien");
        break;

        // Khách hàng
    case "ds_khach_hang":
        $title = "Danh sách khách hàng";
        $ten_khach_hang = isset($_POST["ten_khach_hang"]) ? $_POST["ten_khach_hang"] : "";
        $ds_khach_hang = ds_khach_hang($ten_khach_hang);
        $VIEW = "khach_hang/list.php";
        break;

    case "sua_khach_hang":
        $title = "Sửa khách hàng";
        $thong_tin_tai_khoan = thong_tin_tai_khoan($_GET["id_kh"]);
        $VIEW = "khach_hang/update.php";
        break;

    case "update_khach_hang":
        $title = "Sửa khách hàng";
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            extract($_POST);

            update_khach_hang($id, $cap_bac, $trang_thai);
            $success = "Sửa thành công !";
            $thong_tin_tai_khoan = thong_tin_tai_khoan($id);
        }
        $VIEW = "khach_hang/update.php";
        break;

    case "xoa_khach_hang":
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            xoa_khach_hang($_GET["id_kh"]);
        }
        header("location: index.php?url=ds_khach_hang");
        break;
        // ========== TÀI KHOẢN ========== //

    default:
        $title = "Trang chủ";
        $tong_so_luong_san_pham_dang_co = tong_so_luong_san_pham_dang_co();
        $tong_so_khach_hang = tong_so_khach_hang();
        $sap_het_hang = sap_het_hang();
        $tong_don_hang = tong_don_hang();
        $thong_ke_thai_khoan_moi = thong_ke_thai_khoan_moi();
        $don_hang_moi = don_hang_moi();
        $VIEW = "public/home.php";
        break;
}

require_once "layout/header.php";
require_once $VIEW;
require_once "layout/footer.php";
ob_end_flush();
