<?php


session_start();
require_once("../../classes.php");
$users = unserialize($_SESSION["Users"]);
$users->dele_user($_REQUEST["user_id"]);
header("location:index3.php?msg=done");