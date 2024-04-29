<?php 
require_once("./app/config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login-Form</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="<?php echo URL ."public/css/style-login.css"?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    
    
</head>

<body>
    <header id="header">
        <div class="logo"><a href="">Expert Doctor</a> </div>
        
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
                        <a href="<?php echo URL ."/signup.php"?>" class="navlogin">Signup</a>
                    </li>
                </div>
            </ul>
        </nav>
    </header>
    <div class="container" id="home">
        <div class="login-left">
            <div class="login-header">
                <h1>Welcome</h1>
                <p>Please login to continue......</p>
            </div>
            
            <form action="<?php echo URL ."/controllers/login-process.php"?>" method="POST" class="login-form" autocomplete="off">
            <?php if(getSession('Success-singup')): ?>
                <div class="alert alert-primary p-1 text-center">  <?php  echo getSession('Success-singup');    ?>    </div>
                <?php removeSession('Success-singup')       ?>
                <?php endif; ?>
            <?php if(getSession('errors')): ?>
           
           <?php foreach (getSession('errors') as $error): ?>
               <div class="alert alert-danger p-1 text-center">  <?php  echo $error    ?>    </div>
       <?php endforeach; ?>
       <?php removeSession('errors'); ?>
       
       <?php endif; ?>
            <div class="login-content">
                    <div class="form-item">
                        <label for="email">Enter Email</label>
                        <input type="email" name="email" id="" placeholder="example@email.com">
                    </div>
                    <div class="form-item">
                        <label for="password">Enter Password</span></label>
                        <input type="password" name="password" id="password" placeholder="Enter your Password"  class="pass-key">
                        <img src="<?php echo URL ."/public/images/eye-close.png"?>" id="eyeicon" class="password-toggle">

                    </div>
                    <div class="form-item">
                        <div class="checkbox">
                            <input type="checkbox" name="" id="rememberMeCheckbox" checked>
                            <label for="rememberMeCheckbox" class="checkboxlabel">Remember Me</label>
                        </div>
                    </div>
                    <div class="remember-forgot">
                        <a href="#">Forgot password?</a>
                    </div>

                    <div class="bg-grey">
                        <div class="sing-up">Don't have an account? <a href="<?php echo URL ."/signup.php" ?>"class="text-link" id="sign-up" >Sign up</a></div>
                        <!--<a href="#register" class="link-register">Sign Up</a>-->
                    </div>
    
                    <button type="submit">LogIn</button>
                </div>
                <div class="login-footer">
                    <a href="">
                        <img width="30" src="https://img.icons8.com/color/512/facebook-new.png" alt="facebook">Facebook
                    </a>
                    <a href="">
                        <img width="30" src="https://img.icons8.com/fluency/512/google-logo.png" alt="google">Google
                    </a>
                </div>
            </form>
        </div>
        <div class="login-right">
            <img src="<?php echo URL ."/public/images/Doctors-bro.svg"?>" alt="">
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

    <script src="<?php echo URL ."public/"?>js/index-login.js"></script>
</body>

</html>