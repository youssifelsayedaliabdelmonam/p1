<?php
session_start();
require_once('../../classes.php');
$users=unserialize($_SESSION["Users"]);

if (!empty($_FILES["photo"]["name"])) {
    $in="photouser/".$_FILES["photo"]["name"];
    move_uploaded_file($_FILES["photo"]["tmp_name"],$in);
    $users->up_photo($in,$users->id);
    
    header("location:index2.php");
    
}else{
    header("location:photo.php?msg=need_photo");
}
