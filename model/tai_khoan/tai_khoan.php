<?php
function all_email_tai_khoan()
{
    $sql = "select * from tai_khoan where trang_thai = 1";
    $email = pdo_query($sql);
    return $email;
}

function add_tai_khoan($email, $mat_khau)
{
    $sql = "insert into tai_khoan (email, mat_khau) values (?, ?)";
    pdo_execute($sql, $email, $mat_khau);
}

function all_tai_khoan($email, $mat_khau)
{

    $sql = "select * from tai_khoan where email like '%$email%' and mat_khau like '%$mat_khau%' AND trang_thai = 1";
    $tai_khoan = pdo_query_one($sql);
    return $tai_khoan;
}

function all_tai_khoan_email($email)
{

    $sql = "select * from tai_khoan where email like '%$email%' and trang_thai = 1";
    $tai_khoan = pdo_query_one($sql);
    return $tai_khoan;
}

function cap_nhat_tai_khoan($id, $anh, $ten, $email, $dia_chi)
{
    if (!empty($anh)) {
        $sql = "update tai_khoan set anh = ?, ten = ?, email = ?, dia_chi = ? where id = ?";
        pdo_execute($sql, $anh, $ten, $email, $dia_chi, $id);
    } else {
        $sql = "update tai_khoan set ten = ?, email = ?, dia_chi = ? where id = ?";
        pdo_execute($sql, $ten, $email, $dia_chi, $id);
    }
}

function thong_tin_tai_khoan($id_tk)
{
    $sql = "select * from tai_khoan where id = ?";
    $tai_khoan = pdo_query_one($sql, $id_tk);
    return $tai_khoan;
}

function dang_xuat()
{
    session_destroy();
}

function quen_mat_khau($id_tk, $mat_khau_moi)
{
    $sql = "update tai_khoan set mat_khau = ? where id = ?";
    pdo_execute($sql, $mat_khau_moi, $id_tk);
}

function ds_quan_tri()
{
    $sql = "select * from tai_khoan where role = 1 and trang_thai = 1";
    $quan_tri = pdo_query($sql);
    return $quan_tri;
}

function ds_khach_hang($ten_khach_hang)
{
    $sql = "select * from tai_khoan ";
    $sql .= " where role = 0";
    if (!empty($ten_khach_hang)) {
        $sql .= " and ten like '%$ten_khach_hang%'";
    }
    $khach_hang = pdo_query($sql);
    return $khach_hang;
}

function update_khach_hang($id, $role, $trang_thai)
{
    $sql = "update tai_khoan set role = ?, trang_thai = ? where id = ?";
    pdo_execute($sql, $role, $trang_thai, $id);
}

function xoa_khach_hang($id)
{
    $sql = "update tai_khoan set trang_thai = 0 where id = ?";
    pdo_execute($sql, $id);
}

function ds_nhan_vien($ten_nhan_vien)
{
    $sql = "select * from tai_khoan ";
    $sql .= " where role not in (0, 1)";
    if (!empty($ten_nhan_vien)) {
        $sql .= " and ten like '%$ten_nhan_vien%'";
    }
    $nhan_vien = pdo_query($sql);
    return $nhan_vien;
}

function update_nhan_vien($id, $role, $trang_thai)
{
    $sql = "update tai_khoan set role = ?, trang_thai = ? where id = ?";
    pdo_execute($sql, $role, $trang_thai, $id);
}

function xoa_nhan_vien($id)
{
    $sql = "update tai_khoan set trang_thai = 0 where id = ?";
    pdo_execute($sql, $id);
}
