<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="index.php?act=danh-sach-san-pham"><b>Danh sách sản phẩm </b></a>
            </li>
            <li class="breadcrumb-item"><a href="#">Biến thể sản phẩm</a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <style>
                .sanphamchitiet {
                    width: 50%;
                }

                .list {
                    padding: 0;
                    margin: 0;
                }

                .list li {
                    list-style-type: none;
                    padding: 0;
                    margin: 0;
                }

                .list p {
                    padding: 0;
                    margin: 0;
                }
                </style>
                <div class="chitietsanpham" style="width:50%;padding:20px">
                    <?php extract($ct_san_pham) ?>
                    <h5><?= $ten ?? '' ?></h5>
                    <ul class="list">
                        <p><b>Mô tả:</b><?= $mo_ta ?? "" ?></p>
                        <li><b>Thể loại:</b><?= $ten_loai ?? "" ?></li>
                        <li><b>Thương hiệu:</b><?= $ten_thuong_hieu ?? "" ?></li>
                        <li><b>Hình ảnh:</b></li>
                    </ul>
                    <img src="../assets/upload/<?= $anh ?? "" ?>" alt="" width="200px">
                </div>
                <h3 class="tile-title"></h3>
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?url=them_sp_kc&id_sp=<?= $id ?>"
                                title="Thêm"><i class="fas fa-plus"></i>
                                Thêm biến thể sản phẩm</a>
                        </div>
                    </div>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kích cỡ</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Trạng thái</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ct_sp_kc as $sp_kc) :
                                extract($sp_kc);
                                $sua_sp_kc = "index.php?url=sua_sp_kc&id_sp_kc=" . $id;
                                $xoa_sp_kc = "index.php?url=xoa_sp_kc&id_sp_kc=" . $id ."&id_sp=".$ct_san_pham["id"];
                                $fm_gia = number_format($gia, 0, ',', '.');
                            ?>
                            <tr>
                                <td><?= $id ?></td>
                                <td><?= $kich_co ?></td>
                                <td><?= $so_luong ?></td>
                                <td>
                                    <span class="badge <?= $so_luong > 0 ? "bg-success" : "bg-danger"; ?>">
                                        <?= $so_luong > 0 ? "Còn hàng" : "Hết hàng" ?>
                                    </span>
                                </td>
                                <td><?= $fm_gia ?></td>
                                <td>
                                    <?= $trang_thai == 1 ? "Đang bán" : "Không bán" ?>
                                </td>
                                <td>
                                    <a href="<?= $xoa_sp_kc ?>" onclick="return confirm('Bạn chắc chắn muốn xóa chứ ?')"
                                        ;>
                                        <button class="btn btn-primary btn-sm trash" type="button" title="Xóa"><i
                                                class="fas fa-trash-alt"></i>
                                        </button>
                                    </a>

                                    <a href="<?= $sua_sp_kc ?>">
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"
                                            id="show-emp" data-toggle="modal" data-target="#ModalUP"><i
                                                class="fas fa-edit"></i></button>
                                    </a>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    <a class="btn btn-cancel" href="index.php?url=ds_san_pham">Danh Sách Sản Phẩm</a>
                </div>
            </div>
        </div>
    </div>
</main>