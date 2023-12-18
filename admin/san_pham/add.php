<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách sản phẩm</li>
            <li class="breadcrumb-item"><a href="#">Thêm sản phẩm</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=them_san_pham" class="tile" method="POST" enctype="multipart/form-data">
                <h3 class="tile-title">Tạo mới sản phẩm</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label">Ảnh sản phẩm</label>
                            <div id="myfileupload">
                                <input name="anh" type="file" id="uploadfile" />
                            </div>
                            <p style="color: red; margin-top: 5px;"><?= $errors['anh'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên sản phẩm</label>
                            <input name="ten" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten'] ?? "" ?></p>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Mô tả sản phẩm</label>
                            <input name="mo_ta" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['mo_ta'] ?? "" ?></p>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Thể loại</label>
                            <select name="id_the_loai" class="form-control" id="exampleSelect1">
                                <option value="" selected hidden disabled>-- Chọn thể loại --</option>
                                <?php foreach ($ds_the_loai as $the_loai) :
                                    extract($the_loai);
                                ?>
                                    <option value="<?= $id ?>"><?= $ten_loai ?></option>
                                <?php endforeach; ?>
                            </select>
                            <p style="color: red; margin-top: 5px;"><?= $errors['the_loai'] ?? "" ?></p>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Thương hiệu</label>
                            <select name="id_thuong_hieu" class="form-control" id="exampleSelect1">
                                <option value="" selected hidden disabled>-- Chọn thương hiệu --</option>
                                <?php foreach ($ds_thuong_hieu as $thuong_hieu) :
                                    extract($thuong_hieu);
                                ?>
                                    <option value="<?= $id ?>"><?= $ten_thuong_hieu ?></option>
                                <?php endforeach; ?>
                            </select>
                            <p style="color: red; margin-top: 5px;"><?= $errors['thuong_hieu'] ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Thêm mới</button>

                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
            </form>
        </div>
    </div>
</main>