<?php
   include('session.php');
   
?>


<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $medname = mysqli_real_escape_string($conn,$_POST['MedName']);
      $type = mysqli_real_escape_string($conn,$_POST['MedType']);
      $startdate = mysqli_real_escape_string($conn,$_POST['StartDate']);
      $finishdate = mysqli_real_escape_string($conn,$_POST['FinishDate']);
      $timeofintake = mysqli_real_escape_string($conn,$_POST['MedTime']);
      $description = mysqli_real_escape_string($conn,$_POST['MedDesc']);

      
      $sql = "insert into Meds values(id,'$login_session','$medname','$type','$startdate','$finishdate','$timeofintake',StatusMed,'$description');";

      $result = mysqli_query($conn,$sql);
      header("location: welcome_user.php");
      
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>


<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      
      
      $FullNameDoctor = mysqli_real_escape_string($conn,$_POST['DocName']);
      $NumDoc = mysqli_real_escape_string($conn,$_POST['DocNum']);
      $Speciality = mysqli_real_escape_string($conn,$_POST['DocSpec']);
      $Region = mysqli_real_escape_string($conn,$_POST['DocRegion']);
      $Address = mysqli_real_escape_string($conn,$_POST['DocAddress']);
      $FeedBack = mysqli_real_escape_string($conn,$_POST['DocFeed']);

      
      $sql = "insert into Doctor values(id,'$login_session','$FullNameDoctor','$NumDoc', '$Speciality','$Region','$Address','$FeedBack');";

      $result = mysqli_query($conn,$sql);
      header("location: welcome_user.php");
      
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
    <title>MedBox : Profile</title>

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
          <li class="active"><a href="doctors.html"><B><FONT color="red">Profile</FONT></B></a></li>
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


    <!-- start slider section -->
  <section id="sliderSection">            
    <div class="mainslider_area">
      <!-- Start super slider -->
      <div id="slides">
        <ul class="slides-container">
          <!-- Start single slider-->
          <li>
            <img src="img/slider/4.jpg" alt="img">
            <div class="slider_caption">
              <h2><B>Welcome To <span><FONT color="red"> MedBox</FONT></span></B></h2>
              <p><B><FONT color="red">Take a look at your Meds, Appointments and Doctors credentials.</FONT></B></p>
            </div>
          </li> 
          <!-- Start single slider-->           
          
          <!-- Start single slider-->
          <li>
            <img src="img/slider/digital_medecine.jpg" alt="img">
             <div class="slider_caption">
              <h2><span>Your health is,</span> important to us.</h2>
            </div>
           </li>
        </ul>
        <nav class="slides-navigation">
          <a href="#" class="next"></a>
          <a href="#" class="prev"></a>
        </nav>
      </div>
    </div>
  </div>    
  </section>
  <!-- End slider section -->
 
 

<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>My MEDS</p>
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

$result1 = mysqli_query($con,"SELECT MedName,type,StartingDate,FinishDate,TimeOfIntake,Description  FROM Meds WHERE Meds.UserEmail='$login_session'  ;");

echo "<table border='9' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th>Meds's name</th>
<th>Meds's type</th>
<th>Meds's Strating Date</th>
<th>Meds's Finish Date</th>
<th>Meds's Time Of Intake</th>
<th>Meds's Description</th>
</tr>";

while($row = mysqli_fetch_array($result1))
{
echo "<tr>";
echo "<td>" . $row['MedName'] . "</td>";
echo "<td>" . $row['type'] . "</td>";
echo "<td>" . $row['StartingDate'] . "</td>";
echo "<td>" . $row['FinishDate'] . "</td>";
echo "<td>" . $row['TimeOfIntake'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
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
          <p>My APPOINTMENTS</p>
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

$result = mysqli_query($con,"SELECT FullNameDoctor,	DateRDV,	TimeRdv,	Description  FROM RendezVous WHERE RendezVous.UserEmail ='$login_session' ;");

echo "<table border='9' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th>Doctor's name</th>
<th>Appointment's date</th>
<th>Appointment's time</th>
<th>Appointment's Description</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FullNameDoctor'] . "</td>";
echo "<td>" . $row['DateRDV'] . "</td>";
echo "<td>" . $row['TimeRdv'] . "</td>";
echo "<td>" . $row['Description'] . "</td>";
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
          <p>My DOCTORS</p>
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

$result = mysqli_query($con,"SELECT FullNameDoctor  ,NumDoc , Specialty, Region,  Address, FeedBack  FROM Doctor WHERE Doctor.UserEmail='$login_session' ");

echo "<table border='9' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th>Doctor's name</th>
<th>Doctor's number</th>
<th>Doctor's speciality</th>
<th>Doctor's region</th>
<th>Doctor's addres</th>
<th>Doctor's feedback</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['FullNameDoctor'] . "</td>";
echo "<td>" . $row['NumDoc'] . "</td>";
echo "<td>" . $row['Specialty'] . "</td>";
echo "<td>" . $row['Region'] . "</td>";
echo "<td>" . $row['Address'] . "</td>";
echo "<td>" . $row['FeedBack'] . "</td>";
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
          <p>Add MEDS</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->



<form class="submitphoto_form" action="" method="post">
                    
                    <input type="text" name="MedName" class="form-control wpcf7-text" placeholder="Meds Name">
                    <input type="mail" name="MedType" class="form-control wpcf7-email" placeholder="Meds Type">          
                    <input type="text" name="StartDate" class="form-control wpcf7-text" placeholder="Starting Date : yyyy-mm-dd">
                    <input type="text" name="FinishDate" class="form-control wpcf7-text" placeholder="Finish Date : yyyy-mm-dd">
                    <input type="text" name="MedTime" class="form-control wpcf7-text" placeholder="Time Of Intake : HH:mm:ss">
                     <input type="text" name="MedDesc" class="form-control wpcf7-text" placeholder="Meds Description">
               
                    <input type="submit" name="submit" value="AddMeds" class="wpcf7-submit photo-submit">    

             
</form>





<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>Add DOCTOR</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->



<form class="submitphoto_form" action="" method="post">
                    
                    <input type="text" name="DocName" class="form-control wpcf7-text" placeholder="Doctor's name">
                    <input type="mail" name="DocNum" class="form-control wpcf7-email" placeholder="Doctor's number">          
                    <input type="text" name="DocSpec" class="form-control wpcf7-text" placeholder="Doctor's speciality">
                    <input type="text" name="DocRegion" class="form-control wpcf7-text" placeholder="Doctor's region">
                    <input type="text" name="DocAddress" class="form-control wpcf7-text" placeholder="Doctor's address">
                     <input type="text" name="DocFeed" class="form-control wpcf7-text" placeholder="Doctor's feedback from 0 - 5">
               
                    <input type="submit" name="submit" value="AddDoc" class="wpcf7-submit photo-submit">    

             
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
