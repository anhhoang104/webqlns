<?php
session_start();
require_once "controller/controller.php";
include "model/pdo.php";


if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case '/':
        case 'dashboard':
        include "view/dashboard.php";
        break;

        // NHÂN VIÊN
        case "list_nvien":
        include "view/list_nvien.php";
        break;
       

        case "add_nvien":
        include "view/add_nvien.php";
        break;

        case "delete_nhanvien":
        break;

        case "update_nvien":
        include "view/update_nvien.php";
        break;

        // PHÒNG BAN
        case "ds_phongban":
        include "view/ds_phongban.php";
        break;

        case "delete_phongban":
        break;

        case "add_phongban":
        include "view/add_phongban.php";
        break;
        
        case "edit_phongban":
        break;

        case "update_phongban":
        include "view/update_phongban.php";
        break;
        
       

        // QUYỀN TRUY CẬP
        case 'quyentruycap':
        include "view/quyentruycap.php";
        break;
        
        case 'edit_quyentruycap':
        break;

        case 'update_quyentruycap':
        include "view/update_quyentruycap.php";
        break;

        case "delete_quyentruycap":
        break;
        
        // NHÂN VIÊN CÔNG TÁC
        case "nvct":
        include "view/nvct.php";
        break;

        case "add_nvct":
        include "view/add_nvct.php";
        break;

        case "delete_nvct":
        break;

        case "edit_nvct":
        break;

        case "update_nvct":
        include "view/update_nvct";
        break;
       
        // CHUYÊN NGÀNH
        case "cnganh":
        include "view/cnganh.php";
        break;

        case "add_cnganh":
        include "view/add_cnganh.php";
        break;

        case "delete_cnganh":
        break;

        case "edit_cnganh":
        break;

        case "update_cnganh":
        include "view/update_cnganh.php";
        break;


        
        //HỢP ĐỒNG
        case "hopdong":
        include "view/hopdong.php";
        break;

        case "add_hopdong":
        include "view/add_hopdong.php";
        break;

        case "delete_hopdong":
        break;
    
        case "edit_hopdong":
        break;
    
        case "update_hopdong":
        include "view/update_hopdong.php";
        break;
        
        //HỢP ĐỒNG NHÂN VIÊN
        case "hdnv":
        include "view/hdnv.php";
        break;

        case "add_hdnv":
        include "view/add_hdnv.php";
        break;

        case "delete_hdnv":
        break;
        
        case "edit_hdnv":
        break;
        
        case "update_hdnv":
        include "view/update_hdnv.php";
        break;



        //CHỨC VỤ
        case "chucvu":
        include "view/chucvu.php";
        break;

        case "add_chucvu":
        include "view/add_chucvu.php";
        break;

        case "update_chucvu":
        include "view/update_chucvu.php";
        break;

        case "edit_chucvu":
        break;

        case "delete_chucvu":
        break;
    
        //CHỨC NĂNG
        case "chucnang":
        include "view/chucnang.php";
        break;

        case "add_chucnang":
        include "view/add_chucnang.php";
        break;
        
        case "delete_chucnang";
        break;
        
        case "edit_chucnang":
        break;

        case "update_chucnang":
        include "view/update_chucnang.php";
        break;
        
        //BẰNG CẤP NHÂN VIÊN
        case "bcnv":
        include "view/bcnv.php";
        break;
        
        //NHÂN VIÊN KHEN THƯỞNG 
        case "nvkt":
        include "view/nvkt.php";
        break;

       
    
        //KHEN THƯỞNG KỶ LUẬT
        case "ktkl":
        include "view/ktkl.php";
        break;

        case "add_ktkl":
        include "view/add_ktkl.php";
        break;
    
        case "delete_ktkl";
        break;

        case "update_ktkl":
        include "view/update_ktkl.php";
        break;
        
        //THAY ĐỔI
        case "change":
        include "view/change.php";
        break;

        case 'logout':
        break;
        
    }
} else {
   include "view/dashboard.php";
}
?>