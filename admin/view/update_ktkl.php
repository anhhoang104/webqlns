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
                        <form class="form-horizontal" action="index.php?act=update_ktkl" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Sửa khen thưởng kỷ luật</h4>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Mã lí do</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" placeholder="Mã lí do" disabled>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Tên lí do</label>
                                    <div class="col-sm-9">
                                        <input type="text"  class="form-control" placeholder="Điền tên lí do" required>
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