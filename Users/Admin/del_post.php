<?php


session_start();
require_once("../../classes.php");
$users = unserialize($_SESSION["Users"]);
$users->dele_post($_REQUEST["user_id"]);
header("location:index2.php?msg=done");