<?php
require_once "public/nav-left.php";
extract($ct_pt_tt);
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách phương thức thanh toán</li>
            <li class="breadcrumb-item"><a href="#">Sửa phương thức thanh toán</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=update_pt_tt" class="tile" method="POST">
                <input type="hidden" name="id" value="<?= $id ?>">
                <h3 class="tile-title">Sửa phương thức thanh toán</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên phương thức thanh toán</label>
                            <input name="pt_tt" value="<?= $pttt ?>" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['pt_tt'] ?? "" ?></p>
                            <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</main>