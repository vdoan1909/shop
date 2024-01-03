<?php
require_once "public/nav-left.php";
extract($ct_don_hang);
$fm_tong_tien = number_format($tong_tien, 0, ',', '.');
$fm_tong_tien_da_tra = number_format($tong_tien_da_tra, 0, ',', '.');
$fm_ngay_dat = date("d-m-Y", strtotime($ngay_dat));
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách đơn hàng</li>
            <li class="breadcrumb-item"><a href="#">Sửa đơn hàng</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=update_don_hang" class="tile" method="POST">
                <h3 class="tile-title">Sửa đơn hàng</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Mã đơn hàng</label>
                            <input name="id" value="<?= $id ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Email khách hàng</label>
                            <input name="email" value="<?= $email ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên người nhận</label>
                            <input name="ten_nguoi_nhan" value="<?= $ten_nguoi_nhan ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Email người nhận</label>
                            <input name="email_nguoi_nhan" value="<?= $email_nguoi_nhan ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">SĐT người nhận</label>
                            <input name="sdt_nguoi_nhan" value="<?= $sdt_nguoi_nhan ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Địa chỉ người nhận</label>
                            <input name="dc_nguoi_nhan" value="<?= $dc_nguoi_nhan ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Ghi chú</label>
                            <input name="ghi_chu" value="<?= $ghi_chu ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Phương thức thanh toán</label>
                            <input name="pttt" value="<?= $pttt ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Ngày đặt</label>
                            <input name="ngay_dat" value="<?= $fm_ngay_dat ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tổng tiền</label>
                            <input name="tong_tien" value="<?= $fm_tong_tien ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tổng tiền đã trả</label>
                            <input name="tong_tien_da_tra" value="<?= $fm_tong_tien_da_tra ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Trạng thái</label>
                            <select name="ttdh" class="form-control" id="exampleSelect1">
                                <option value="<?= $id_tt_don_hang ?>"><?= $ttdh ?>
                                </option>
                                <?php foreach ($all_trang_thai_don_hang as $trang_thai_don_hang) :
                                    extract($trang_thai_don_hang);
                                ?>
                                    <option value="<?= $id ?>"><?= $trang_thai_don_hang ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Sửa</button>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
            </form>
        </div>
    </div>

</main>