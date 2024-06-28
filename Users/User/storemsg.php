<?php 
session_start(); 
require_once('../../classes.php');
$users=unserialize($_SESSION["Users"]);


if (!empty($_REQUEST["message"])) {
    $users->store_msg($_REQUEST["message"],$users->id);
    header("location:msg.php?msg=msg_su");
}else{
    header("location:msg.php?msg=req_msg");
}