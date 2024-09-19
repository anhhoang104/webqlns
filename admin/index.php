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
        
        case "nvct":
        include "view/nvct.php";
        break;
       
        case "cnganh":
        include "view/cnganh.php";
        break;

        case "hopdong":
        include "view/hopdong.php";
        break;
        
        case "hdnv":
        include "view/hdnv.php";
        break;

        case "chucvu":
        include "view/chucvu.php";
        break;
    
        case "chucnang":
        include "view/chucnang.php";
        break;
            
        case "bcnv":
        include "view/bcnv.php";
        break;
        
        case "nvkt":
        include "view/nvkt.php";
        break;
    
        case "ktkl":
        include "view/ktkl.php";
        break;
            
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