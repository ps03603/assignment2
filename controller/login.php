<?php

$UserName = $_POST['username'];
$Password = $_POST['password'];

$us = new user();
$result = $us->getInfoById($UserName);
if ($result['Password'] == $Password) {
    $_SESSION['user'] = $UserName;
    if ($result['Role'] == 0) {
        header("Location:index.php");
    } else {
        header("Location:index.php?action=admin");
    }
} else {
    echo 'dang nhap that bai';
}
?>
