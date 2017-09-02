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
      
      
       $useremail=$_POST["Email"];
       $fullnamedoctor=$_POST["FullNameDoctor"];
       $numdoc =$_POST["NumDoc"];
       $specialty=$_POST["Specialty"];
       $region=$_POST["Region"];
       $address=$_POST["Address"];
       $feedback=$_POST["FeedBack"];


      $sql="INSERT INTO Doctor  VALUES ('$useremail', '$fullnamedoctor', '$numdoc', '$specialty', '$region', '$address', '$feedback');";
      $result = mysqli_query($conn,$sql);
      header("location: doctors.php");
      
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>




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
      
      $doctorname = mysqli_real_escape_string($conn,$_POST['DocTorName']);
      
      $sql1 = "DELETE FROM Doctor
              WHERE Doctor.FullNameDoctor = '$doctorname';";

      $result1 = mysqli_query($conn,$sql1);

      $sql2 = "DELETE FROM Doctor
              WHERE Doctor.FullNameDoctor = '';";

      $result2 = mysqli_query($conn,$sql2);

      
      header("location: doctors.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>




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
      
      $docnameupdate1 = mysqli_real_escape_string($conn,$_POST['DoctorNameUpdatePhone']);
      $docnameupdatephone = mysqli_real_escape_string($conn,$_POST['NewPhoneUpdate']); 
      


      
      
      $sql = "UPDATE Doctor
              
              SET Doctor.NumDoc = '$docnameupdatephone' 
                 
              WHERE Doctor.FullNameDoctor = '$docnameupdate1' ;";

      $result = mysqli_query($conn,$sql);

      header("location: doctors.php");
     
      
      
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   
?>


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
      
      $docnameupdate2 = mysqli_real_escape_string($conn,$_POST['DoctorNameUpdateAdress']);
      $docnameupdateregion = mysqli_real_escape_string($conn,$_POST['NewRegionUpdate']); 
      $docnameupdateadress = mysqli_real_escape_string($conn,$_POST['NewAdressUpdate']);


      
      
      $sql = "UPDATE Doctor
              
              SET Doctor.Region = '$docnameupdateregion' , Doctor.Address = '$docnameupdateadress'
                 
              WHERE Doctor.FullNameDoctor = '$docnameupdate2' ;";

      $result = mysqli_query($conn,$sql);

      header("location: doctors.php");
     
      
      
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
    <title>Our Doctors</title>

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
          <li><a href="doctors.php"><B><FONT color="red">Our Doctors</FONT></B></a></li>
                          
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
printf("Our doctors: \n");
$res = mysqli_query($conn, 'SELECT FullNameDoctor, NumDoc, Specialty, Region,  Address, FeedBack  FROM Doctor;');
echo "<table border='9' bgcolor='#CCCCC' cellpadding='0' cellspacing='0' style='border-collapse: collapse' bordercolor='#111111' width='100%' id='AutoNumber1'>
<tr>
<th>Doctor's name</th>
<th>Doctor's number</th>
<th>Doctor's speciality</th>
<th>Doctor's region</th>
<th>Doctor's address</th>
<th>Doctor's feedback</th>
</tr>";
while ($row = mysqli_fetch_assoc($res)) {
//var_dump($row);
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
//Close the connection
mysqli_close($conn);
?>

 

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
              <h2>Add a <span>Doctor</span></h2>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="contact_left wow fadeInLeft">



                  <form class="submitphoto_form"  method="post" target="hidden-form">

                    <input type="mail" name="Email" class="form-control wpcf7-email" placeholder="Your Email address">    
                    <input type="text" name="FullNameDoctor" class="form-control wpcf7-text" placeholder="Doctor's name">
                    <input type="Phone" name="NumDoc" class="form-control wpcf7-text" placeholder="Doctor's phone number">
                    <input type="text" name="Specialty" class="form-control wpcf7-text" placeholder="Doctor's speciality">
                    <input type="text" name="Region" class="form-control wpcf7-text" placeholder="Doctor's region">
                    <input type="text" name="Address" class="form-control wpcf7-text" placeholder="Doctor's address">
                    <input type="text" name="FeedBack" class="form-control wpcf7-text" placeholder="Doctor's feedback">
                          
                    
                    <input type="submit" name="submit" value="Add doctor" class="wpcf7-submit photo-submit">    

         
                  </form>
                </div>                  
              </div>



                  </address>
                </div>
              </div>
            </div>              
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->


<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>DELETE Doctor</p>
          </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="contact_left wow fadeInLeft">
                  <form class="submitphoto_form"  method="post" target="hidden-form">
                    
                    <input type="text" name="DocTorName" class="form-control wpcf7-email" placeholder="Doctor name to delete">          
                    <input type="submit" value="Delete" class="wpcf7-submit photo-submit">  

                  </form>

                </div>
              </div>
            </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->

            




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
              <h2>UPDATE Doctor's <span>Phone</span></h2>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="contact_left wow fadeInLeft">



                  <form class="submitphoto_form"  method="post" target="hidden-form">

                      
                    <input type="text" name="DoctorNameUpdatePhone" class="form-control wpcf7-text" placeholder="Doctor's name to update">
                    <input type="Phone" name="NewPhoneUpdate" class="form-control wpcf7-text" placeholder="Doctor's new phone number">
                    <input type="submit" name="submit" value="UPDATE" class="wpcf7-submit photo-submit">    

         
                  </form>
                </div>                  
              </div>



                  </address>
                </div>
              </div>
            </div>              
         </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact section -->






<!-- start special quote -->
  <section id="specialQuote">
    <div class="container">
      <div class="row">
          <div class="col-lg-12 col-md-12 wow bounceInLeft">
          <p>UPDATE Doctor's Region and Adress</p>
          </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6">
                <div class="contact_left wow fadeInLeft">
                  <form class="submitphoto_form"  method="post" target="hidden-form">
                    <input type="text" name="DoctorNameUpdateAdress" class="form-control wpcf7-email" placeholder="Doctor name to update">  
                    <input type="text" name="NewRegionUpdate" class="form-control wpcf7-email" placeholder="Doctor's new region">
                    <input type="text" name="NewAdressUpdate" class="form-control wpcf7-email" placeholder="Doctor's new adress">            
                    <input type="submit" value="UPDATE" class="wpcf7-submit photo-submit">  

                  </form>

                </div>
              </div>
            </div>
      </div>
    </div>
  </section>
  <!-- End special quote -->


   <!-- start clients brand area -->
  <section id="clients_brand">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="clients_brand_area wow flipInX">
            <div class="client_title">
              <hr>
              <h2><span>Thanks</span> to</h2>
            </div>              
            <div class="clients_brand">
              <!-- Start clients brand slider -->
             <ul class="clb_nav wow flipInX">
               
               <li><img src="img/intilaq.jpg" alt="brand-img"></li>
               <li><img src="img/supcom.png" alt="brand-img"></li>
               <li><img src="img/esprit.png" alt="brand-img"></li>
               <li><img src="img/intilaq.jpg" alt="brand-img"></li>
               <li><img src="img/supcom.png" alt="brand-img"></li>
               <li><img src="img/esprit.png" alt="brand-img"></li>
               <li><img src="img/intilaq.jpg" alt="brand-img"></li>
               <li><img src="img/supcom.png" alt="brand-img"></li>
               <li><img src="img/esprit.png" alt="brand-img"></li>
              
           </ul>
             <!-- End clients brand slider -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End clients brand area -->  

    
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
