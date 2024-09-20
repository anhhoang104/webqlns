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
                        <form class="form-horizontal" action="./index.php?act=add_category" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm chức năng</h4>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Mã chức năng</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Mã chức năng" disabled>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Tên chức năng</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="name_cate" class="form-control" placeholder="Điền tên chức năng" required>
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