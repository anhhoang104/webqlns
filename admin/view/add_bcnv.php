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
                        <form class="form-horizontal" action="index.php?act=add_bcnv" method="post" enctype="multipart/form-data">
                            <div class="card-body">
                                <h4 class="card-title">Thêm bằng cấp nhân viên</h4>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã bằng cấp</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="" class="form-control" placeholder="Mã nhân viên (auto)" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã nhân viên</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="" class="form-control" placeholder="Mã nhân viên (auto)" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fname" class="col-sm-3 text-right control-label col-form-label">Mã chuyên ngành</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="" class="form-control" placeholder="Mã chuyên ngành (auto)" disabled>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tennvien" class="col-sm-3 text-right control-label col-form-label">Tên bằng cấp</label>
                                    <div class="col-sm-9">
                                       <input type="text" name="" class="form-control" placeholder="Tên bằng cấp">
                                    </div>
                                </div>
                               
                                
                                <div class="form-group row">
                                    <label for="machucvu" class="col-sm-3 text-right control-label col-form-label">Loại bằng</label>
                                    <div class="col-sm-9">
                                    <input type="text" name="bang" class="form-control" placeholder="Loại bằng">
                                    </div>
                                </div>
                               

                                <div class="form-group row">
                                    <label for="date" class="col-sm-3 text-right control-label col-form-label">Tên trường</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="date" placeholder="VD: Trường đại học X" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="que" class="col-sm-3 text-right control-label col-form-label">Năm tốt nghiệp</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="ntnghiep" placeholder="VD: 2024" >
                                           
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="date" class="col-sm-3 text-right control-label col-form-label">Hình thức đào tạo</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <select name="" id="">Hình thức đào tạo
                                                <ul>
                                                    <li>Chính quy</li>
                                                </ul>
                                                <ul>
                                                    <li>Liên thông</li>
                                                </ul>
                                            </select>
                                           
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