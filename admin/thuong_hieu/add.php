<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách thương hiệu</li>
            <li class="breadcrumb-item"><a href="#">Thêm thương hiệu</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=them_thuong_hieu" class="tile" method="POST">
                <h3 class="tile-title">Tạo mới thương hiệu</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên thương hiệu</label>
                            <input name="ten_thuong_hieu" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten_thuong_hieu'] ?? "" ?></p>
                            <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>

</main>