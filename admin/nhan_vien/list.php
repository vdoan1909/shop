<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách khách hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <form action="index.php?url=ds_nhan_vien" class="row" method="post">
                            <div class="col-sm-12 col-md-6">
                                <div id="sampleTable_filter" class="dataTables_filter">
                                    <label>Tìm kiếm:
                                        <input type="text" name="ten_nhan_vien" class="form-control form-control-sm"
                                            aria-controls="sampleTable"
                                            value="<?= isset($_POST["ten_nhan_vien"]) ? $_POST["ten_nhan_vien"] : '' ?>">
                                    </label>
                                    <button style="height: 48px;" class="btn btn-save" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>

                        <div class="row">
                            <div class="col-sm-12">
                                <table class="table table-hover table-bordered" id="sampleTable">
                                    <thead>
                                        <tr>
                                            <th>Mã</th>
                                            <th>Ảnh</th>
                                            <th>Tên</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Cấp bậc</th>
                                            <th>Trạng thái</th>
                                            <th>Chức năng</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($ds_nhan_vien as $nhan_vien) :
                                            extract($nhan_vien);
                                            $sua_nhan_vien = "index.php?url=sua_nhan_vien&id_nv=" . $id;
                                            $xoa_nhan_vien = "index.php?url=xoa_nhan_vien&id_nv=" . $id;
                                        ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td>
                                                <?php if (isset($anh)) { ?>
                                                <img style="width: 100px; height: 100px; object-fit: cover;"
                                                    src="../assets/upload/<?= $anh ?>" alt="">
                                                <?php } else { ?>
                                                <img style="width: 84px; height: 84px; object-fit: cover; border-radius: 50%;"
                                                    src="https://inkythuatso.com/uploads/thumbnails/800/2023/03/8-anh-dai-dien-trang-inkythuatso-03-15-26-54.jpg"
                                                    alt="">
                                                <?php } ?>
                                            </td>
                                            <td><?= isset($ten) ? $ten : "Chưa cập nhật" ?></td>
                                            <td><?= $email ?></td>
                                            <td><?= isset($dia_chi) ? $dia_chi : "Chưa cập nhật" ?></td>
                                            <td>
                                                <?php if ($role == 2) {
                                                        echo "Bán hàng";
                                                    } else if ($role == 3) {
                                                        echo "Tư vấn";
                                                    } else if ($role == 4) {
                                                        echo "Dịch vụ";
                                                    } else if ($role == 5) {
                                                        echo "Thu ngân";
                                                    } else if ($role == 6) {
                                                        echo "Quản kho";
                                                    } else if ($role == 7) {
                                                        echo "Bảo trì";
                                                    } else if ($role == 8) {
                                                        echo "Kiểm hàng";
                                                    }else if($role == 9){
                                                    echo "Bảo vệ";
                                                    }else if($role == 10){
                                                    echo "Tạp vụ";
                                                    }
                                                    ?>
                                            </td>
                                            <td>
                                                <?php if ($trang_thai == 1) { ?>
                                                Đang hoạt động
                                                <?php } else { ?>
                                                Không hoạt động
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"
                                                    id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                                    <a style="color: #f59d39;" href="<?= $sua_nhan_vien ?>">
                                                        <i class="fas fa-edit"></i>
                                                    </a>
                                                </button>
                                                <button class="btn btn-primary btn-sm trash" type="button" title="Xóa">
                                                    <a style="color: red;" href="<?= $xoa_nhan_vien ?>"
                                                        onclick="return confirm('Xoá là mất luôn ?')">
                                                        <i class=" fas fa-trash-alt"></i>
                                                    </a>
                                                </button>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>