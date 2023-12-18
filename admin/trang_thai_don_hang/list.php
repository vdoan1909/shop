<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách trạng thái đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?url=them_tt_dh" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Tạo mới trạng thái đơn hàng
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã trạng thái đơn hàng</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ds_tt_dh as $tt_dh) :
                                extract($tt_dh);
                                $sua_tt_dh = "index.php?url=sua_tt_dh&id_tt_dh=" . $id;
                            ?>
                                <tr>
                                    <td><?= $id ?></td>
                                    <td><?= $trang_thai_don_hang ?></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                            <a style="color: #f59d39;" href="<?= $sua_tt_dh ?>">
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