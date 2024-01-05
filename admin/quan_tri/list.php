<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách quản trị</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <form action="index.php?url=ds_quan_tri" class="row" method="post">
                            <div class="col-sm-12 col-md-6">
                                <div id="sampleTable_filter" class="dataTables_filter">
                                    <label>Tìm kiếm:
                                        <input type="text" name="ten_quan_tri" class="form-control form-control-sm"
                                            aria-controls="sampleTable"
                                            value="<?= isset($_POST["ten_quan_tri"]) ? $_POST["ten_quan_tri"] : '' ?>">
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
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($ds_quan_tri as $quan_tri) :
                                            extract($quan_tri);
                                        ?>
                                        <tr>
                                            <td><?= $id ?></td>
                                            <td>
                                                <img style="width: 200px; height: 200px; object-fit: cover;"
                                                    src="../assets/upload/<?= $anh ?>" alt="">
                                            </td>
                                            <td><?= $ten ?></td>
                                            <td><?= $email ?></td>
                                            <td><?= $dia_chi ?></td>
                                            <td>
                                                <?php if ($role == 1) {
                                                        echo "Quản trị";
                                                    } ?>
                                            </td>
                                            <td>
                                                <?php if ($trang_thai == 1) { ?>
                                                Đang hoạt động
                                                <?php } else { ?>
                                                Không hoạt động
                                                <?php } ?>
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