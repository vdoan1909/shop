<?php
function all_trang_thai_don_hang()
{
    $sql = "select * from trang_thai_don_hang";
    $tt_dh = pdo_query($sql);
    return $tt_dh;
}

function add_trang_thai_don_hang($trang_thai_don_hang)
{
    $sql = "insert into trang_thai_don_hang (trang_thai_don_hang) values (?)";
    pdo_execute($sql, $trang_thai_don_hang);
}

function one_trang_thai_don_hang($id_tt_dh)
{
    $sql = "select * from trang_thai_don_hang where id = ?";
    $tt_dh = pdo_query_one($sql, $id_tt_dh);
    return $tt_dh;
}

function update_trang_thai_don_hang($id, $trang_thai_don_hang)
{
    $sql = "update trang_thai_don_hang set trang_thai_don_hang = ? where id = ?";
    pdo_execute($sql, $trang_thai_don_hang, $id);
}
