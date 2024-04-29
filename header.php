<?php require_once("././app/config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Expert Doctor</title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="<?php echo URL ."/public/css/font-awesome.min-index.css"?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL ."/public/css/bootstrap.min-index.css"?>">
  <link rel="stylesheet" type="text/css" href="<?php echo URL ."public/css/style-index.css"?>">
  
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              
              <div class="brand">
              <img src="public/images/new5.png" class="img-responsive" style="width: 120px; margin-top: -16px;"></a>
            </div>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#banner">Home</a></li>
                <li class=""><a href="#service">Services</a></li>
                <li class=""><a href="#about">About</a></li>
                <li class=""><a href="<?php echo URL ."FAQ.php" ?>">FAQs</a></li>
                <li class=""><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>

      <?php  if(getSession("Successlogin")) : ?>
       
        <div class="Login">

          <p><?php echo getSession("Successlogin") ?></p>
      
        </div>

        <?php removeSession('Successlogin')?>
        <?php endif ?>

      <div class="container">
<div class="row">
  <div class="banner-info">
    <div class="banner-logo text-center">
      <img src="<?php echo URL ."public/images/logo2.png" ?>" class="img-responsive" style="width: 140px;">
    </div>
    <div class="banner-text text-center">
      <h1 class="white">Healthcare at your desk!!</h1>
      <p>This website is specially designed to help different peoples to classify their<br>respective disease and their concern doctors.</p>
      
      
      
      <?php if(!getSession("Success-login")): ?>
        <a href="<?php echo URL ."/login.php" ?>"><button class="btn" type="submit">Login</button></a> 
        <?php else :    ?> 
          <a  href="<?php echo URL ."/controllers/logout-process.php" ?>"><button class="btn btn-danger" type="submit">Logout</button>
        </a> 
        <?php endif      ?>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
<!--/ banner-->