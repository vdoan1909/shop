<?php
require_once "public/nav-left.php";
extract($ct_sp_kc);
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Biến thể sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Sửa biến thể</a></li>
        </ul>
    </div>
    <form action="index.php?url=update_sp_kc" method="POST">
        <input type="hidden" name="id_sp" value="<?= $id_sp ?>">
        <input type="hidden" name="id_kc" value="<?= $id_kc ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Sửa biến thể</h3>
                    <div class="tile-body">
                        <div class="row element-button">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label class="control-label">Mã</label>
                                <input class="form-control" type="text" name="id" value="<?= $id ?>" readonly
                                    style='background:#EDF5FF'>
                            </div>

                            <div class="form-group col-md-3">
                                <label class="control-label">Tên sản phẩm</label>
                                <input class="form-control" type="text" name="ten" value="<?= $ten_san_pham ?>" disabled
                                    style='background:#EDF5FF'>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleSelect1" class="control-label">Kích cỡ</label>
                                <select class="form-control" name="kich_co">
                                    <option value="<?= $id_kc ?>"><?= $kich_co ?></option>
                                    <?php foreach ($ds_kich_co as $kich_co) :
                                        extract($kich_co);
                                    ?>
                                    <option value="<?= $id ?>"><?= $kich_co ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label class="control-label">Giá</label>
                                <input class="form-control" type="number" name="gia" value="<?= $gia ?>">
                            </div>

                            <div class="form-group col-md-3">
                                <label class="control-label">Số lượng</label>
                                <input class="form-control" type="number" name="so_luong" value="<?= $so_luong ?>">
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleSelect1" class="control-label">Trạng thái</label>
                                <select name="trang_thai" class="form-control" id="exampleSelect1">
                                    <option value="0" <?= $ct_sp_kc["trang_thai"] == 0 ? "selected" : "" ?>>Không bán
                                    </option>
                                    <option value="1" <?= $ct_sp_kc["trang_thai"] == 1 ? "selected" : "" ?>>Đang bán
                                    </option>

                                </select>
                            </div>
                        </div>
                        <input type="submit" class="btn btn-save" value="Lưu Lại">
                    </div>
                </div>
            </div>
        </div>
        <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
    </form>
    </div>
</main>