<?php
function all_san_pham()
{
    $sql = "select san_pham.*, the_loai.ten_loai as ten_loai, the_loai.trang_thai as trang_thai_tl, thuong_hieu.ten_thuong_hieu as ten_thuong_hieu, thuong_hieu.trang_thai as trang_thai_th 
    from san_pham 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    order by san_pham.id desc";
    $san_pham = pdo_query($sql);
    return $san_pham;
}

function all_san_pham_view()
{
    $sql = "select san_pham.*, the_loai.ten_loai as ten_loai, the_loai.trang_thai as trang_thai_tl, thuong_hieu.ten_thuong_hieu as ten_thuong_hieu, thuong_hieu.trang_thai as trang_thai_th 
    from san_pham 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    where san_pham.trang_thai = 1 and the_loai.trang_thai = 1 and thuong_hieu.trang_thai = 1 
    order by san_pham.id desc";
    $san_pham = pdo_query($sql);
    return $san_pham;
}

function add_san_pham($anh, $ten, $mo_ta, $id_the_loai, $id_thuong_hieu)
{
    $sql = "insert into san_pham (anh, ten, mo_ta, id_the_loai, id_thuong_hieu) values (?, ?, ?, ?, ?)";
    pdo_execute($sql, $anh, $ten, $mo_ta, $id_the_loai, $id_thuong_hieu);
}

function one_san_pham($id_sp)
{
    $sql = "select san_pham.*, the_loai.ten_loai as ten_loai, the_loai.trang_thai as trang_thai_tl, thuong_hieu.ten_thuong_hieu as ten_thuong_hieu, thuong_hieu.trang_thai as trang_thai_th 
    from san_pham 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    where san_pham.id = ? 
    order by san_pham.id desc";
    $san_pham = pdo_query_one($sql, $id_sp);
    return $san_pham;
}

function update_san_pham($id, $anh, $ten, $mo_ta, $id_the_loai, $id_thuong_hieu, $trang_thai)
{
    if (!empty($anh)) {
        $sql = "update san_pham set anh = ?, ten = ?, mo_ta = ?, id_the_loai = ?, id_thuong_hieu = ?, trang_thai = ? where id = ?";
        pdo_execute($sql, $anh, $ten, $mo_ta, $id_the_loai, $id_thuong_hieu, $trang_thai, $id);
    } else {
        $sql = "update san_pham set ten = ?, mo_ta = ?, id_the_loai = ?, id_thuong_hieu = ?, trang_thai = ? where id = ?";
        pdo_execute($sql, $ten, $mo_ta, $id_the_loai, $id_thuong_hieu, $trang_thai, $id);
    }
}

function delete_san_pham($id_sp)
{
    $sql = "update san_pham set trang_thai = 0 where id = ?";
    pdo_execute($sql, $id_sp);
}

function san_pham_ban_chay()
{
    $sql = "select distinct san_pham.*, sanpham_kichco.id as id_sp_kc, sanpham_kichco.gia, the_loai.id as id_tl, the_loai.ten_loai as ten_loai, the_loai.trang_thai as trang_thai_tl, thuong_hieu.id as id_th, thuong_hieu.ten_thuong_hieu as ten_thuong_hieu, thuong_hieu.trang_thai as trang_thai_th 
    from san_pham 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    join sanpham_kichco on sanpham_kichco.id_sp = san_pham.id 
    where san_pham.trang_thai = 1 and the_loai.trang_thai = 1 and thuong_hieu.trang_thai = 1 
    group by san_pham.id 
    order by rand() 
    limit 0,12";
    $sp_bc = pdo_query($sql);
    return $sp_bc;
}

function san_pham_moi()
{
    $sql = "select distinct san_pham.*, sanpham_kichco.id as id_sp_kc, sanpham_kichco.gia, the_loai.id as id_tl, the_loai.ten_loai as ten_loai, the_loai.trang_thai as trang_thai_tl, thuong_hieu.id as id_th, thuong_hieu.ten_thuong_hieu as ten_thuong_hieu, thuong_hieu.trang_thai as trang_thai_th 
    from san_pham 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    join sanpham_kichco on sanpham_kichco.id_sp = san_pham.id 
    where san_pham.trang_thai = 1 and the_loai.trang_thai = 1 and thuong_hieu.trang_thai = 1 
    group by san_pham.id 
    order by rand() 
    desc limit 0,6";
    $sp_bc = pdo_query($sql);
    return $sp_bc;
}

