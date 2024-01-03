<?php require_once "nav-left.php"; ?>
<main class="app-content">
    <div class="row">
        <div class="col-md-12">
            <div class="app-title">
                <ul class="app-breadcrumb breadcrumb">
                    <li class="breadcrumb-item"><a href="#"><b>Bảng điều khiển</b></a></li>
                </ul>
                <div id="clock"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <!--Left-->
        <div class="col-md-12 col-lg-6">
            <div class="row">
                <!-- col-6 -->
                <div class="col-md-6">
                    <div class="widget-small primary coloured-icon"><i class='icon bx bxs-user-account fa-3x'></i>
                        <div class="info">
                            <h4>Tổng khách hàng</h4>
                            <p><b><?= $tong_so_khach_hang["tong_khach_hang"] ?> khách hàng</b></p>
                            <p class="info-tong">Tổng số khách hàng được quản lý.</p>
                        </div>
                    </div>
                </div>
                <!-- col-6 -->
                <div class="col-md-6">
                    <div class="widget-small info coloured-icon"><i class='icon bx bxs-data fa-3x'></i>
                        <div class="info">
                            <h4>Tổng sản phẩm</h4>
                            <p><b><?= $tong_so_luong_san_pham_dang_co["so_luong_san_pham"] ?> sản phẩm</b></p>
                            <p class="info-tong">Tổng số sản phẩm được quản lý.</p>
                        </div>
                    </div>
                </div>
                <!-- col-6 -->
                <div class="col-md-6">
                    <div class="widget-small warning coloured-icon"><i class='icon bx bxs-shopping-bags fa-3x'></i>
                        <div class="info">
                            <h4>Tổng đơn hàng</h4>
                            <p><b><?= $tong_don_hang["tong_don_hang"] ?> đơn hàng</b></p>
                            <p class="info-tong">Tổng số hóa đơn bán hàng trong tháng.</p>
                        </div>
                    </div>
                </div>
                <!-- col-6 -->
                <div class="col-md-6">
                    <div class="widget-small danger coloured-icon"><i class='icon bx bxs-error-alt fa-3x'></i>
                        <div class="info">
                            <h4>Sắp hết hàng</h4>
                            <p><b><?= $sap_het_hang["sap_het_hang"] ?> sản phẩm</b></p>
                            <p class="info-tong">Số sản phẩm cảnh báo hết cần nhập thêm.</p>
                        </div>
                    </div>
                </div>
                <!-- col-12 -->
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Tình trạng đơn hàng</h3>
                        <div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID đơn hàng</th>
                                        <th>Tên khách hàng</th>
                                        <th>Tổng tiền</th>
                                        <th>Trạng thái</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($don_hang_moi as $don_hang_moi) :
                                        $fm_tong_tien = number_format($don_hang_moi["tong_tien"], 0, ',', '.');

                                        $class_ttdh = "";
                                        switch ($don_hang_moi["id_tt_don_hang"]) {
                                            case '1':
                                                $class_ttdh = "bg-info";
                                                break;
                                            case '2';
                                                $class_ttdh = "bg-xacnhan";
                                                break;
                                            case '3':
                                                $class_ttdh = "bg-warning";
                                                break;
                                            case '4':
                                                $class_ttdh = "bg-success";
                                                break;
                                            case '5':
                                                $class_ttdh = "bg-danger";
                                                break;
                                        }
                                    ?>
                                        <tr>
                                            <td><?= $don_hang_moi["id"] ?></td>
                                            <td><?= $don_hang_moi["ten_nguoi_nhan"] ?></td>
                                            <td>
                                                <?= $fm_tong_tien ?>
                                            </td>
                                            <td><span class="badge <?= $class_ttdh ?>"><?= $don_hang_moi["ttdh"] ?></span>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- / div trống-->
                    </div>
                </div>
                <!-- / col-12 -->
                <!-- col-12 -->
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Khách hàng mới</h3>
                        <div>
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Tên khách hàng</th>
                                        <th>Ảnh</th>
                                        <th>Địa chỉ</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($thong_ke_thai_khoan_moi as $tai_khoan) : ?>
                                        <tr>
                                            <td><?= $tai_khoan["id"] ?></td>
                                            <td><?= $tai_khoan["ten"] ?></td>
                                            <td>
                                                <?php if (isset($tai_khoan["anh"])) { ?>
                                                    <img style="width: 100px; height: 100px; object-fit: cover;" src="../assets/upload/<?= $tai_khoan["anh"] ?>" alt="">
                                                <?php } else { ?>
                                                    <img style="width: 84px; height: 84px; object-fit: cover; border-radius: 50%;" src="https://inkythuatso.com/uploads/thumbnails/800/2023/03/8-anh-dai-dien-trang-inkythuatso-03-15-26-54.jpg" alt="">
                                                <?php } ?>
                                            </td>
                                            <td><span class="tag tag-success"><?= $tai_khoan["dia_chi"] ?></span></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <!-- / col-12 -->
            </div>
        </div>
        <!--END left-->
        <!--Right-->
        <div class="col-md-12 col-lg-6">
            <div class="row">
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Dữ liệu 6 tháng đầu vào</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <canvas class="embed-responsive-item" id="lineChartDemo"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="tile">
                        <h3 class="tile-title">Thống kê 6 tháng doanh thu</h3>
                        <div class="embed-responsive embed-responsive-16by9">
                            <canvas class="embed-responsive-item" id="barChartDemo"></canvas>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!--END right-->
    </div>
    <div class="text-center" style="font-size: 13px">
        <p><b>Copyright
                <script type="text/javascript">
                    document.write(new Date().getFullYear());
                </script> Phần mềm quản lý bán hàng | Dev By Trường
            </b></p>
    </div>
</main>