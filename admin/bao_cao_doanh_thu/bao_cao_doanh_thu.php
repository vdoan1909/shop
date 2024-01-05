<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><b>Báo cáo doanh thu </b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class='icon  bx bxs-user fa-3x'></i>
                <div class="info">
                    <h4>Tổng Nhân viên</h4>
                    <p><b><?= $tong_nhan_vien["tong_nhan_vien"] ?> nhân viên</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small info coloured-icon"><i class='icon bx bxs-purchase-tag-alt fa-3x'></i>
                <div class="info">
                    <h4>Tổng sản phẩm</h4>
                    <p><b><?= $tong_so_luong_san_pham_dang_co["so_luong_san_pham"] ?> sản phẩm</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-shopping-bag-alt'></i>
                <div class="info">
                    <h4>Tổng đơn hàng</h4>
                    <p><b><?= $tong_don_hang["tong_don_hang"] ?> đơn hàng</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <div class="widget-small primary coloured-icon"><i class='icon fa-3x bx bxs-chart'></i>
                <div class="info">
                    <h4>Tổng thu nhập</h4>
                    <p><b><?php
                            $fm_tong_thu_nhap = number_format($tong_thu_nhap["tong_thu_nhap"], 0, ',', '.');
                            echo $fm_tong_thu_nhap ?> đ</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small warning coloured-icon"><i class='icon fa-3x bx bxs-tag-x'></i>
                <div class="info">
                    <h4>Hết hàng</h4>
                    <p><b><?= $sap_het_hang["sap_het_hang"] ?> sản phẩm</b></p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-3">
            <div class="widget-small danger coloured-icon"><i class='icon fa-3x bx bxs-receipt'></i>
                <div class="info">
                    <h4>Đơn hàng hủy</h4>
                    <p><b><?= $don_hang_bi_huy["don_hang_bi_huy"] ?> đơn hàng</b></p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">SẢN PHẨM BÁN CHẠY</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Giá tiền</th>
                                <th>Danh mục</th>
                            </tr>
                        </thead>
                        <?php foreach ($san_pham_ban_chay_thong_ke as $san_pham) :
                            $fm_gia_san_pham_ban_chay = number_format($san_pham["gia"], 0, ',', '.'); ?>

                        <tbody>
                            <tr>
                                <td><?= $san_pham["id_sp"] ?></td>
                                <td><?= $san_pham["ten"] ?></td>
                                <td><?= $fm_gia_san_pham_ban_chay ?> đ</td>
                                <td><?= $san_pham["ten_loai"] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div>
                    <h3 class="tile-title">SẢN PHẨM ĐÃ HẾT</h3>
                </div>
                <div class="tile-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã sản phẩm</th>
                                <th>Tên sản phẩm</th>
                                <th>Ảnh</th>
                                <th>Số lượng</th>
                                <th>Tình trạng</th>
                                <th>Giá tiền</th>
                                <th>Danh mục</th>
                                <th>Thương hiệu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($san_pham_da_het as $san_pham_dh) :
                                $fm_gia_san_pham_da_het = number_format($san_pham_dh["gia"], 0, ',', '.'); ?>
                            <tr>
                                <td><?= $san_pham_dh["id"] ?></td>
                                <td><?= $san_pham_dh["ten"] ?></td>
                                <td><img src="../assets/upload/<?= $san_pham_dh["anh"] ?>" alt="" width="100px;"></td>
                                <td>0</td>
                                <td><span class="badge bg-danger">Hết hàng</span></td>
                                <td><?= $fm_gia_san_pham_da_het ?> đ</td>
                                <td><?= $san_pham_dh["ten_loai"] ?></td>
                                <td><?= $san_pham_dh["ten_thuong_hieu"] ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">DỮ LIỆU HÀNG THÁNG</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="tile">
                <h3 class="tile-title">THỐNG KÊ DOANH SỐ</h3>
                <div class="embed-responsive embed-responsive-16by9">
                    <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                </div>
            </div>
        </div>
    </div>

    <div class="text-right" style="font-size: 12px">
        <p><b>Hệ thống quản lý V2.0 | Code by Trường</b></p>
    </div>
</main>