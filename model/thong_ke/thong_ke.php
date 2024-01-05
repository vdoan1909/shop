<?php
function tong_so_luong_san_pham_dang_co()
{
    $sql = "select sum(so_luong) as so_luong_san_pham from sanpham_kichco;";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

function tong_so_khach_hang()
{
    $sql = "select count(id) as tong_khach_hang from tai_khoan where role = 0 and trang_thai = 1";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

function sap_het_hang()
{
    $sql = "select count(id) as sap_het_hang from sanpham_kichco where so_luong < 30";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

function tong_don_hang()
{
    $sql = "select count(id) as tong_don_hang from don_hang";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

function thong_ke_thai_khoan_moi()
{
    $sql = "select * from tai_khoan where role = 0";
    $so_luong = pdo_query($sql);
    return $so_luong;
}

function tong_nhan_vien()
{
    $sql = "select count(id) as tong_nhan_vien from tai_khoan where role not in (0, 1)";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

function tai_khoan_bi_cam()
{
    $sql = "select count(id) as tai_khoan_bi_cam from tai_khoan where trang_thai = 0";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

function tong_thu_nhap()
{
    $sql = "select sum(gia) as tong_thu_nhap from don_hang_ct";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

function don_hang_bi_huy()
{
    $sql = "select count(id) as don_hang_bi_huy from don_hang where id_tt_don_hang = 5";
    $so_luong = pdo_query_one($sql);
    return $so_luong;
}

function san_pham_ban_chay_thong_ke()
{
    $sql = "select sanpham_kichco.id_sp as id_sp, sanpham_kichco.gia as gia, 
    san_pham.ten as ten, the_loai.ten_loai as ten_loai  
    from don_hang_ct 
    join sanpham_kichco on sanpham_kichco.id = don_hang_ct.id_sp_kc 
    join san_pham on san_pham.id = sanpham_kichco.id_sp 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    group by id_sp_kc 
    having count(id_sp_kc) >= 4";
    $so_luong = pdo_query($sql);
    return $so_luong;
}

function san_pham_da_het()
{
    $sql = "select sanpham_kichco.*, san_pham.ten as ten, 
    san_pham.anh as anh, the_loai.ten_loai as ten_loai, 
    thuong_hieu.ten_thuong_hieu as ten_thuong_hieu 
    from sanpham_kichco 
    join san_pham on san_pham.id = sanpham_kichco.id_sp 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    where sanpham_kichco.so_luong = 0";
    $san_pham_da_het = pdo_query($sql);
    return $san_pham_da_het;
}
