<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách kích cỡ</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?url=them_kich_co" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Tạo mới kích cỡ</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã kích cỡ</th>
                                <th>Tên kích cỡ</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ds_kich_co as $kich_co) :
                                extract($kich_co);
                                $xoa_kich_co = "index.php?url=xoa_kich_co&id_kc=" . $id;
                                $sua_kich_co = "index.php?url=sua_kich_co&id_kc=" . $id;
                            ?>
                                <tr>
                                    <td><?= $id ?></td>
                                    <td><?= $kich_co ?></td>
                                    <td>
                                        <?php if ($trang_thai == 1) { ?>
                                            Đang bán
                                        <?php } else { ?>
                                            Không bán
                                        <?php } ?>
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa">
                                            <a style="color: red;" href="<?= $xoa_kich_co ?>" onclick="return confirm('Xoá là mất luôn ?')">
                                                <i class=" fas fa-trash-alt"></i>
                                            </a>
                                        </button>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                            <a style="color: #f59d39;" href="<?= $sua_kich_co ?>">
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