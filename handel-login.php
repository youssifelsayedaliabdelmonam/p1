<?php 
session_start();
if (!empty($_REQUEST["email"] )&& !empty($_REQUEST["password"] )) {
    require_once('classes.php');
   $Users= Users::login($_REQUEST["email"],md5($_REQUEST["password"]));  
   
   if (!empty($Users)) {
    $_SESSION['Users']=serialize($Users);
    $x=$Users->role;
    if($x == "admin"){
        header("location:Users/Admin/index2.php"); 
    }
    elseif($x == "user"){
        header("location:Users/User/index2.php"); 
        // header("location:Users/User/photo.php"); 
    }

   }else{
    header("location:login.php?msg=no_user"); 
   }
}else {
    header("location:login.php?msg=empty"); 
}