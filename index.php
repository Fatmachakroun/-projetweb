<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SBF : Home page</title>

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
          <li><a href="index.php">Home</a></li>
          <li><a href="testdoctors.php">Our Doctors</a></li>
          <li><a href="insc.php"><B><FONT color="red">Inscription</FONT></B></a></li>
          <li><a href="login.php"><B><FONT color="red">Login</FONT></B></a></li>                      
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
          <p>Here, you can</p>
          <p>Find doctors added by costumers.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->



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
//Run the Select query
printf("Some statics: \n");

$result1 = mysqli_query($con,"SELECT count(*) FROM User");
$result2 = mysqli_query($con,"SELECT count(*) FROM Doctor");



echo "<table border='3' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th><h3><B>Number of MedBox users</B></h3></th>
<th><h3><B>Number of Doctors added by MedBox costumers</B></h3></th>
</tr>";

$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);


echo "<tr>";
echo "<td style='text-align:center;'><h4><B>".   $row1['count(*)'] .    "</B></h4></td>";
echo "<td style='text-align:center;'><h4><B>".   $row2['count(*)'] .    "</B></h4></td>";
echo "</tr>";

echo "</table>";


mysqli_close($con);
?>


  <!-- start Our Team area -->
  <section id="ourTeam">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="team_area wow fadeInLeftBig">
            <div class="team_title">
              <hr>
              <h2>Meet <span>Our Team</span></h2>
              <p>We are student from Supcom.</p>
            </div>
            <div class="team">
              <ul class="team_nav">
                <li>
                  <div class="team_img">
                    <img src="img/rostom.jpg" alt="team-img">
                  </div>
                  <div class="team_content">
                    <h3>Gharbi Med Rostom</h3>
                    <p>Supcom Student</p>
                  </div>
                  <div class="team_social">
                    <a href="https://www.facebook.com/medrostom.gharbi.18"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.linkedin.com/in/mohamed-rostom-gharbi-207ab312b/fr"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                  </div>
                </li>
                <li>
                  <div class="team_img">
                    <img src="img/yacine.jpg" alt="team-img">
                  </div>
                  <div class="team_content">
                    <h3 class="team_name">Ben Baccar Yacine</h3>
                    <p>Supcom Student</p>
                  </div>
                  <div class="team_social">
                    <a href="https://www.facebook.com/yacine.baccar"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.linkedin.com/in/yacine-ben-baccar-563174106"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                  </div>
                </li>
                <li>
                  <div class="team_img">
                    <img src="img/mejri.jpg" alt="team-img">
                  </div>
                  <div class="team_content">
                    <h3 class="team_name">Mejri Aymen</h3>
                    <p>Supcom Student</p>
                  </div>
                  <div class="team_social">
                    <a href="https://www.facebook.com/profile.php?id=100007104402087"><span class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="https://www.linkedin.com/in/aymen-mejri-1b10b0122?authType=NAME_SEARCH&authToken=2Adl&locale=fr_FR&srchid=5078456531479935650839&srchindex=1&srchtotal=34&trk=vsrp_people_res_name&trkInfo=VSRPsearchId%3A5078456531479935650839%2CVSRPtargetId%3A507845653%2CVSRPcmpt%3Aprimary%2CVSRPnm%3Atrue%2CauthType%3ANAME_SEARCH"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-google-plus"></span></a>
                  </div>
                </li> 
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Our Team area -->

 

  <!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>Your health is our priority.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->

  <!-- start client testimonial -->
  <section id="testimonial">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="testimonial_area wow bounceIn">
            <div class="client_title">
              <hr>
              <h2>What <span>Others are Saying</span></h2>
            </div>
            <ul class="testimon_nav">
              <li>
               <div class="testimonial_content">
                  <blockquote>
                    <p>MedBox is an application that helped me a lot in my life.</p>
                  <small>Abbes Siwar</small>
                  </blockquote>
                  <div class="client_img">
                    <img src="img/siwar.jpg" alt="img">
                  </div>
               </div>
              </li>
             <li>
               <div class="testimonial_content">
                  <blockquote>
                    <p>MedBox is the future, it's an application that can help a lot of persons in there lifes.</p>
                  <small>Sidhom Iheb</small>
                  </blockquote>
                  <div class="client_img">
                    <img src="img/iheb.jpg" alt="img">
                  </div>
               </div>
              </li>
              <li>
               <div class="testimonial_content">
                  <blockquote>
                    <p>Using MedBox is becomming a neccesity since our life is becoming more accelerated.</p>
                  <small>Lilia Fkaier</small>
                  </blockquote>
                  <div class="client_img">
                    <img src="img/lilia.jpg" alt="img">
                  </div>
               </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End client testimonial -->  

  
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
