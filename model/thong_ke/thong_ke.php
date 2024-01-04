<?php
function tong_so_luong_san_pham_dang_co()
{
    $sql = "select sum(so_luong) as so_luong_san_pham from sanpham_kichco";
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
