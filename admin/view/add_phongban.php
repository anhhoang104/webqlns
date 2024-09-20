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
                        <form class="form-horizontal" action="./index.php?act=add_phongban" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm phòng ban</h4>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Mã phòng ban</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Mã phòng ban" disabled>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Tên phòng ban</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_cate" class="form-control" placeholder="Điền tên phòng ban" required>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">SDT phòng ban</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_cate" class="form-control" placeholder="Điền số phòng ban" required>
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