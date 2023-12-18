<?php
require_once "public/nav-left.php";
extract($ct_san_pham);
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Thêm mới biến thể</a></li>
        </ul>
    </div>
    <form action="index.php?url=them_sp_kc" method="POST">
        <input type="hidden" name="id" value="<?= $id ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title">Thêm mới biến thể</h3>
                    <div class="tile-body">
                        <div class="row element-button">
                        </div>
                        <div class="row">
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên sản phẩm</label>
                                <input class="form-control" type="text" name="ten" value="<?= $ten ?>" disabled
                                    style='background:#EDF5FF'>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="exampleSelect1" class="control-label">Kích cỡ</label>
                                <select class="form-control" name="kich_co">
                                    <option value="">-- Chọn kích cỡ --</option>
                                    <?php foreach ($ds_kich_co as $kich_co) :
                                        extract($kich_co);
                                    ?>
                                    <option value="<?= $id ?>"><?= $kich_co ?></option>
                                    <?php endforeach ?>
                                </select>
                                <p style="color: red; margin-top: 5px;"><?= $errors['kich_co'] ?? "" ?></p>
                            </div>

                            <div class="form-group col-md-3">
                                <label class="control-label">Giá</label>
                                <input class="form-control" type="number" name="gia">
                                <p style="color: red; margin-top: 5px;"><?= $errors['gia'] ?? "" ?></p>
                            </div>

                            <div class="form-group col-md-3">
                                <label class="control-label">Số lượng</label>
                                <input class="form-control" type="number" name="so_luong">
                                <p style="color: red; margin-top: 5px;"><?= $errors['so_luong'] ?? "" ?></p>
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