function ct_san_pham($id_sp)
{
    $sql = "select san_pham.*, sanpham_kichco.id as id_sp_kc, sanpham_kichco.gia as gia, kich_co.kich_co as kich_co, the_loai.id as id_tl, the_loai.ten_loai as ten_loai, the_loai.trang_thai as trang_thai_tl, thuong_hieu.id as id_th, thuong_hieu.ten_thuong_hieu as ten_thuong_hieu, thuong_hieu.trang_thai as trang_thai_th 
    from san_pham 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    join sanpham_kichco on sanpham_kichco.id_sp = san_pham.id 
    join kich_co on kich_co.id = sanpham_kichco.id_kc 
    where san_pham.id = ? 
    and san_pham.trang_thai = 1 and the_loai.trang_thai = 1 and thuong_hieu.trang_thai = 1 
    order by san_pham.id desc";
    $san_pham = pdo_query_one($sql, $id_sp);
    return $san_pham;
}

function kich_co_san_pham($id_sp)
{
    $sql = "select kich_co.*, sanpham_kichco.gia as gia from kich_co 
    join sanpham_kichco on sanpham_kichco.id_kc = kich_co.id 
    join san_pham on san_pham.id = sanpham_kichco.id_sp 
    where san_pham.id = ?";
    $kc_sp = pdo_query($sql, $id_sp);
    return $kc_sp;
}

function san_pham_cung_loai($id_tl, $id_sp)
{
    $sql = "select distinct san_pham.*, 
    sanpham_kichco.id as id_sp_kc, 
    sanpham_kichco.gia as gia, 
    kich_co.kich_co as kich_co, 
    the_loai.id as id_tl, 
    the_loai.ten_loai as ten_loai, 
    the_loai.trang_thai as trang_thai_tl, 
    thuong_hieu.id as id_th, 
    thuong_hieu.ten_thuong_hieu as ten_thuong_hieu, 
    thuong_hieu.trang_thai as trang_thai_th 
    from san_pham 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    join sanpham_kichco on sanpham_kichco.id_sp = san_pham.id 
    join kich_co on kich_co.id = sanpham_kichco.id_kc 
    where the_loai.id = ? and san_pham.id <> ? 
    and san_pham.trang_thai = 1 and the_loai.trang_thai = 1 and thuong_hieu.trang_thai = 1 
    order by san_pham.id_the_loai  
    limit 6";
    $sp_cl = pdo_query($sql, $id_tl, $id_sp);
    return $sp_cl;
}

function san_pham_ban_them($id_th)
{
    $sql = "select distinct san_pham.*, sanpham_kichco.id as id_sp_kc, sanpham_kichco.gia, the_loai.id as id_tl, the_loai.ten_loai as ten_loai, the_loai.trang_thai as trang_thai_tl, thuong_hieu.id as id_th, thuong_hieu.ten_thuong_hieu as ten_thuong_hieu, thuong_hieu.trang_thai as trang_thai_th 
    from san_pham 
    join the_loai on the_loai.id = san_pham.id_the_loai 
    join thuong_hieu on thuong_hieu.id = san_pham.id_thuong_hieu 
    join sanpham_kichco on sanpham_kichco.id_sp = san_pham.id 
    where thuong_hieu.id = ? 
    and san_pham.trang_thai = 1 and the_loai.trang_thai = 1 and thuong_hieu.trang_thai = 1 
    group by rand(san_pham.id) desc limit 6";
    $sp_bt = pdo_query($sql, $id_th);
    return $sp_bt;
}


function san_pham_gio_hang($id_kh)
{
    $sql = "select gio_hang.*, sanpham_kichco.so_luong as sl_sp, san_pham.anh as anh, san_pham.ten as ten, sanpham_kichco.gia as gia 
    from gio_hang 
    join sanpham_kichco on sanpham_kichco.id = gio_hang.id_sp_kc 
    join san_pham on san_pham.id = sanpham_kichco.id_sp 
    where id_kh = ? 
    order by (gio_hang.id) desc";
    $gio_hang = pdo_query($sql, $id_kh);
    return $gio_hang;
}

function so_luong_san_pham_gio_hang($id_kh)
{
    $sql = "select count(so_luong) as so_luong from gio_hang where id_kh = ?";
    $so_luong = pdo_query_one($sql, $id_kh);
    return $so_luong;
}
