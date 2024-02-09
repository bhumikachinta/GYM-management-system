<?php
$con = mysqli_connect("localhost","root","","gymnsb","3308");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style1.css">

	<title>Fitlife - Work Hard To Get Better Life</title>


  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

</head>
<body>
	<div class="container">
    <?php 
         
        
         if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $email = $_POST['email'];
          
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
         }
         //verifying the unique email

        if(!empty($username )){

            mysqli_query($con,"INSERT INTO users(username,email,password,cPassword) 
            VALUES('$username','$email','$password','$cpassword')") ;
        }

          
         

        

       
         
        ?>
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="" required>
			</div>
			<div class="input-group">
				<button name="submit" value="reg" class="btn" onclick="success()">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		
		</form>
	</div>
<script>
	function success(){
		var name=document.getElementById('username');
		var email=document.getElementById('email');
		var password=document.getElementById('password');
		var cpassword=document.getElementById('cpassword');
		
		if(name!="" ||email!=""||password!=""||cpassword!=""){
			alert("successfully registered");
		}
		
	}
</script>
</body>
</html>