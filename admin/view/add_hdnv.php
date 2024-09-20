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
                        <form class="form-horizontal" action="./index.php?act=add_hdnv" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm hợp đồng nhân viên</h4>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Mã Nhân viên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Mã hợp đồng" disabled>
                                    </div>

                                </div>
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
                                        <input type="text"  class="form-control" placeholder="Điền ngày kí hợp đồng" required>
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Ngày kết thúc hợp đồng</label>
                                    <div class="col-sm-9">
                                        <input type="text"  class="form-control" placeholder="Điền ngày kết thúc hợp đồng" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Tình trạng hợp đồng hợp đồng</label>
                                    <div class="col-sm-9">
                                        <input type="text"  class="form-control" placeholder="Điền tình trạng hợp đồng" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Ghi chú</label>
                                    <div class="col-sm-9">
                                        <input type="text"  class="form-control" placeholder="Điền ghi chú" required>
                                    </div>
                                </div>

                                <div class="wrap-btn">
                                    <input type="submit" name="btn_add" class="btn btn-lg btn-block btn-outline-success" id="ts-success" value="Submit">

                                </div>
                        </form>
                       
                    </div>

                </div>


            </div>

            

        </div>

    </div>




    <?php include_once "footer.php" ?>