<?php
function all_phuong_thuc_thanh_toan()
{
    $sql = "select * from phuong_thuc_thanh_toan";
    $pt_tt = pdo_query($sql);
    return $pt_tt;
}

function add_phuong_thuc_thanh_toan($phuong_thuc_thanh_toan)
{
    $sql = "insert into phuong_thuc_thanh_toan (pttt) values (?)";
    pdo_execute($sql, $phuong_thuc_thanh_toan);
}

function one_phuong_thuc_thanh_toan($id_pt_tt)
{
    $sql = "select * from phuong_thuc_thanh_toan where id = ?";
    $pt_tt = pdo_query_one($sql, $id_pt_tt);
    return $pt_tt;
}

function update_phuong_thuc_thanh_toan($id, $phuong_thuc_thanh_toan)
{
    $sql = "update phuong_thuc_thanh_toan set pttt = ? where id = ?";
    pdo_execute($sql, $phuong_thuc_thanh_toan, $id);
}
