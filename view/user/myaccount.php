<div class="d-flex">  
        <div class="sidebar p-3">   
            <ul class="list-unstyled">  
                <li><a href="#" class="text-black">Thông Tin Tài Khoản</a></li>  
                <li><a href="index.php?act=changepw" class="text-black">Mật Khẩu</a></li>  
                <li><a href="index.php?act=logout" class="text-black">Đăng Xuất</a></li>  
            </ul>  
        </div>  
        <div class="container p-5">  
            <h1 class="text-2xl" >Thông Tin Tài Khoản</h1>  
            <form>  
                <div class="mb-3">  
                    <label for="username" class="form-label">Tên đăng nhập</label>  
                    <input type="text" class="form-control" id="username" value="hanh2k4" readonly>  
                </div>  
                <div class="mb-3">  
                    <label for="fullname" class="form-label">Họ và tên</label>  
                    <input type="text" class="form-control" id="fullname" value="Hoàng Anh">  
                </div>  
                <div class="mb-3">  
                    <label class="form-label">Giới tính</label>  
                    <select class="form-select" id="gender">  
                        <option value="male" selected>Nam</option>  
                        <option value="female">Nữ</option>  
                    </select>  
                </div>  
                <div class="mb-3">  
                    <label for="email" class="form-label">Email</label>  
                    <input type="email" class="form-control" id="email" value="hung6fd@gmail.com">  
                </div>  
                <div class="mb-3">  
                    <label for="address" class="form-label">Địa chỉ</label>  
                    <input type="text" class="form-control" id="address" value="Số 4 Hào Nam">  
                </div>  
                <div class="mb-3">  
                    <label for="phone" class="form-label">Số điện thoại</label>  
                    <input type="text" class="form-control" id="phone" value="0335248856">  
                </div>  
                <button type="submit" class="btn btn-primary">Lưu thay đổi</button>  
            </form>  
        </div>  
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>  

