<?php

session_start();
require_once("../../classes.php");
$users = unserialize($_SESSION["Users"]);
$users->dele_comment($_REQUEST["commentt_id"]);
header("location:index2.php?msg=done_delete_comment");