<?php
    //  session_start();
    //  if(isset($_SESSION['username'])){
    //      unset($_SESSION['username']);//xóa session
    //      header('location:index1.php');
    //  }else{
    //     header('location:index.php');
    //     echo "logout thành công";
    //  }
    session_start();
    session_destroy();
    header("Location: index1.php");
?>