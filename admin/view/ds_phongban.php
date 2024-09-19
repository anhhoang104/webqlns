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
                        <h5 class="card-title">Danh sách phòng ban</h5>

                        <div class="table-responsive">
                            <table id="zero_config" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Mã phòng ban</th>
                                        <th>Tên phòng ban</th>
                                        <th>Số điện thoại phòng ban</th>
                                        <th>Thao tác</th>

                                    </tr>
                                </thead>
                                <tbody>

                                   

                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td class="text-center">
                                                <button type="button" class="btn btn-danger margin-5 text-white btn-lg " data-toggle="modal" data-target="#Modal2">
                                                    <i class="mdi mdi-delete-circle"></i><span>Xóa</span>
                                                </button>
                                                
                                                <button type="button" class="btn btn-warning btn-lg"> <a href="index.php?act=update_phongban ?>" style="color:aliceblue"><i class="mdi mdi-auto-fix"></i><span>Sửa</span></a></button>

                                            </td>
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