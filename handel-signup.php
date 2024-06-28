<?php
session_start();
$errors = [];
if (empty($_REQUEST["name"])) $errors["name"] = "name is required";
if (empty($_REQUEST["email"])) $errors["email"] = "email is required";
if (empty($_REQUEST["pass"]) || empty($_REQUEST["confpass"])){
    $errors["pass"]="password and confirmation password is required";
}else if($_REQUEST["pass"]!= $_REQUEST["confpass"]){
    $errors["confpass"]="confirmation password is false";
}
$name =htmlspecialchars(trim($_REQUEST["name"]));
$email =filter_var($_REQUEST["email"],FILTER_SANITIZE_EMAIL);
$password =htmlspecialchars($_REQUEST["pass"]);
$conf_pass =htmlspecialchars($_REQUEST["confpass"]);
$phone =htmlspecialchars($_REQUEST["confpass"]);


if (!empty($_REQUEST["email"])&&!filter_var($_REQUEST["email"],FILTER_VALIDATE_EMAIL)) $errors["email"]="email invaild format please correct email";

if(empty($errors)){
    require_once('classes.php');
    try {
        $res= User::signup($name,$email,md5($password),$phone);
        header("location:login.php?msg=sr");
        } catch (\Throwable $th) {
            header("location:index.php?msg=error");
            
    }

}else{
    $_SESSION["errors"]= $errors;
    header("location:index.php");
}
