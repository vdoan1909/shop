<?php
require_once "public/nav-left.php";
extract($ct_san_pham);
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Sửa sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=update_san_pham" class="tile" method="POST" enctype="multipart/form-data">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">
                    <div class="row">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <div class="form-group col-md-4">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <div id="myfileupload">
                                <input name="anh" type="file" id="uploadfile" />
                            </div>
                            <img style="margin-top: 20px; width: 200px; height: 200px; object-fit: cover;" src="../assets/upload/<?= $anh ?>" alt="">
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên sản phẩm</label>
                            <input name="ten" value="<?= $ten ?>" class="form-control" type="text">
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Mô tả sản phẩm</label>
                            <input name="mo_ta" value="<?= $mo_ta ?>" class="form-control" type="text">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Thể loại</label>
                            <select name="id_the_loai" class="form-control" id="exampleSelect1">
                                <option value="<?= $id_the_loai ?>"><?= $ten_loai ?>
                                </option>
                                <?php foreach ($ds_the_loai as $the_loai) :
                                    extract($the_loai);
                                ?>
                                    <option value="<?= $id ?>"><?= $ten_loai ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Thương hiệu</label>
                            <select name="id_thuong_hieu" class="form-control" id="exampleSelect1">
                                <option value="<?= $id_thuong_hieu ?>"><?= $ten_thuong_hieu ?>
                                </option>
                                <?php foreach ($ds_thuong_hieu as $thuong_hieu) :
                                    extract($thuong_hieu);
                                ?>
                                    <option value="<?= $id ?>"><?= $ten_thuong_hieu ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Trạng thái</label>
                            <select name="trang_thai" class="form-control" id="exampleSelect1">
                                <option value="0" <?= ($ct_san_pham["trang_thai"] == 1 || $ct_san_pham["trang_thai_tl"] == 0 || $ct_san_pham["trang_thai_th"] == 0) ? 'selected' : ''; ?>>
                                    Không bán
                                </option>
                                <option value="1" <?= ($ct_san_pham["trang_thai"] == 1 && $ct_san_pham["trang_thai_tl"] == 1 && $ct_san_pham["trang_thai_th"] == 1) ? 'selected' : ''; ?>>
                                    Đang bán
                                </option>
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