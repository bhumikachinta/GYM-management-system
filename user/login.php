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
    <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">
</head>
<body>
	<div class="container">
	<?php 
         
        
         if(isset($_POST['submit'])){
           
            $email = $_POST['email'];
          
            $password = $_POST['password'];
           
         }
         //verifying the unique email

        if(!empty($email)){

            mysqli_query($con,"INSERT INTO login(email,password) 
            VALUES('$email','$password')") ;
        }

          
         

        

       
         
        ?>
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">LOGIN</p>
			
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="" required>
            </div>
			<!-- <div>
                <a href="forget.html" style="text-decoration: none; color: black">Forget password?</a>
            </div><br> -->
            <div class="input-group">
				<button name="submit" class="btn" onclick="success()">login</button>
			</div>
		</form>
	</div>
	<script>
	function success(){
		
		var email=document.getElementById('email');
		var password=document.getElementById('password');
		
		
		if(email!=""||password!=""){
			alert("successfully login");
		}
		
	}
</script>
</body>
</html>










