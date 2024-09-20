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
                        <form class="form-horizontal" action="index.php?act=update_hdnv" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Sửa hợp đồng nhân viên</h4>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Mã hợp đồng</label>
                                    <div class="col-sm-9">
                                        <select name="" id="">Mã hợp đồng
                                            <option value=""></option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Ngày kí hợp đồng</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_cate" class="form-control" placeholder="Điền ngày kí hợp đồng" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Ngày kết thúc hợp đồng</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_cate" class="form-control" placeholder="Điền ngày kết thúc hợp đồng" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Tình trạng hợp đồng hợp đồng</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_cate" class="form-control" placeholder="Điền tình trạng hợp đồng" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Ghi chú</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_cate" class="form-control" placeholder="Điền ghi chú" required>
                                    </div>
                                </div>

                                <div class="modal-footer">
                                                <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Đợi tí nhập lại</button>
                                                <input type="submit" name="btn_update" class="btn btn-danger margin-5 text-white btn-lg " value="Cập nhật">
                                 </div>
                        </form>
 

                </div>


            </div>

            

        </div>

    </div>




    <?php include_once "footer.php" ?>