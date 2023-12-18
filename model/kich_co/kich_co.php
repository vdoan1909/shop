<?php
function all_kich_co()
{
    $sql = "select * from kich_co";
    $kich_co = pdo_query($sql);
    return $kich_co;
}

function add_kich_co($kich_co)
{
    $sql = "insert into kich_co (kich_co) values (?)";
    pdo_execute($sql, $kich_co);
}

function one_kich_co($id)
{
    $sql = "select * from kich_co where id = ?";
    $kich_co = pdo_query_one($sql, $id);
    return $kich_co;
}

function update_kich_co($id, $kich_co, $trang_thai)
{
    $sql = "update kich_co set kich_co = ?, trang_thai = ? where id = ?";
    pdo_execute($sql, $kich_co, $trang_thai, $id);
}


function delete_kich_co($id)
{
    $sql = "update kich_co set trang_thai = 0 where id = ?";
    pdo_execute($sql, $id);
}
