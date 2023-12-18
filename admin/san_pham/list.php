<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách sản phẩm</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?url=them_san_pham" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Tạo mới sản phẩm
                            </a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Ảnh sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Mô tả</th>
                                <th>Thể loại</th>
                                <th>Thương hiệu</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ds_san_pham as $san_pham) :
                                extract($san_pham);
                                $sua_san_pham = "index.php?url=sua_san_pham&id_sp=" . $id;
                                $san_pham_bien_the = "index.php?url=san_pham_kich_co&id_sp=" . $id;
                                $them_sp_kc = "index.php?url=them_sp_kc&id_sp=" . $id;
                            ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td>
                                    <img style="width: 200px; height: 200px; object-fit: cover;"
                                        src="../assets/upload/<?= $anh ?>" alt="">
                                </td>
                                <td><?= $ten ?></td>
                                <td><?= $mo_ta ?></td>
                                <td><?= $ten_loai ?></td>
                                <td><?= $ten_thuong_hieu ?></td>
                                <td>
                                    <?php if ($trang_thai == 1 && $trang_thai_tl == 1 && $trang_thai_th == 1) { ?>
                                    Đang bán
                                    <?php } else { ?>
                                    Không bán
                                    <?php } ?>
                                </td>
                                <td>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp"
                                        data-toggle="modal" data-target="#ModalUP">
                                        <a style="color: #f59d39;" href="<?= $sua_san_pham ?>">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                    </button>
                                    <a href="<?= $san_pham_bien_the ?>">
                                        <button class="btn btn-eye btn-sm trash" type="button" title="Xem">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                    </a>
                                    <a href="<?= $them_sp_kc ?>">
                                        <button class="btn btn-add btn-sm trash" type="button" title="Thêm"><i
                                                class="fas fa-plus"></i>
                                        </button>
                                    </a>
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