<?php session_start() ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="handel-signup.php" method="post">
				<img src="WhatsApp_Image_2022-12-10_at_8.46.07_PM-removebg-preview.png">
				<h2 class="title">Welcome</h2>
                <?php 
				if (!empty($_SESSION["errors"])) {
					foreach ($_SESSION["errors"] as $input_key => $errors) {
						echo "<small style='color:red'>$errors</small>" ."</br>";
					}
				}
                ?>
				
				<?php
				
				if(isset($_GET["msg"])&&$_GET["msg"]=='error'){?>
                 <div
					class="alert alert-warning"
					role="alert"
					style="color: red;"
				 >
					 This Account already registerd 
				 </div>
				 
                <?php
				}
				?>

           		<div class="input-div one" >
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div" >
           		   		<h5>Username</h5>
           		   		<input type="text" class="input" name = "name"  >
           		   </div>
           		</div>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-phone"></i>
           		   </div>
           		   <div class="div" >
           		   		<h5>Phone</h5>
           		   		<input type="text" class="input" name = "phone" >
           		   </div>
           		</div>
           		<div class="input-div one" >
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div" >
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name = "email"  >
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div" >
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name = "pass" >
            	   </div>
            	</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div" >
           		    	<h5>Confirm password</h5>
           		    	<input type="password" class="input" name = "confpass"  >
            	   </div>
            	</div>
            	<a href="login.php">login?</a>
            	<input type="submit" class="btn" value="Sign UP">
				
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<?php 
$_SESSION["errors"]=null;
?>
