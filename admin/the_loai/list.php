<?php require_once "public/nav-left.php"; ?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách thể loại</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" href="index.php?url=them_tl" title="Thêm">
                                <i class="fas fa-plus"></i>
                                Tạo mới thể loại</a>
                        </div>
                    </div>

                    <div id="sampleTable_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                        <form action="index.php" class="row" method="post">
                            <div class="col-sm-12 col-md-6">
                                <div class="dataTables_length" id="sampleTable_length">
                                    <label>Thể loại
                                        <select id="lengthSelector" name="the_loai" aria-controls="sampleTable"
                                            class="form-control form-control-sm" fdprocessedid="3g6j95">
                                            <option value="0">Tất cả</option>
                                            <?php foreach ($ds_the_loai as $the_loai) : ?>
                                            <option value="<?= $the_loai["id"] ?>"><?= $the_loai["ten_loai"] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-6">
                                <div id="sampleTable_filter" class="dataTables_filter">
                                    <label>Tìm kiếm:
                                        <input type="text" name="ten_san_pham" class="form-control form-control-sm"
                                            aria-controls="sampleTable"
                                            value="<?= isset($_POST["ten_san_pham"]) ? $_POST["ten_san_pham"] : '' ?>">
                                    </label>
                                    <button style="height: 48px;" class="btn btn-save" type="submit">Tìm kiếm</button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <table class="table table-hover table-bordered" id="sampleTable">
                                <thead>
                                    <tr>
                                        <th>Mã thể loại</th>
                                        <th>Tên thể loại</th>
                                        <th>Trạng thái</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($ds_the_loai as $the_loai) :
                                        extract($the_loai);
                                        $xoa_the_loai = "index.php?url=xoa_the_loai&id_tl=" . $id;
                                        $sua_the_loai = "index.php?url=sua_the_loai&id_tl=" . $id;
                                    ?>
                                    <tr>
                                        <td><?= $id ?></td>
                                        <td><?= $ten_loai ?></td>
                                        <td>
                                            <?php if ($trang_thai == 1) { ?>
                                            Đang hoạt động
                                            <?php } else { ?>
                                            Không hoạt động
                                            <?php } ?>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary btn-sm trash" type="button" title="Xóa">
                                                <a style="color: red;" href="<?= $xoa_the_loai ?>"
                                                    onclick="return confirm('Xoá là mất luôn ?')">
                                                    <i class=" fas fa-trash-alt"></i>
                                                </a>
                                            </button>
                                            <button class="btn btn-primary btn-sm edit" type="button" title="Sửa"
                                                id="show-emp" data-toggle="modal" data-target="#ModalUP">
                                                <a style="color: #f59d39;" href="<?= $sua_the_loai ?>">
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
        </div>
    </div>
</main>