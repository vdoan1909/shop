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

function all_don_hang()
{
    $sql = "select don_hang.*, tai_khoan.email as email, phuong_thuc_thanh_toan.pttt as pttt,
    trang_thai_don_hang.trang_thai_don_hang as ttdh from don_hang 
    join tai_khoan on tai_khoan.id = don_hang.id_kh 
    join phuong_thuc_thanh_toan on phuong_thuc_thanh_toan.id = don_hang.pttt 
    join trang_thai_don_hang on trang_thai_don_hang.id = don_hang.id_tt_don_hang";
    $don_hang = pdo_query($sql);
    return $don_hang;
}

function one_don_hang($id_don_hang)
{
    $sql = "select don_hang.*, tai_khoan.email as email, phuong_thuc_thanh_toan.pttt as pttt,
    trang_thai_don_hang.trang_thai_don_hang as ttdh from don_hang 
    join tai_khoan on tai_khoan.id = don_hang.id_kh 
    join phuong_thuc_thanh_toan on phuong_thuc_thanh_toan.id = don_hang.pttt 
    join trang_thai_don_hang on trang_thai_don_hang.id = don_hang.id_tt_don_hang 
    where don_hang.id = ?";
    $don_hang = pdo_query_one($sql, $id_don_hang);
    return $don_hang;
}

function sua_don_hang($id, $trang_thai)
{
    $sql = "update don_hang set id_tt_don_hang = ? where id = ?";
    pdo_execute($sql, $trang_thai, $id);
}

function don_hang_moi()
{
    $sql = "select don_hang.*, 
    trang_thai_don_hang.trang_thai_don_hang as ttdh 
    from don_hang 
    join trang_thai_don_hang on trang_thai_don_hang.id = don_hang.id_tt_don_hang 
    order by don_hang.id desc limit 4";
    $don_hang = pdo_query($sql);
    return $don_hang;
}
