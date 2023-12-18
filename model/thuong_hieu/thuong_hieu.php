<?php
function all_thuong_hieu()
{
    $sql = "select * from thuong_hieu";
    $thuong_hieu = pdo_query($sql);
    return $thuong_hieu;
}

function one_thuong_hieu($id_th)
{
    $sql = "select * from thuong_hieu where id = ?";
    $one_thuong_hieu = pdo_query_one($sql, $id_th);
    return $one_thuong_hieu;
}

function add_thuong_hieu($ten_thuong_hieu)
{
    $sql = "insert into thuong_hieu (ten_thuong_hieu) values (?)";
    pdo_execute($sql, $ten_thuong_hieu);
}

function update_thuong_hieu($id, $ten_thuong_hieu, $trang_thai)
{
    $sql = "update thuong_hieu set ten_thuong_hieu = ?, trang_thai = ? where id = ?";
    pdo_execute($sql, $ten_thuong_hieu, $trang_thai, $id);
}

function delete_thuong_hieu($id)
{
    $sql = "update thuong_hieu set trang_thai = 0 where id = ?";
    pdo_execute($sql, $id);
}
