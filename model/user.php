<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author Kim Thanh
 */
class user

 {
    //Khởi tạo thuộc tính cho lớp users
       
        var $UserName = null;
        var $Password = null;
        var $Role = null;
        var $Email = null;
        var $Phone = null;
        
  
     //Khai báo phương thức lấy danh sách user
        function getUser() 
        { 
            $db = new connect();
            $select = "select * from user";
            return $db->getList($select);
        }   
        
      
        
     //Khai báo phương thức lấy thông tin tài khoản đăng nhập
        function getInfoById($username)
         {
            $db = new connect();
            $select = "select * from user where UserName='$username'";
            $result = $db->getList($select);
            $quest = $result->fetch();
            return $quest;
         }  
         
      //Khai báo phương thức đăng ký tài khoản
         function insertUser($tmpUsername,$tmpPassword,$tmpRole,$tmpEmail,$tmpPhone)
          { 
            $db = new connect();
            $query = "INSERT INTO user VALUES (null,'$tmpUsername','$tmpPassword','$tmpRole','$tmpEmail','$tmpPhone')";
            $result = $db->exec($query);
            return $result;
          }   
         
       //Khai báo phương thức chỉnh sửa tài khoản
        function updateUser($tmpUsername,$tmpPassword,$tmpRole,$tmpEmail,$tmpPhone)
         { 
         $db = new connect();
         $query = "update user set Password='$tmpPassword', Role='$tmpRole',Phone='$tmpPhone',Email='$tmpEmail' where Username='$tmpUsername'";
         $db->exec($query);
         }
         
           
          
          //Khai báo phương thức xoá tài khoản
        function deleteUser($Username)
         {
            $db = new connect();
            $query = "delete from user where UserName = '$Username'";
            $db->exec($query);
         }
         
         
      
}

?>
