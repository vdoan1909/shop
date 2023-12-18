<?php
function all_the_loai()
{
    $sql = "select * from the_loai";
    $ds_the_loai = pdo_query($sql);
    return $ds_the_loai;
}

function add_the_loai($ten_loai)
{
    $sql = "insert into the_loai (ten_loai) values (?)";
    pdo_execute($sql, $ten_loai);
}

function one_the_loai($id_tl)
{
    $sql = "select * from the_loai where id = ?";
    $one_the_loai = pdo_query_one($sql, $id_tl);
    return $one_the_loai;
}

function update_the_loai($id_tl, $ten_loai, $trang_thai)
{
    $sql = "update the_loai set ten_loai = ?, trang_thai = ? where id = ?";
    pdo_execute($sql, $ten_loai, $trang_thai, $id_tl);
}

function delete_the_loai($id_tl)
{
    $sql = "update the_loai set trang_thai = 0 where id = ?";
    pdo_execute($sql, $id_tl);
}
