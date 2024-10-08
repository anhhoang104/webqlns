<?php include_once "header.php" ?>
<?php include_once "nav.php" ?>
<div class="preloader">
    <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
    </div>
</div>
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
                        <form class="form-horizontal" action="index.php?act=update_quyentruycap" method="post" enctype="multipart/form-data">
                            <?php if (is_array($user))
                                extract($user);
                            ?>
                            <div class="card-body">
                                <h4 class="card-title">Cập nhật quyền truy cập</h4>

                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Mã nhân viên</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" value="" disabled>
                                    </div>

                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Tên đăng nhập</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="user_name" class="form-control" value="">
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Họ tên</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="full_name" class="form-control" value="">
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="email_user" class="form-control" value="">
                                    </div>


                                </div>
                                <div class="form-group row">
                                    <label for="email1" class="col-sm-3 text-right control-label col-form-label">Mật Khẩu</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="password" class="form-control" value="<?= $password ?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="" class="col-sm-3 text-right control-label col-form-label">Vai trò:</label>
                                    <div class="col-sm-9">
                                        <select required class="form-control" name="role" id="">
                                            <?php $arr = array('0' => 'Thành Viên', '1' => 'Admin'); ?>
                                            <?php foreach ($arr as $key => $value) { ?>
                                                <option value="<?php echo $key; ?>" <?php echo $key == $role ? 'selected="selected"' : ''; ?>><?php echo $value; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="wrap-btn">
                                    <input type="hidden" name="id_user" value="<?= $id_user ?>">
                                    <button type="button" class="btn btn-danger margin-5 text-white btn-lg mb-2" data-toggle="modal" data-target="#Modal2">
                                        <i class="mdi mdi-checkbox-marked-outline"></i><span>Xác nhận</span>
                                    </button>
                                    <input type="reset" class="btn btn-warning margin-5 text-white btn-lg mb-2" value="Nhập lại">
                                </div>
                                <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Alert Model</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                Bạn cần kiểm tra lại nội dung không
                                            </div>
                                            <div class="modal-body">
                                                <img src="uploads/f9e14634cb6769ae7e9395300b99d327.jpg" width="100% ">
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-warning btn-lg" data-dismiss="modal">Đợi tí nhập lại</button>
                                                <input type="submit" name="btn_update" class="btn btn-danger margin-5 text-white btn-lg " value="Cập nhật">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </form>

                    </div>

                </div>


            </div>

            <footer class="footer text-center">
                All Rights Reserved by Nhom4. Designed and Developed by Nhom4
            </footer>

        </div>

    </div>




    <?php include_once "footer.php" ?>