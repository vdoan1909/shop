<?php
require_once "public/nav-left.php";
extract($ct_the_loai);
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách thể loại</li>
            <li class="breadcrumb-item"><a href="#">Sửa thể loại</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=update_the_loai" class="tile" method="POST">
                <h3 class="tile-title">Sửa thể loại</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Mã thể loại</label>
                            <input name="id" value="<?= $id ?>" class="form-control" type="text" readonly>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên thể loại</label>
                            <input name="ten_loai" value="<?= $ten_loai ?>" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['ten_loai'] ?? "" ?></p>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Trạng thái</label>
                            <select name="trang_thai" class="form-control" id="exampleSelect1">
                                <?php if ($trang_thai == 1) { ?>
                                <option value="<?= $trang_thai ?>">Đang hoạt động</option>
                                <option value=" 0">Không hoạt động</option>
                                <?php } else { ?>
                                <option value="<?= $trang_thai ?>">Không hoạt động</option>
                                <option value="1">Đang hoạt động</option>
                                <?php } ?>
                            </select>
                            <p style="color: red; margin-top: 5px;"><?= $errors['trang_thai'] ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <button class="btn btn-save" type="submit">Sửa</button>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
            </form>
        </div>
    </div>

</main>