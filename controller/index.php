<?php

include '../model/connect.php';
include '../model/product.php';
include '../model/user.php';
include '../model/cart.php';

// Khởi tạo session
     session_start();

if (isset($_GET["action"]))
    $action = $_GET["action"];
elseif (isset($_POST['action'])) {
    $action = $_POST["action"];
} else
    $action = "home";

if (!isset($_SESSION['cart']))
    $_SESSION['cart'] = array();


switch ($action) {
    // Gọi trang chủ
    case "home":
        include "../view/website/home.php";
        break;
    // Gọi login
    case "login":
        include "login.php";
        break;
    // Gọi login
    case "admin":
        include "../view/admin/giaodienadmin.php";
        break;
    // Gọi logout
    case "logout":
        include "logout.php";
        break;
    // Gọi dang ky
    case "signup":
        include "../view/website/signup.php";
        break;
     // Gọi hành đọng đăng kí
    case "addUser":
        include "addUser.php";
        break;
    // Gọi gioi thieu
    case "gioithieu":
        include "../view/website/gioithieu.php";
        break;
    // Gọi san pham
    case "lienhe":
        include "../view/website/lienhe.php";
        break;
    // Gọi san pham
    case "sanpham":
        include '../view/website/sanphamheader.php';
        include '../view/website/tonghopmonman.php';
        $sp = new Products();
        $list = $sp->get3SP(1);
        foreach ($list as $row):
            $masp = $row['SanPhamID'];
            $ten = $row['TenSanPham'];
            $cay = $row['DoCay'];
            $gia = $row['Gia'];
            $chay = $row['ThichHopAnChay'];
            $hinh1 = "../view/website/img/" . $row['HinhSanPham1'];
            $hinh2 = "../view/website/img/" . $row['HinhSanPham2'];
            $hinh3 = "../view/website/img/" . $row['HinhSanPham3'];
            $hinh4 = "../view/website/img/" . $row['HinhSanPham4'];
            $hinh5 = "../view/website/img/" . $row['HinhSanPham5'];
            $mtsp = $row['MoTaSanPham'];
            include '../view/website/showsanpham.php';
        endforeach;
        include '../view/website/tonghopmonngot.php';
        
        $list = $sp->get3SP(2);
        foreach ($list as $row):
            $masp = $row['SanPhamID'];
            $ten = $row['TenSanPham'];
            $cay = $row['DoCay'];
            $gia = $row['Gia'];
            $chay = $row['ThichHopAnChay'];
            $hinh1 = "../view/website/img/" . $row['HinhSanPham1'];
            $hinh2 = "../view/website/img/" . $row['HinhSanPham2'];
            $hinh3 = "../view/website/img/" . $row['HinhSanPham3'];
            $hinh4 = "../view/website/img/" . $row['HinhSanPham4'];
            $hinh5 = "../view/website/img/" . $row['HinhSanPham5'];
            $mtsp = $row['MoTaSanPham'];
            include '../view/website/showsanpham.php';
        endforeach;
        include '../view/website/tonghopmonanvat.php';
        
        $list = $sp->get3SP(3);
        foreach ($list as $row):
            $masp = $row['SanPhamID'];
            $ten = $row['TenSanPham'];
            $cay = $row['DoCay'];
            $gia = $row['Gia'];
            $chay = $row['ThichHopAnChay'];
            $hinh1 = "../view/website/img/" . $row['HinhSanPham1'];
            $hinh2 = "../view/website/img/" . $row['HinhSanPham2'];
            $hinh3 = "../view/website/img/" . $row['HinhSanPham3'];
            $hinh4 = "../view/website/img/" . $row['HinhSanPham4'];
            $hinh5 = "../view/website/img/" . $row['HinhSanPham5'];
            $mtsp = $row['MoTaSanPham'];
            include '../view/website/showsanpham.php';
        endforeach;
        
        include '../view/website/sanphamclose.php';
        include '../view/website/footer.php';
        break;
    // Gọi san pham
    case "monman":
       include '../view/website/sanphamheader.php';
        include '../view/website/tonghopmonman.php';
        $sp = new Products();
        $list = $sp->getProductByLoaiId(1);
        foreach ($list as $row):
            $masp = $row['SanPhamID'];
            $ten = $row['TenSanPham'];
            $cay = $row['DoCay'];
            $gia = $row['Gia'];
            $chay = $row['ThichHopAnChay'];
            $hinh1 = "../view/website/img/" . $row['HinhSanPham1'];
            $hinh2 = "../view/website/img/" . $row['HinhSanPham2'];
            $hinh3 = "../view/website/img/" . $row['HinhSanPham3'];
            $hinh4 = "../view/website/img/" . $row['HinhSanPham4'];
            $hinh5 = "../view/website/img/" . $row['HinhSanPham5'];
            $mtsp = $row['MoTaSanPham'];
            include '../view/website/showsanpham.php';
        endforeach;
        
        include '../view/website/sanphamclose.php';
        include '../view/website/footer.php';
        break; 
    // Gọi san pham
    case "monngot":
        include '../view/website/sanphamheader.php';
        include '../view/website/tonghopmonngot.php';
        $sp = new Products();
        $list = $sp->getProductByLoaiId(2);
        foreach ($list as $row):
            $masp = $row['SanPhamID'];
            $ten = $row['TenSanPham'];
            $cay = $row['DoCay'];
            $gia = $row['Gia'];
            $chay = $row['ThichHopAnChay'];
            $hinh1 = "../view/website/img/" . $row['HinhSanPham1'];
            $hinh2 = "../view/website/img/" . $row['HinhSanPham2'];
            $hinh3 = "../view/website/img/" . $row['HinhSanPham3'];
            $hinh4 = "../view/website/img/" . $row['HinhSanPham4'];
            $hinh5 = "../view/website/img/" . $row['HinhSanPham5'];
            $mtsp = $row['MoTaSanPham'];
            include '../view/website/showsanpham.php';
        endforeach;
        
        include '../view/website/sanphamclose.php';
        include '../view/website/footer.php';
        break; 
    // Gọi san pham
    case "monanvat":
        include '../view/website/sanphamheader.php';
        include '../view/website/tonghopmonanvat.php';
        $sp = new Products();
        $list = $sp->getProductByLoaiId(3);
        foreach ($list as $row):
            $masp = $row['SanPhamID'];
            $ten = $row['TenSanPham'];
            $cay = $row['DoCay'];
            $gia = $row['Gia'];
            $chay = $row['ThichHopAnChay'];
            $hinh1 = "../view/website/img/" . $row['HinhSanPham1'];
            $hinh2 = "../view/website/img/" . $row['HinhSanPham2'];
            $hinh3 = "../view/website/img/" . $row['HinhSanPham3'];
            $hinh4 = "../view/website/img/" . $row['HinhSanPham4'];
            $hinh5 = "../view/website/img/" . $row['HinhSanPham5'];
            $mtsp = $row['MoTaSanPham'];
            include '../view/website/showsanpham.php';
        endforeach;
        
        include '../view/website/sanphamclose.php';
        include '../view/website/footer.php';
        break; 
    // Gọi san pham
    case "giohang":
        include "../view/website/giohang.php";
        break;
    // Gọi san pham
    case "chitiet":
        include '../view/website/chitietheader.php';
        $spID = $_POST ['masp'];
        $sp = new Products();
        $row = $sp->getProductById($spID);
        
            $masp = $row['SanPhamID'];
            $ten = $row['TenSanPham'];
            $cay = $row['DoCay'];
            $gia = $row['Gia'];
            $chay = $row['ThichHopAnChay'];
            $mota = $row['MoTaSanPham'];
            $hinh1 = "../view/website/img/" . $row['HinhSanPham1'];
            $hinh2 = "../view/website/img/" . $row['HinhSanPham2'];
            $hinh3 = "../view/website/img/" . $row['HinhSanPham3'];
            $hinh4 = "../view/website/img/" . $row['HinhSanPham4'];
            $hinh5 = "../view/website/img/" . $row['HinhSanPham5'];
            $mtsp = $row['MoTaSanPham'];
            include '../view/website/showchitiet.php';       
        include '../view/website/chitietfooter.php';
        break; 
    
    case "show_cart":
        include '../view/view_cart.php';
        break;
    case "add_cart":
        echo add_item($_POST['productkey'],$_POST['itemqty']);
        include '../view/website/view_cart.php';
        break;
    case "update_cart":
            $new_list = $_POST['newqty'];
            foreach($new_list as $key => $qty){
                if($_SESSION['cart'][$key] != $qty){
                update_item($key,$qty);
                }
            } 
           include '../view/website/view_cart.php';
        break;
        case "empty_cart":
            unset($_SESSION['cart']);
           include '../view/website/view_cart.php';
            break;
        case "product_manager":
            include '../view/admin/product_manager.php';
            break;
        case "add_product":
            include '../view/admin/add_product.php';
            break;
    case "add_submit":
        $LoaiID = $_POST['loaiid'];
        $tensanpham = $_POST['txtTenSP'];
        $hinhsanpham1 = $_FILES["file"]["name"];
        $gia = $_POST['txtGiaSP'];
        $mota = $_POST['txtMotaSP'];        
        move_uploaded_file($_FILES["file"]["tmp_name"],"../view/website/img/" . $_FILES["file"]["name"]);
        $pro = new Products();
        $pro->Addproduct($LoaiID, $tensanpham, $gia, $hinhsanpham1, $mota);
         header ("Location:../controller/index.php?action=product_manager");
        break;
    case "delete_product":
            $id =$_GET['id'];
            echo "$id";
            $del = new Products();
            $del->Deleteproduct($id);
            header ("Location:../controller/index.php?action=product_manager");
            break;
        case "edit_product":
        include '../view/admin/edit_product.php';
        break;
    case "edit_product_action":
        if (isset($_FILES["file"])){
                $hinhsanpham1 = $_FILES["file"]["name"];
                move_uploaded_file($_FILES["file"]["tmp_name"],"../view/website/img/" . $_FILES["file"]["name"]);
            }else{              
                $objQuest = new products();
                $quest = $objQuest->getProductById($_GET['id']);
                $hinhsanpham1 = $quest[5];
            }
        $LoaiID = $_POST['loaiid'];
        $tensanpham = $_POST['txtTenSP'];
        $hinhsanpham1 = $_FILES["file"]["name"];
        $ID=$_POST['txtIDSP'];
        $gia = $_POST['txtGiaSP'];
        $mota = $_POST['txtMotaSP'];     
        $edit = new Products();
        $edit ->Editproduct($tensanpham, $gia, $hinhsanpham1, $LoaiID, $mota, $ID);
        header ("Location:../controller/index.php?action=product_manager");
        break;
}
?>