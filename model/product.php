<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Products
 *
 * @author PS03603
 */
class Products {
    var $TenSanPham = null;
    var $DoCay = null;
    var $Gia = null;
    var $ThichHopAnChay =null;
    var $HinhSanPham1 ="../view/website/img/";
    var $HinhSanPham2 ="../view/website/img/";
    var $HinhSanPham3 ="../view/website/img/";
    var $HinhSanPham4 ="../view/website/img/";
    var $HinhSanPham5 ="../view/website/img/";
    var $MoTaSanPham =null;
    
    public function __construct() { }
    // Lấy danh sách sản phẩm từ database
     function getList()
    {
         $db = new connect();
         $select = "select * from sanpham";
         $result = $db->getList($select);
         return $result;
     }
     
     function getList_DESC()
    {
         $db = new connect();
         $select = "select * from sanpham ORDER BY SanPhamID DESC";
         $result = $db->getList($select);
         return $result;
     }
     
     // Lấy danh sách sản phẩm có liệt kê theo trang
     function getListPage($from,$to)
     {
         $db = new connect();
         $select = "select * from sanpham ORDER BY SanPhamID DESC limit $from,$to";
         $result = $db->getList($select);
         return $result;
     }
     
     // Lấy danh sách sản phẩm có liệt kê theo trang
     function get3SP($id)
     {
         $db = new connect();
         $select = "select * from sanpham where LoaiID = '$id' LIMIT 3";
         $result = $db->getList($select);
         return $result;
     }
     
     function getListPageOrderProduct($from,$to,$category)
     {
         $db = new connect();
         $select = "select * from  WHERE LoaiID='$category' ORDER BY SanPhamID DESC limit $from,$to";
         $result = $db->getList($select);
         return $result;
     }
     function CountProduct($LoaiID)
    {
        $db = new connect();
        $select = "select Count(*) from sanpham WHERE LoaiID='$LoaiID'";
        $result = $db->getInstance($select);
        return $result; 
    }
    
     function CountProductAll()
    {
        $db = new connect();
        $select = "select Count(*) from sanpham";
        $result = $db->getInstance($select);
        return $result; 
    }
    
     
     // Lấy thông tin chi tiết sản phẩm theo loaiID
     function getProductByLoaiId($id)
     {
         $db = new connect();
         $select = "select * from sanpham where LoaiID=$id";
         $result=$db->getList($select);
         return $result;
     }
     
     // Lấy thông tin chi tiết sản phẩm theo ID
     function getProductById($id)
     {
         $db = new connect();
         $select = "select * from sanpham where SanPhamID=$id";
         $result=$db->getInstance($select);
         return $result;
     }
    //Thêm sản phẩm mới
     function Addproduct($LoaiID,$tensanpham,$gia,$hinhsanpham1,$mota)
     {
            $db = new connect();
            $query = "INSERT INTO sanpham(LoaiID,TenSanPham,Gia,HinhSanPham1,MoTaSanPham) VALUES ('$LoaiID','$tensanpham','$gia','$hinhsanpham1','$mota')";
            $db->exec($query);
     }
     //Update sản phẩm
     function Editproduct($tensanpham,$gia,$hinhsanpham1,$LoaiID,$mota,$ID)
     {
         $db = new connect();
         $query = "UPDATE sanpham SET TenSanPham='$tensanpham',Gia='$gia',HinhSanPham1='$hinhsanpham1',LoaiID='$LoaiID',MoTaSanPham='$mota' WHERE SanPhamID='$ID'";
         $db->exec($query);
     }
     //Xoá sản phẩm
     function Deleteproduct($id)
         {
            $db = new connect();    
            $query = "delete from sanpham where SanPhamID = '$id'";
            $db->exec($query);
         }
}

?>