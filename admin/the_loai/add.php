<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách thể loại</li>
            <li class="breadcrumb-item"><a href="#">Thêm thể loại</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=them_tl" class="tile" method="POST">
                <h3 class="tile-title">Tạo mới thể loại</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên thể loại</label>
                            <input name="ten_loai" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten_loai'] ?? "" ?></p>
                            <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>

</main>