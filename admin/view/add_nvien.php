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
                        <form class="form-horizontal" action="index.php?act=add_nvien" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm nhân viên</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã nhân viên</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="id_pro" class="form-control" placeholder="Mã nhân viên (auto)" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tennvien" class="col-sm-3 text-right control-label col-form-label">Tên nhân viên</label>
                                    <div class="col-sm-9">
                                       <input type="text" name="name_pro" class="form-control" placeholder="Tên nhân viên">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="mapban" class="col-sm-3 text-right control-label col-form-label">Mã phòng ban</label>
                                    <div class="col-sm-9">
                                        <select class="form-control" name="idpb" id="exampleFormControlSelect1" required>
                                           
                                        </select>
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
                                    <label for="date" class="col-sm-3 text-right control-label col-form-label">Ngày sinh</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="date" placeholder="VD: 10/04/2004" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="que" class="col-sm-3 text-right control-label col-form-label">Quê quán</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="que" placeholder="VD: Hà Nội" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-3 text-right control-label col-form-label">Hộ khẩu</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="date" placeholder="VD: Mỹ Đình ,Nam Từ Liêm, Hà Nội" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="home" class="col-sm-3 text-right control-label col-form-label">Địa chỉ</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="home" placeholder="VD: Mỹ Đình ,Nam Từ Liêm, Hà Nội" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="qtich" class="col-sm-3 text-right control-label col-form-label">Quốc tịch</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="qtich" placeholder="VD: Việt Nam" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dantoc" class="col-sm-3 text-right control-label col-form-label">Dân tộc</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="dantoc" placeholder="VD: Kinh" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tongiao" class="col-sm-3 text-right control-label col-form-label">Tôn giáo</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tongiao" placeholder="VD: Không" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="sex" class="col-sm-3 text-right control-label col-form-label">Giới tính</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                        <select class="form-control" name="sex" id="exampleFormControlSelect1" required>
                                            <option value="">
                                                Nam
                                            </option>
                                            <option value="">
                                                Nữ
                                            </option>
                                        </select>
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tdvh" class="col-sm-3 text-right control-label col-form-label">Trình độ văn hóa</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="tdvh" placeholder="VD: 12/12" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="phone" class="col-sm-3 text-right control-label col-form-label">Điện thoại</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="phone" placeholder="VD: 033524****" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 text-right control-label col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="email" class="form-control" name="email" placeholder="VD: vivaxan@gmail.com" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="datein" class="col-sm-3 text-right control-label col-form-label">Ngày vào công ty</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="datein" placeholder="VD: 10/04/2022" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="ct" class="col-sm-3 text-right control-label col-form-label">Thâm niên công tác</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="ct" placeholder="VD: 3" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cccd" class="col-sm-3 text-right control-label col-form-label">Số CMND</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="number" class="form-control" name="cccd" placeholder="VD: 001204******" >
                                           
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