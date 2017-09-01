<?php

$host = 'projetwebsrv.mysql.database.azure.com';
$username = 'mysqluser@projetwebsrv';
$password = 'Fatma123';
$db_name = 'document';
//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($conn,$_POST['username']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $sql = "SELECT Email FROM User WHERE Email = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
    
      if($count == 1) {
         session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         if ($myusername=="admin")
         {header("location: welcome_admin.php");}
         else
         {header("location: welcome_user.php");}
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SBF PROJECT : Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- superslides css -->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="css/animate.css">    
    <!-- slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">        
    <!-- website theme color file -->   
     <link id="switcher" href="css/themes/cyan-theme.css" rel="stylesheet">    
    <!-- main site css file -->    
    <link href="style.css" rel="stylesheet">    
    <!-- google fonts  -->  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>    
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <!-- Favicon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">  
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<body>
  <!-- =========================
    //////////////This Theme Design and Developed //////////////////////
    //////////// by www.wpfreeware.com======================--> 

  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
 
  <!-- End Preloader -->   
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  
  <!-- start navbar -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
       <a class="navbar-brand" href="index.php">SBF <span>PROJECT</span></a>
        <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse navbar_area">          
        <ul class="nav navbar-nav navbar-right custom_nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="testdoctors.php">Our Doctors</a></li>
          <li><a href="insc.php"><B><FONT color="red">Inscription</FONT></B></a></li>
          <li><a href="login.php"><B><FONT color="red">Login</FONT></B></a></li>                      
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <!-- End navbar -->
 
  <!-- start banner area -->
  <section id="imgbanner">  
    <h2><span>Join SBF PROJECT</span></h2>     
  </section>
  <!-- End banner area -->
  

  <!-- start Contact section -->
  <section id="contact">
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="contact_map">
          <!-- Start Google map -->
          
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
         <div class="contact_area">
           <div class="client_title">
              <hr>
              <h2>Join <span>US</span></h2>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="contact_left wow fadeInLeft">
                 
                  <form class="submitphoto_form" action="" method="post">
                    
                    <input type="mail" name="username" class="form-control wpcf7-email" placeholder="Email address">          
                    <input type="Password" name="password" class="form-control wpcf7-text" placeholder="Password">
                    <input type="submit" value="Submit" class="wpcf7-submit photo-submit">  

             
                  </form>
                </div>                  
              </div>
              
            </div>              
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->


  
 
  

    
  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- For content animatin  -->
  <script src="js/wow.min.js"></script>
  <!-- bootstrap js file -->
  <script src="js/bootstrap.min.js"></script> 

  <!-- superslides slider -->
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.animate-enhanced.min.js"></script>
  <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
  <!-- slick slider js file -->
  <script src="js/slick.min.js"></script>
  <!-- Google map -->
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="js/jquery.ui.map.js"></script>


  <!-- custom js file include -->
  <script src="js/custom.js"></script>   
 
 
  </body>
</html>