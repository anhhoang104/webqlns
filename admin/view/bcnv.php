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
                        <h5 class="card-title">Danh sách chức vụ</h5>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã bằng cấp</th>
                                        <th>Mã nhân viên</th>
                                        <th>Mã chuyên ngành</th>
                                        <th>Tên bằng cấp</th>
                                        <th>Loại bằng</th>
                                        <th>Tên trường</th>
                                        <th>Năm tốt nghiệp</th>
                                        <th>Hình thức đào tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
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
                                        </tr>                                   
                                </tbody>
                                
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script>
   
    $('#zero_config').DataTable();
</script>


<?php include_once "footer.php" ?>