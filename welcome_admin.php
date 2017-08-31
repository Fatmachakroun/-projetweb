<?php
   include('session.php');
   
?>



<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username2']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 

      
      
      $sql = "UPDATE User
              
              SET Password = '$mypassword'
                 
              WHERE User.Email = '$myusername' ;";
      $result = mysqli_query($db,$sql);
      header("location: welcome_admin.php");
     
      
      
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>




<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername1 = mysqli_real_escape_string($db,$_POST['username1']);
      
      $sql = "DELETE FROM `User`
              WHERE User.Email = '$myusername1';";

      $result = mysqli_query($db,$sql);


       $sql1 = "DELETE FROM `Meds`
              WHERE Meds.UserEmail = '$myusername1';";

      $result1 = mysqli_query($db,$sql1);


       $sql2 = "DELETE FROM `RendezVous`
              WHERE RendezVous.Email = '$myusername1';";

      $result2 = mysqli_query($db,$sql2);
      



      header("location: welcome_admin.php");
     
      
      
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>


<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $fullname = mysqli_real_escape_string($db,$_POST['FullName']);
      $email = mysqli_real_escape_string($db,$_POST['Email']);
      $password = mysqli_real_escape_string($db,$_POST['Passwordd']);
      $gender = mysqli_real_escape_string($db,$_POST['gender']);
      $numuser = mysqli_real_escape_string($db,$_POST['NumUser']);

      
      $sql = "insert into User values('$email','$password','$fullname','$gender','$numuser');";

      $result = mysqli_query($db,$sql);
      header("location: welcome_admin.php");
      
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MedBox : ADMIN</title>

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
        <a class="navbar-brand" href="index.html">Med<span>Box</span></a>
        <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse navbar_area">          
        <ul class="nav navbar-nav navbar-right custom_nav">
          <li><a href="index.html">Home</a></li>
          <li class="active"><a href="doctors.html"><B><FONT color="red">Admin</FONT></B></a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="download.html">Download MedBox</a></li>              
            </ul>
          </li>             
          <li><a href="insc.html"><B><FONT color="red">Inscription</FONT></B></a></li>
          <li><a href="login.html"><B><FONT color="red">Login</FONT></B></a></li>
          <li><a href="logout.php"><B><FONT color="red">Log Out</FONT></B></a></li>      

        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <!-- End navbar -->









<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>My STATICS</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->



  

                         <?php
$con=mysqli_connect("mysql13.000webhost.com","a7394901_admin","090909","a7394901_medbox");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result1 = mysqli_query($con,"SELECT count(*) FROM User");
$result2 = mysqli_query($con,"SELECT count(*) FROM Doctor");



echo "<table border='3' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th><h3><B>Number of MedBox users</B></h3></th>
<th><h3><B>Number of Doctors added by MedBox costumers</B></h3></th>
</tr>";

$row1 = mysqli_fetch_array($result1);
$row2 = mysqli_fetch_array($result2);


echo "<tr>";
echo "<td style='text-align:center;'><h4><B>".   $row1['count(*)'] .    "</B></h4></td>";
echo "<td style='text-align:center;'><h4><B>".   $row2['count(*)'] .    "</B></h4></td>";
echo "</tr>";

echo "</table>";


mysqli_close($con);
?>



<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>MedBox USERS</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->




<?php
$con=mysqli_connect("mysql13.000webhost.com","a7394901_admin","090909","a7394901_medbox");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM User  ;");

echo "<table border='9' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th>User's Email</th>
<th>User's Password</th>
<th>User's FullName</th>
<th>User's Gender</th>
<th>User's Phone Number</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['Password'] . "</td>";
echo "<td>" . $row['FullName'] . "</td>";
echo "<td>" . $row['Gender'] . "</td>";
echo "<td>" . $row['NumUser'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>



<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>Add User</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->




<form class="submitphoto_form" action="" method="post">
                    
                    <input type="text" name="FullName" class="form-control wpcf7-text" placeholder="User Fullname">
                    <input type="mail" name="Email" class="form-control wpcf7-email" placeholder="User Email address">          
                    <input type="Password" name="Passwordd" class="form-control wpcf7-text" placeholder="User Password">
                    
                    <p><h3> User's gender ? </h3> </p>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female


                    <input type="Phone" name="NumUser" class="form-control wpcf7-text" placeholder="User's Phone number">
               
                    <input type="submit" name="submit" value="Create" class="wpcf7-submit photo-submit">    

             
</form>







<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>Delete User</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->

 <form class="submitphoto_form" action="" method="post">
                    
                    <input type="mail" name="username1" class="form-control wpcf7-email" placeholder="Email address to delete">          
                    <input type="submit" value="Delete" class="wpcf7-submit photo-submit">  

             
</form>


<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>Change user password</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->

<form class="submitphoto_form" action="" method="post">
                    
                    <input type="mail" name="username2" class="form-control wpcf7-email" placeholder="Email address">  
                    <input type="Password" name="password" class="form-control wpcf7-text" placeholder="New Password">        
                    <input type="submit"  value="Change" class="wpcf7-submit photo-submit">  

             
</form>











  
  <!-- start clients brand area -->
  <section id="clients_brand">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="clients_brand_area wow flipInX">
            <div class="client_title">
              <hr>
              <h2><span>Our</span> Clients</h2>
            </div>              
            <div class="clients_brand">
              <!-- Start clients brand slider -->
             <ul class="clb_nav wow flipInX">
               
               <li><img src="img/supcom.jpg" alt="brand-img"></li>
               <li><img src="img/SJE.jpg" alt="brand-img"></li>
               <li><img src="img/team.jpg" alt="brand-img"></li>
               <li><img src="img/croissant.jpg" alt="brand-img"></li>
               <li><img src="img/supcom.jpg" alt="brand-img"></li>
               <li><img src="img/SJE.jpg" alt="brand-img"></li>
               <li><img src="img/team.jpg" alt="brand-img"></li>
               <li><img src="img/croissant.jpg" alt="brand-img"></li>
          
          
              
               
             </ul>
             <!-- End clients brand slider -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End clients brand area -->  

  <!-- start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="footer_top">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4">
              
                <div class="single_footer_top contact_mail">
                  <h2>Contact us</h2>
                  <p>We are always open for a quick chat! Give us a call or email us any time and we will respond shortly. <span>+216 21 623 544</span> or <a href="#">medbox@gmail.com</a></p>
                </div>
              </div>
             
                <div class="single_footer_top">
                  <h2>Social Links </h2>
                  <ul class="social_nav">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>        
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="footer_bottom">
            <div class="copyright">
              <p>All right reserved MedBox </p>
            </div>
            <div class="developer">
              <p>Designed By <a href="http://wpfreeware.com/" rel="nofollow">MedBox TEAM</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->


    
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