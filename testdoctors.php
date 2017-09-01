<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MedBox : Our Doctors</title>

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
          <li class="active"><a href="doctors.html">Our Doctors</a></li>
          <li><a href="contact.html">Contact Us</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="download.html">Download MedBox</a></li>              
            </ul>
          </li>             
          <li><a href="insc.html"><B><FONT color="red">Inscription</FONT></B></a></li>
          <li><a href="login.html"><B><FONT color="red">Login</FONT></B></a></li>                    
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
          <p>Find doctors added by MedBox costumers, and there ratings.</p>
          <p>Find doctors added by MedBox costumers, and there ratings.</p>
          <p>Find doctors added by MedBox costumers, and there ratings.</p>
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
<th>Doctor's addres</th>
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
