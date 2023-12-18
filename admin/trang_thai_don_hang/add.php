<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách trạng thái đơn hàng</li>
            <li class="breadcrumb-item"><a href="#">Thêm trạng thái đơn hàng</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=them_tt_dh" class="tile" method="POST">
                <h3 class="tile-title">Tạo mới trạng thái đơn hàng</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên trạng thái đơn hàng</label>
                            <input name="tt_dh" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['tt_dh'] ?? "" ?></p>
                            <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Thêm mới</button>
            </form>
        </div>
    </div>
</main>