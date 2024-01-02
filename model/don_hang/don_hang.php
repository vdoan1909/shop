<?php
function add_don_hang($id_kh, $ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dc_nguoi_nhan, $ghi_chu, $pttt, $tong_tien, $tong_tien_da_tra)
{
    $sql = "insert into don_hang (id_kh, ten_nguoi_nhan, email_nguoi_nhan, sdt_nguoi_nhan, dc_nguoi_nhan, ghi_chu, pttt, tong_tien, tong_tien_da_tra) values (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $don_hang = pdo_execute($sql, $id_kh, $ten_nguoi_nhan, $email_nguoi_nhan, $sdt_nguoi_nhan, $dc_nguoi_nhan, $ghi_chu, $pttt, $tong_tien, $tong_tien_da_tra);
    return $don_hang;
}

function add_don_hang_chi_tiet($id_don_hang, $id_sp_kc, $so_luong, $gia, $qr)
{
    $sql = "insert into don_hang_ct (id_don_hang, id_sp_kc, so_luong, gia, qr) values (?, ?, ?, ?, ?)";
    pdo_execute($sql, $id_don_hang, $id_sp_kc, $so_luong, $gia, $qr);
}

function xoa_gio_hang($id_kh)
{
    $sql = "delete from gio_hang where id_kh = ?";
    pdo_execute($sql, $id_kh);
}
