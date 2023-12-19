<?php
function add_san_pham_kich_co($id_sp, $id_Kc, $so_luong, $gia)
{
    $sql = "insert into sanpham_kichco (id_sp, id_Kc, so_luong, gia) values (?, ?, ?, ?)";
    pdo_execute($sql, $id_sp, $id_Kc, $so_luong, $gia);
}

function san_pham_kich_co($id_sp)
{
    $sql = "select sanpham_kichco.*, kich_co.kich_co as kich_co, san_pham.ten as ten_san_pham from sanpham_kichco 
    join kich_co on kich_co.id = sanpham_kichco.id_kc 
    join san_pham on san_pham.id = sanpham_kichco.id_sp 
    where sanpham_kichco.id_sp = ?";
    $san_pham_kich_co = pdo_query($sql, $id_sp);
    return $san_pham_kich_co;
}

function one_san_pham_kich_co($id_sp_kc)
{
    $sql = "select sanpham_kichco.*, san_pham.ten as ten_san_pham, kich_co.kich_co as kich_co from sanpham_kichco 
    join kich_co on kich_co.id = sanpham_kichco.id_kc 
    join san_pham on san_pham.id = sanpham_kichco.id_sp 
    where sanpham_kichco.id = ?";
    $sp_kc = pdo_query_one($sql, $id_sp_kc);
    return $sp_kc;
}

function update_san_pham_kich_co($id, $id_sp, $id_kc, $so_luong, $gia, $trang_thai)
{
    $sql = "update sanpham_kichco set id_sp = ?, id_kc = ?, so_luong = ?, gia = ?, trang_thai = ? where id =  ?";
    pdo_execute($sql, $id_sp, $id_kc, $so_luong, $gia, $trang_thai, $id);
}

function delete_san_pham_kich_co($id)
{
    $sql = "update sanpham_kichco set trang_thai = 0 where id = ?";
    pdo_execute($sql, $id);
}

function lay_id_san_pham_kich_co($id_sp, $id_kc)
{
    $sql = "select * from sanpham_kichco where id_sp = ? and id_kc = ?";
    $id = pdo_query_one($sql, $id_sp, $id_kc);
    return $id;
}

function san_pham_kich_co_gio_hang($id_kh, $id_sp_kc, $so_luong)
{
    $sql = "insert into gio_hang (id_kh, id_sp_kc, so_luong) values (?, ?, ?)";
    pdo_execute($sql, $id_kh, $id_sp_kc, $so_luong);
}

function update_san_pham_kich_co_gio_hang($id, $so_luong)
{
    $sql = "update sanpham_kichco set so_luong = ? where id = ?";
    pdo_execute($sql, $so_luong, $id);
}
