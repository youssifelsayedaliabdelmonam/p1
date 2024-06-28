
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
			<form action="handel-login.php" method="post">
				<img src="WhatsApp_Image_2022-12-10_at_8.46.07_PM-removebg-preview.png">
				<h2 class="title">Welcome</h2>
                <?php
				if(isset($_GET["msg"])&&$_GET["msg"]=='empty'){?>
                 <div
					class="alert alert-warning"
					role="alert"
					style="color: red;"
				 >
					 Please enter name and password
					 </div>
					 <?php
				}
				?>
				                <?php 
				if(isset($_GET["msg"])&&$_GET["msg"]=='no_user'){?>
                 <div
					class="alert alert-warning"
					role="alert"
					style="color: red;"
				 >
				 The email or password that you've entered is incorrect
				 <a href="index.php">sign up</a>
					 </div>
					 <?php
				}
				
				?>
				
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-envelope"></i>
           		   </div>
           		   <div class="div"> 
           		   		<h5>Email</h5>
           		   		<input type="text" class="input" name = "email">
           		   </div>
           		</div>

           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Forgot Password?</a>
            	<input type="submit" class="btn" value="Log In">
				<a href="index.php" class="btn">singup</a>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
