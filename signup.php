<?php 
require_once("./app/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Singup-Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo URL ."public/css/style-signup.css"?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
</head>

<body>
    <header id="header">
        <div class="logo"><a href="">Expert Doctor</a> </div>
        <div class="hamburger" id="toggle">
            
        </div>
        <nav class="nav-bar" id="navbar">
        <ul>
                <li>
                    <a href="<?php echo URL ."/index.php"?>">Home</a>
                </li>
                <li>
                    <a href="<?php echo URL ."/index.php"?>#service">Services</a>
                </li>
                <li>
                    <a href="<?php echo URL ."/index.php"?>#about">About</a>
                </li>
                <li>
                    <a href="<?php echo URL ."/index.php"?>#contact">Contact</a>
                </li>
                <div class="login" id="login">
                    <li>
                        <a href="<?php echo URL ."/login.php"?>" class="navlogin">Login</a>
                    </li>
                </div>
            </ul>
        </nav>
    </header>
    <div class="container" id="home">
        <div class="login-left">
            <div class="login-header">
                <h1>Welcome</h1>
                <p>Please Signup to continue......</p>
            </div>
            <form action="<?php echo URL ."controllers/process-signup.php"?>" class="login-form" autocomplete="off" method="POST">
            
           

       <?php if(getSession('errors')): ?>
           
           <?php foreach (getSession('errors') as $error): ?>
               <div class="alert alert-danger p-1 text-center">  <?php  echo $error    ?>    </div>
       <?php endforeach; ?>
       <?php removeSession('errors'); ?>
       
       <?php endif; ?>
            
       <div class="login-content">
                    <div class="form-item">
                        <label for="name">Name</label>
                        <input type="text" name="username" id="name" placeholder="Enter yuor name">
                    </div>
                    <div class="form-item">
                        <label for="email">Enter Email</label>
                        <input type="text" name="email" id="email" placeholder="example@email.com">
                    </div>
                    <div class="form-item">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your Password"  class="pass-key">
                        <img src="<?php echo URL ."public/images/eye-close.png"?>" id="eyeicon" class="password-toggle">
                        
                    </div>
                    <div class="form-item">
                        <label for="password_confirmation">Repeat Password</label>
                        
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Enter your Password"  class="pass-key">
                        <img src="<?php echo URL ."public/images/eye-close.png"?>" id="eyeicon2" class="password-toggle">
                        
                    </div>
                    
                </div>
                    <button type="submit">Sing up</button>
                
                
            </form>
        </div>
        <div class="login-right">
            <img src="<?php echo URL ."/public/images/Prevent epidemic rebound-bro.svg"?>" alt="">
        </div>
    </div>

    <script>
		let eyeicon = document.getElementById("eyeicon");
		let password = document.getElementById("password");

		eyeicon.onclick = function() {
			if (password.type == "password"){
				password.type = "text"; 
				eyeicon.src = "<?php echo URL ."public/images/eye-open.png"?>";
			}else{
				password.type = "password";
				eyeicon.src = "<?php echo URL ."public/images/eye-close.png"?>";
			}
		} 
	</script>
    <script>
		let eyeicon2 = document.getElementById("eyeicon2");
		let passwordconfirmation = document.getElementById("password_confirmation");

		eyeicon2.onclick = function() {
			if (passwordconfirmation.type == "password"){
				passwordconfirmation.type = "text"; 
				eyeicon2.src = "<?php echo URL ."public/images/eye-open.png"?>";
			}else{
				passwordconfirmation.type = "password";
				eyeicon2.src = "<?php echo URL ."public/images/eye-close.png"?>";
			}
		} 
	</script>
    

<script src="<?php echo URL ."public/"?>js/index-signup.js"></script>
</body>

</html>