<?php

abstract class Users
{
     public $id;
     public $name;
     public $email;
     public $phone;
     protected $password;
     public $created_at;
     public $updated_at;

     function __construct($id,$name,$email,$password,$phone,$created_at,$updated_at)
     {
          $this->id=$id;
          $this->name=$name;
          $this->email=$email;
          $this->password=$password;
          $this->phone=$phone;
          $this->created_at=$created_at;
          $this->updated_at=$updated_at;
     }

     public static function login($email,$password)
     {
        $Users=null; 
        $qry="SELECT * FROM USERS WHERE email='$email' AND password='$password'";
        $con = mysqli_connect('localhost','root','','blog');
        $res=mysqli_query($con,$qry);
        if ($arr=mysqli_fetch_assoc($res)) {
            switch ($arr["role"]) {
               case 'user':
                    $Users= new User($arr["id"],$arr["name"],$arr["email"],$arr["password"],$arr["phone"],$arr["created_at"],$arr["updated_at"]);
                    break;
               case 'admin':
                    $Users= new Admin($arr["id"],$arr["name"],$arr["email"],$arr["password"],$arr["phone"],$arr["created_at"],$arr["updated_at"]);
                    break;              
            }
          }
          mysqli_close($con);
         return $Users;
     }
     public function my_users(){
          $qry = "SELECT * FROM USERS ORDER BY CREATED_AT ";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }
     public function my_likes(){
          $qry = "SELECT * FROM likes ";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }
     public function my_photo($user_id){
          $qry = "SELECT photo FrOM users WHERE id ='$user_id' ";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }
     public function dele_post($user_id){
          $qry = "DELETE FROM posts WHERE id=$user_id";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          mysqli_close($con);
          return $res;
     } 
     public function dele_comment($id){
          $qry = "DELETE FROM COMMENTS WHERE id='$id'";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          mysqli_close($con);
          return $res;
     } 
     public function my_comment(){
          $qry = "SELECT * FROM COMMENTS";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }
     public function my_msgg(){
          $qry = "SELECT * FROM msg";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }
}
     

class User extends Users{
     public $role="user";
     

     public static function signup($name,$email,$password,$phone){
        $qry = "INSERT INTO  USERS (name,email,password,phone) 
       VALUES ('$name','$email','$password','$phone') ";
       $con = mysqli_connect('localhost','root','','blog');

       $res=mysqli_query($con,$qry);
       mysqli_close($con);
       return $res;

     }
     public static function store_post($content,$imagen,$user_id){
       $qry = "INSERT INTO  POSTS (content,image,user_id) 
       VALUES ('$content','$imagen',$user_id) ";
       $con = mysqli_connect('localhost','root','','blog');
       $res=mysqli_query($con,$qry);
       mysqli_close($con);
       return $res;
     }
     public function my_posts($user_id){
          $qry = "SELECT * FrOM POSTS WHERE USER_ID =$user_id ORDER BY CREATED_AT DESC";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }
     public static function store_msg($content,$user_id){
       $qry = "INSERT INTO  msg (content,user_id) 
       VALUES ('$content',$user_id) ";
       $con = mysqli_connect('localhost','root','','blog');
       $res=mysqli_query($con,$qry);
       mysqli_close($con);
       return $res;
     }
     public function my_msg($user_id){
          $qry = "SELECT * FrOM msg WHERE USER_ID =$user_id ORDER BY CREATED_AT DESC";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }

     public static function store_comment($comment,$post_id,$user_id){
          $qry = "INSERT INTO  COMMENTS (comment,post_id,user_id) 
          VALUES ('$comment','$post_id',$user_id) ";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          mysqli_close($con);
          return $res;
        }
     public function my_comments($post_id){
          $qry = "SELECT comments.id,comments.comment,comments.created_at,comments.updated_at,comments.user_id,comments.post_id FROM COMMENTS join users on comments.user_id =users.id WHERE POST_ID =$post_id ORDER BY comments.CREATED_AT DESC";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }

     public function up_photo($photo,$user_id){
          $qry = "UPDATE users SET photo = '$photo' WHERE id = '$user_id'";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          mysqli_close($con); 
          return $res;
     }

     public static function store_like($like,$post_id,$user_id){
          
          $qry = "INSERT INTO  likes (likes,post_id,user_id) 
          VALUES ('$like','$post_id',$user_id) ";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          mysqli_close($con);
          return $res;
        }
        public function dele_like($id){
          $qry = "DELETE FROM likes WHERE post_id='$id'";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          mysqli_close($con);
          return $res;
     }





}
class Admin extends Users{

     public $role="admin";
     public function my_posts(){
          $qry = "SELECT * FROM POSTS ORDER BY CREATED_AT ";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          $data=mysqli_fetch_all($res,MYSQLI_ASSOC);
          mysqli_close($con);
          return $data;
     }


     
     public function dele_user($user_id){
          $qry = "DELETE FROM USERS WHERE id=$user_id";
          $con = mysqli_connect('localhost','root','','blog');
          $res=mysqli_query($con,$qry);
          mysqli_close($con);
          return $res;
     }    
}


    