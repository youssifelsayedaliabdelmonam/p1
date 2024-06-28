<?php
session_start();
require_once('../../classes.php');
$users=unserialize($_SESSION["Users"]);

if (!empty($_REQUEST["like"])) {
    $users->store_like($_REQUEST["like"],$_REQUEST["post_id"],$users->id);
    header("location:index2.php?msg=like_su");
}else{
    header("location:index2.php?msg=like_comm");
}