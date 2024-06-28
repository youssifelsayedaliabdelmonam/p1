<?php
session_start();
require_once('../../classes.php');
$users=unserialize($_SESSION["Users"]);

if (!empty($_REQUEST["comment"])) {
    $users->store_comment($_REQUEST["comment"],$_REQUEST["post_id"],$users->id);
    header("location:index2.php?msg=comm_su");
}else{
    header("location:index2.php?msg=req_comm");
}