<?php
function quan_tri($id)
{
    $sql = "select * from tai_khoan where id = ? and role = 1";
    $quan_tri = pdo_query_one($sql, $id);
    return $quan_tri;
}
