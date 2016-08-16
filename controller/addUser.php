<?php

// Get the product data
$UserName = $_POST['username'];
$Email = $_POST['email'];
$Tel = $_POST['tel'];
$Password = $_POST['password'];
$PasswordConfirmation = $_POST['password_confirmation'];

// Validate inputs
if (empty($UserName) || empty($Email) || empty($Tel)||empty($Password)||empty($PasswordConfirmation) ) {
    $error = "Vui lòng nhập dữ liệu! ";
    
} else if ($Password != $PasswordConfirmation) {
     $error ="Vui lòng nhập lại password!";
    }
 else {
     $User = new user();
     $rowcount = $User ->insertUser($UserName, $Password,0, $Email, $Tel);
    
     if ($rowcount > 0){
         $error = 'Thành công rồi . Mệt quá nha!';
     }
    else {
      $error = 'Nhap lai di Sai roi';
         
     }
     
}
include '../view/website/signup.php';
?>