<?php include_once "header.php" ?>
<?php include_once "nav.php" ?>

<div id="main-wrapper">

    <div class="page-wrapper">

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">

                </div>
            </div>
        </div>

        <div class="container-fluid">

            <div class="">
                <div class="">
                    <div class="card">
                        <form class="form-horizontal" action="index.php?act=update_nvct" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm nhân viên công tác</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã nhân viên</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="id_pro" class="form-control" placeholder="Mã nhân viên (auto)" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tennvien" class="col-sm-3 text-right control-label col-form-label">Tên công ty</label>
                                    <div class="col-sm-9">
                                       <input type="text"  class="form-control" placeholder="Tên công ty">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nct" class="col-sm-3 text-right control-label col-form-label">Ngày bắt đầu công tác</label>
                                    <div class="col-sm-9">
                                       <input type="text"  class="form-control" placeholder="Ngày bắt đầu công tác">
                                        
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nct" class="col-sm-3 text-right control-label col-form-label">Ngày kết thúc công tác</label>
                                    <div class="col-sm-9">
                                       <input type="text" class="form-control" placeholder="Ngày kết thúc công tác">
                                        
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="machucvu" class="col-sm-3 text-right control-label col-form-label">Mã chức vụ</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="machucvu" id="exampleFormControlSelect1" required>
                                           
                                        </select>
                                    </div>
                                </div>
                               

                                <div class="form-group row">
                                    <label for="date" class="col-sm-3 text-right control-label col-form-label">Ghi chú</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="note" placeholder="" >
                                           
                                        </div>
                                    </div>
                                </div>

                                
                    </div>

                    <div class="wrap-btn">
                        <input type="submit" name="btn_add" class="btn btn-lg btn-block btn-outline-success" id="ts-success" value="Submit">

                    </div>
                    </form>
                   
                </div>

            </div>


        </div>

        <footer class="footer text-center">
            All Rights Reserved by Matrix-admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
        </footer>

    </div>

</div>




<?php include_once "footer.php" ?>