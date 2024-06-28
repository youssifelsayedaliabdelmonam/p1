<?php 
session_start(); 
require_once('../../classes.php');
$users=unserialize($_SESSION["Users"]);


if ($_FILES["file"]["name"]) {
    $in="posts/".$_FILES["file"]["name"];
    move_uploaded_file($_FILES["file"]["tmp_name"],$in);
}else{ 
    $in=null;
}
$users->store_post($_REQUEST["content"],$in,$users->id);
header("location:index2.php?msg=done");