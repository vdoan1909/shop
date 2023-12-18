<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách phương thức thanh toán</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?url=them_pt_tt" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Tạo mới phương thức thanh toán
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã phương thức thanh toán</th>
                                <th>Phương thức thanh toán</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ds_pt_tt as $pt_tt) :
                                extract($pt_tt);
                                $sua_pt_tt = "index.php?url=sua_pt_tt&id_pt_tt=" . $id;
                            ?>
                                <tr>
                                    <td><?= $id ?></td>
                                    <td><?= $pttt ?></td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                            <a style="color: #f59d39;" href="<?= $sua_pt_tt ?>">
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