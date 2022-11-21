<?php 
session_start();
if($_SESSION['user']=='') {
    header('Location:./login.php');
}else{
    // header('Location: ./index.php');
}
?>