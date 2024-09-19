<?php include_once "header.php" ?>
<?php include_once "nav.php" ?>

<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                
            </div>
        </div>
    </div>

    <div class="container-fluid">
      
        <div class="row">
            <div class="col-12">


                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Danh sách nhân viên</h5>
                        <div class="filter">
                            <form action="./index.php?act=list_product" method="POST">
                                <select name="idcate" class="sel-filter">
                                    <option value="0">Tất cả</option>
                                    <!-- <?php
                                    foreach ($ds_loai as $loai) {
                                        extract($loai);
                                        if ($idcate == $id_cate) {
                                            echo '<option value="' . $id_cate . '" selected>' . $name_cate . '</option>';
                                        } else {
                                            echo '<option value="' . $id_cate . '">' . $name_cate . '</option>';
                                        }
                                    }
                                    ?> -->
                                </select>
                                <input type="submit" value="Lọc" name="btn_filter" class="btn-filter">
                            </form>
                        </div>
                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã Nvien</th>
                                        <th>Tên Nhân viên</th>
                                        <th>Ngày sinh</th>
                                        <th>Quê Quán</th>
                                        <th>Hộ Khẩu</th>
                                        <th>Địa chỉ</th>
                                        <th>Quốc tịch</th>
                                        <th>Dân tộc</th>
                                        <th>Tôn giáo</th>
                                        <th>Giới tính</th>
                                        <th>Trình độ văn hóa</th>
                                        <th>Điện thoại</th>
                                        <th>Email</th>
                                        <th>Ngày vào công ty</th>
                                        <th>Mã phòng ban</th>
                                        <th>Mã chức vụ</th>
                                        <th>Thâm niên</th>
                                        <th>Số CMND</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>


                                    <?php ?>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-danger margin-5 text-white btn-lg " data-toggle="modal" data-target="#Modal2">
                                                    <i class="mdi mdi-delete-circle"></i><span>Xóa</span>
                                                </button>
                                                
                                                <button type="button" class="btn btn-warning btn-lg"> <a href="index.php?act=update_nvien" style="color:aliceblue"><i class="mdi mdi-auto-fix"></i><span>Sửa</span></a></button>

                                            </td>
                                        </tr>
                                        
                                    <?php  ?>

                                </tbody>
                               
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="view/assets/libs/jquery/dist/jquery.min.js"></script>

    <!-- this page js -->
    <script src="view/assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="view/assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="view/assets/extra-libs/DataTables/datatables.min.js"></script>
<script>
   
    $('#zero_config').DataTable();
</script>


<?php include_once "footer.php" ?>