<?php 
session_start();
if($_SESSION['user']=='') {
    header('Location:./login.php');
}
if(empty($_SESSION['cart'])) {
    header('Location: ./danhmuc.php');
}
?>