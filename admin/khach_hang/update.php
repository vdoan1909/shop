<?php
require_once "public/nav-left.php";
extract($thong_tin_tai_khoan);
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách khách hàng</li>
            <li class="breadcrumb-item"><a href="#">Sửa khách hàng</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <form action="index.php?url=update_khach_hang" class="tile" method="POST">
                <h3 class="tile-title">Sửa khách hàng</h3>
                <div class="tile-body">
                    <div class="row">
                        <div class="form-group  col-md-4">
                            <label class="control-label">Mã khách hàng</label>
                            <input name="id" value="<?= $id ?>" class="form-control" type="text" readonly>
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Ảnh</label>
                            <br>
                            <img style="width: 100px; height: 100px; object-fit: cover;" src="../assets/upload/<?= $anh ?>" alt="">
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Tên</label>
                            <input name="ten" value="<?= $ten ?>" class="form-control" type="text">
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Email</label>
                            <input name="email" value="<?= $email ?>" class="form-control" type="text">
                        </div>

                        <div class="form-group  col-md-4">
                            <label class="control-label">Địa chỉ</label>
                            <input name="dia_chi" value="<?= $dia_chi ?>" class="form-control" type="text">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Cấp bậc</label>
                            <select name="cap_bac" class="form-control" id="exampleSelect1">
                                <option value="<?= $role ?>">
                                    <?php if ($role == 0) {
                                        echo "Nhân viên";
                                    } ?>
                                </option>
                                <option value="1">Admin</option>
                                <option value="2">Bán hàng</option>
                                <option value="3">Tư vấn</option>
                                <option value="4">Dịch vụ</option>
                                <option value="5">Thu ngân</option>
                                <option value="6">Quản kho</option>
                                <option value="7">Bảo trì</option>
                                <option value="8">Kiểm hàng</option>
                                <option value="9">Bảo vệ</option>
                                <option value="10">Tạp vụ</option>
                            </select>
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
                        </div>
                    </div>
                </div>
                <p style="color: green; margin-top: 5px;"><?= $success ?? "" ?></p>
                <button class="btn btn-save" type="submit">Sửa</button>
            </form>
        </div>
    </div>

</main>