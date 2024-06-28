<?php
session_start();
require_once("../../classes.php");
$users = unserialize($_SESSION["Users"]);
$users->dele_like($_REQUEST["post_id"]);
header("location:index2.php?msg=done_del_like");