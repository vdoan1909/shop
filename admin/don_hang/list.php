<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách đơn hàng</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                            <tr>
                                <th>Mã đơn hàng</th>
                                <th>Email khách hàng</th>
                                <th>Tên người nhận</th>
                                <th>Email người nhận</th>
                                <th>SĐT người nhận</th>
                                <th>Địa chỉ người nhận</th>
                                <th>Ghi chú</th>
                                <th>Phương thức thanh toán</th>
                                <th>Ngày đặt</th>
                                <th>Tổng tiền</th>
                                <th>Tổng tiền đã trả</th>
                                <th>Trạng thái</th>
                                <th>Mã QR</th>
                                <th>##</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($ds_don_hang as $don_hang) :
                                extract($don_hang);
                                $sua_don_hang = "index.php?url=sua_don_hang&id_dh=" . $id;
                                $fm_tong_tien = number_format($tong_tien, 0, ',', '.');
                                $fm_tong_tien_da_tra = number_format($tong_tien_da_tra, 0, ',', '.');
                                $fm_ngay_dat = date("d-m-Y", strtotime($ngay_dat));

                                $class_ttdh = "";
                                switch ($id_tt_don_hang) {
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
                                    <td><?= $id ?></td>
                                    <td><?= $email ?></td>
                                    <td><?= $ten_nguoi_nhan ?></td>
                                    <td><?= $email_nguoi_nhan ?></td>
                                    <td><?= $sdt_nguoi_nhan ?></td>
                                    <td><?= $dc_nguoi_nhan ?></td>
                                    <td><?= $ghi_chu ?></td>
                                    <td><?= $pttt ?></td>
                                    <td><?= $fm_ngay_dat ?></td>
                                    <td><?= $fm_tong_tien ?> VND</td>
                                    <td><?= $fm_tong_tien_da_tra ?> VND</td>
                                    <td>
                                        <span class="badge <?= $class_ttdh ?>"><?= $ttdh ?></span>
                                    </td>
                                    <td>
                                        <img style="width: 200px; height: 200px; object-fit: cover;" src="../assets/qr/<?= $qr ?>" alt="">
                                    </td>
                                    <td>
                                        <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                            <a style="color: #f59d39;" href="<?= $sua_don_hang ?>">
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