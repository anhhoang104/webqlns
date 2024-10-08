<div id="main-wrapper">
  
   
    <header class="topbar"  data-navbarbg="skin5">
  <nav class="nav-bar p-4 flex justify-between items-center">
    
    <a class="brand text-2xl font-bold text-neutral-50" href="index.html" >Vivaxan Admin</a>
    
    <div class="profile relative">

     
        <a href="index.php?act=logout" class="profile-link block px-4 py-2 text-neutral-50 hover:bg-gray-100">Logout</a>
     
    </div>
  </nav>
</header>
    
    <aside class="left-sidebar" data-sidebarbg="skin5">
        
        <div class="scroll-sidebar">
           
        <nav class="menu mt-10 relative">
    <ul class="menu-items space-y-4">
      <li><a href="index.php?act=dashboard" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Trang chủ admin</a></li>
 

      <!-- Danh mục Drop-down -->
      <li class="menu-item group relative">
        <a href="index.php?act=ds_phongban" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Phòng Ban</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 text-neutral-50 space-y-2 pl-4">
          <li><a href="index.php?act=ds_phongban" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Danh sách phòng ban</a></li>
          <li><a href="index.php?act=add_phongban" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm phòng ban</a></li>
        </ul>
      </li>

      <!-- Sản phẩm Drop-down -->
      <li class="menu-item group relative">
        <a href="index.php?act=list_nvien" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Nhân viên</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=list_nvien" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Danh sách nhân viên</a></li>
          <li><a href="index.php?act=add_nvien" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm nhân viên</a></li>
        </ul>
      </li>

      <!-- Các mục khác -->
      
      <li class="menu-item group relative">
        <a href="index.php?act=nvct" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">nhân viên công tác</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=add_nvct" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm nhân viên công tác</a></li>
        </ul>
      </li>

      <li class="menu-item group relative">
        <a href="index.php?act=hopdong" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Hợp đồng</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=add_hopdong" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm hợp đồng</a></li>
        </ul>
      </li>

      <li class="menu-item group relative">
        <a href="index.php?act=hdnv" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Hợp đồng nhân viên</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=add_hdnv" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm Hợp đồng nhân viên</a></li>
        </ul>
      </li>

      <li><a href="index.php?act=quyentruycap" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300">Quyền truy cập</a></li>

      <li class="menu-item group relative">
        <a href="index.php?act=chucvu" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Chức vụ</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=add_chucvu" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm chức vụ</a></li>
        </ul>
      </li>

      <li class="menu-item group relative">
        <a href="index.php?act=chucnang" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Chức năng</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
         
          <li><a href="index.php?act=add_chucnang" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm chức năng</a></li>
        </ul>
      </li>

      <li class="menu-item group relative">
        <a href="index.php?act=bcnv" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Bằng cấp nhân viên</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=add_bcnv" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm bằng cấp nhân viên</a></li>
        </ul>
      </li>

      <li class="menu-item group relative">
        <a href="index.php?act=cnganh" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Chuyên ngành</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=add_cnganh" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm Chuyên ngành</a></li>
        </ul>
      </li>

      
      <li class="menu-item group relative">
        <a href="index.php?act=nvkt" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Nhân viên khen thưởng</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=add_nvkt" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm nhân viên khen thưởng</a></li>
        </ul>
      </li>

      <li class="menu-item group relative">
        <a href="index.php?act=ktkl" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Khen thưởng - Kỷ luật</a>
        <ul class="dropdown hidden group-hover:block bg-gray-800 rounded shadow-lg py-2 space-y-2 pl-4">
          <li><a href="index.php?act=add_ktkl" class="dropdown-link block px-4 py-2 text-neutral-50 hover:bg-teal-300	">Thêm khen thưởng - kỷ luật</a></li>
        </ul>
      </li>

      <li><a href="index.php?act=change" class="menu-link block px-4 py-2 text-neutral-50 hover:bg-teal-300">Thay đổi</a></li>



    </ul>
  </nav>
            
        </div>
       
    </aside>


   