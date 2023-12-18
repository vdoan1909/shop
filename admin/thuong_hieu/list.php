<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách thương hiệu</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?url=them_thuong_hieu" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Tạo mới thương hiệu</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã thương hiệu</th>
                                <th>Tên thương hiệu</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ds_thuong_hieu as $thuong_hieu) :
                                extract($thuong_hieu);
                                $xoa_thuong_hieu = "index.php?url=xoa_thuong_hieu&id_th=" . $id;
                                $sua_thuong_hieu = "index.php?url=sua_thuong_hieu&id_th=" . $id;
                            ?>
                                <tr>
                                    <td><?= $id ?></td>
                                    <td><?= $ten_thuong_hieu ?></td>
                                    <td>
                                        <?php if ($trang_thai == 1) { ?>
                                            Đang hoạt động
                                        <?php } else { ?>
                                            Không hoạt động
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa">
                                            <a style="color: red;" href="<?= $xoa_thuong_hieu ?>" onclick="return confirm('Xoá là mất luôn ?')">
                                                <i class=" fas fa-trash-alt"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                            <a style="color: #f59d39;" href="<?= $sua_thuong_hieu ?>">
                                                <i class="fas fa-edit"></i>
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
</main>