<?php
require_once "public/nav-left.php";
extract($ct_kich_co);
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách kích cỡ</li>
            <li class="breadcrumb-item"><a href="#">Sửa kích cỡ</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=update_kich_co" class="tile" method="POST">
                <h3 class="tile-title">Sửa kích cỡ</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Mã kích cỡ</label>
                            <input name="id" value="<?= $id ?>" class="form-control" type="text" readonly>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Kích cỡ</label>
                            <input name="kich_co" value="<?= $kich_co ?>" class="form-control" type="text">
                            <p style="color: red; margin-top: 5px;"><?= $errors['kich_co'] ?? "" ?></p>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Trạng thái</label>
                            <select name="trang_thai" class="form-control" id="exampleSelect1">
                                <?php if ($trang_thai == 1) { ?>
                                    <option value="<?= $trang_thai ?>">Đang bán</option>
                                    <option value=" 0">Không bán</option>
                                <?php } else { ?>
                                    <option value="<?= $trang_thai ?>">Không bán</option>
                                    <option value="1">Đang bán</option>
                                <?php } ?>
                            </select>
                            <p style="color: red; margin-top: 5px;"><?= $errors['trang_thai'] ?? "" ?></p>
                        </div>
                    </div>
                </div>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                <button class="btn btn-save" type="submit">Sửa</button>
            </form>
        </div>
    </div>

</main>