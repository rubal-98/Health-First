<?php
session_start();
$db=mysqli_connect("localhost","root","","signup");
if(isset($_POST['SUBMIT']))
{
    $fname=mysql_real_escape_string($_POST['firstName']);
    $lname=mysql_real_escape_string($_POST['lastName']);
    $email=mysql_real_escape_string($_POST['email']);
    $phone=mysql_real_escape_string($_POST['phone']);
    $address=mysql_real_escape_string($_POST['address']);
    $aadhar=mysql_real_escape_string($_POST['aadhar']);
    $ephone=mysql_real_escape_string($_POST['ephone']);
    $password=mysql_real_escape_string($_POST['password']);
    $password=md5($password);
            $sql="INSERT INTO signup(Fname,Lname,Email,Phone,Address,aadhar,Emergency_contact,Password) VALUES('$fname','$lname','$email','$phone','$address','$aadhar','$ephone','$password')";
            mysqli_query($db,$sql);
            $_SESSION['message']="You are now logged in";
            $_SESSION['username']=$username;
            header("location:askadoc.html");

}
?>
<!DOCTYPE html>
<html class="no-js">
   <head>
      <meta charset="utf-8">
      <title>Health First</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <script src="assets/js/modernizr-2.6.2.min.js"></script>
      <style>
         #map {
         height: 200px;
         width: 100%;
         }
      </style>
   </head>
   <body>
      <header class="main-header">
         <nav class="navbar navbar-static-top">
            <div class="navbar-top">
               <div class="container">
                  <div class="row">
                     <div class="col-sm-6 col-xs-12">
                        <ul class="list-unstyled list-inline header-contact">
                           <li> <i class="fa fa-phone"></i> <a href="tel:">987-654-3210 </a> </li>
                           <li> <i class="fa fa-envelope"></i> <a href="mailto:heathfirst@gov.org">heathfirst@gov.org</a> </li>
                        </ul>
                     </div>
                     <div class="col-sm-6 col-xs-12 text-right">
                        <ul class="list-unstyled list-inline header-social">
                           <li> <a href="www.facebook.com"> <i class="fa fa-facebook"></i> </a> </li>
                           <li> <a href="www.twitter.com"> <i class="fa fa-twitter"></i>  </a> </li>
                           <li> <a href="www.google.com"> <i class="fa fa-google"></i>  </a> </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="navbar-main">
               <div class="container">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                     <span class="sr-only">Toggle navigation</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="index.php"><img src="assets/images/HealthFirst.jpg" alt=""></a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse pull-right">
                     <ul class="nav navbar-nav">
                        <li><a class="is-active" href="index.php">HOME</a></li>
                        <li><a href="hospitalsnear.html">HOSPITALS NEAR YOU</a></li>
                        <li ><a href="remedy.html">REMEDIES</a>
                        </li>
                        <li><a href="findadoc.html">FIND A DOCTOR</a></li>
                        <li><a href="emergency.php">EMERGENCY</a>
                        </li>
                        <li><a href="unknownpatients.html">UNKNOWN PATIENTS</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#homeCarousel" data-slide-to="1"></li>
            <li data-target="#homeCarousel" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <img src="assets/images/slider/home-slider-1.jpg" alt="">
               <div class="container">
                  <div class="carousel-caption">
                     <h2 class="carousel-title bounceInDown animated slow">Because we are always here for you</h2>
                     <h4 class="carousel-subtitle bounceInUp animated slow "></h4>
                     <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">LOGIN NOW</a>
                  </div>
               </div>
            </div>
            <div class="item ">
               <img src="assets/images/slider/home-slider-2.jpg" alt="">
               <div class="container">
                  <div class="carousel-caption">
                     <h2 class="carousel-title bounceInDown animated slow">Together we can save lives</h2>
                     <h4 class="carousel-subtitle bounceInUp animated slow"> So let's do it !</h4>
                     <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">LOGIN NOW</a>
                  </div>
               </div>
            </div>
            <div class="item ">
               <img src="assets/images/slider/home-slider-3.jpg" alt="">
               <div class="container">
                  <div class="carousel-caption">
                     <h2 class="carousel-title bounceInDown animated slow" >Always looking after you</h2>
                     <h4 class="carousel-subtitle bounceInUp animated slow"></h4>
                     <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">LOGIN NOW</a>
                  </div>
               </div>
            </div>
         </div>
         <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
         <span class="fa fa-angle-left" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
         <span class="fa fa-angle-right" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
         </a>
      </div>
      <div class="section-home about-us fadeIn animated">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="about-us-col">
                     <div class="col-icon-wrapper">
                        <img src="assets/images/icons/our-mission-icon.png" alt="">
                     </div>
                     <h3 class="col-title">our mission</h3>
                     <div class="col-details">
                        <p>HEATH FIRST has the mission to help the humankind in all emergencies. Life is really uncertain and we don't know what might happen to us the next moment. </p>
<p>So we aim to help one and all by and save as many lives as possible.
 </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="about-us-col">
                     <div class="col-icon-wrapper">
                        <img src="assets/images/icons/programs-icon.png" alt="">
                     </div>
                     <h3 class="col-title">our programs</h3>
                     <div class="col-details" style="font-size:11px">
                        <p>We make our programs keeping the idea of making india digital,keeping every help at your fingertips.
Our programs include-><br>
1.Searching for all the hospitals within 5 miles of your location.<br>
2.Finding symptoms and treatments to all the commom healthcare problems.<br>
3.Finding a particular doctor in a particular department.<br>
4.Search for details of a person in case of emergency.<br>
5.Calling the ambulance.<br>
6.Get free consultation from a doctor sitting at your house. <br>

                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="about-us-col">
                     <div class="col-icon-wrapper">
                        <img src="assets/images/icons/help-icon.png" alt="">
                     </div>
                     <h3 class="col-title">Help & support</h3>
                     <div class="col-details">
                        <p>We at health first are there to help you 24/7. We are here to help each and every citizen of this country by properly guiding them through any kind of emergency.</p>
<p>You can contact us regarding any problem you face and we promise to solve it asap.<p>

                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
      <div class="section-home home-reasons">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="reasons-col animate-onscroll fadeIn">
                     <img src="assets/images/reasons/we-fight-togother.jpg" alt="">
                     <div class="reasons-titles">
                        <h3 class="reasons-title">We fight together</h3>
                        <h5 class="reason-subtitle">We are humans</h5>
                     </div>
                     <div class="on-hover hidden-xs">
                      <p> We know that emergencies can happen any time, any moment. Human life is very precious and we aim at saving it from all kind of emergencies. Accidents are unavoidable but we can still make an effort to save this human life.</p>

                        <p> Not only accidents but there are also other types of medical emrgencies like stroke, injury, choking or long-term health issues.</p>
                        <p>And People are often hesitant to get involved in an emergency situation so what to do in that case?</p>
                        <p>So we here provide solutions that not only saves human life but also your precious time, making it easy for anyone to help the person in need.</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="reasons-col animate-onscroll fadeIn">
                     <img src="assets/images/reasons/we-care-about.jpg" alt="">
                     <div class="reasons-titles">
                        <h3 class="reasons-title">WE care about others</h3>
                        <h5 class="reason-subtitle">We are humans</h5>
                     </div>
                     <div class="on-hover hidden-xs">
                        <p> HEALTH FIRST Our aim is to focus on the people medical needs and provide solutions accordingly.</p>
                        <p> We provide all information about the locality hospitals present near by them so that they get treatment as soon as possible.</p>
                        <p>We also provide them information about whether the doctor of particular department they need help is present there or not at the time of need.</p>
                        <p>Also calling an ambulance, filling a form for a hospital or filing a FIR can be done here.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <footer class="main-footer">
         <div class="footer-top">
         </div>
         <div class="footer-main">
            <div class="container">
               <div class="row">
                  <div class="col-md-8">
                     <div id="map"></div>
                  </div>
                  <div class="col-md-4">
                     <div class="footer-col">
                        <h4 class="footer-title">Contact us <span class="title-under"></span></h4>
                        <div class="footer-content">
                           <div class="footer-form">
                              <div class="footer-form" >
                                 <form action="php/mail.php" class="ajax-form">
                                    <div class="form-group">
                                       <input type="text" name="name" class="form-control" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                       <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                    </div>
                                    <div class="form-group">
                                       <textarea name="message" class="form-control" placeholder="Message" required></textarea>
                                    </div>
                                    <div class="form-group alerts">
                                       <div class="alert alert-success" role="alert">
                                       </div>
                                       <div class="alert alert-danger" role="alert">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-submit pull-right">Send message</button>
                                    </div>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="clearfix"></div>
               </div>
                  <div class="row">
                    <a href="index.php"><div class="col-md-1">ENGLISH</div></a>
                      <a href="indexhindi.php"> <div class="col-md-1">
हिंदी<div></a>

            </div>
         </div>
      </footer>
      <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">LOGIN NOW</h4>
         </div>
         <div class="modal-body">
            <div class="tabbable">
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab1" data-toggle="tab">LOGIN</a></li>
                  <li><a href="#tab2" data-toggle="tab">SIGN UP</a></li>
                  <li class="active"><a href="#tab3" data-toggle="tab">LOGIN as a DOCTOR</a></li>
                  <li><a href="#tab4" data-toggle="tab">SIGN UP as a DOCTOR</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                     <form class="form-donation" action="askadoc.html">
                        <h3 class="title-style-1 text-center">Register or Sign-up<span class="title-under"></span>  </h3>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <input type="text" class="form-control" placeholder="USERNAME">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12 ">
                              <input type="password" class="form-control"  placeholder="PASSWORD">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" name="LOGIN">LOGIN</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane" id="tab2">
                    <?php
    if(isset($_SESSION['message']))
    {
         echo "<div>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
                     <form class="form-donation" method="post" action="index.php">
                        <h3 class="title-style-1 text-center">Register or Sign-up<span class="title-under"></span>  </h3>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="firstName" placeholder="First name*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="email" placeholder="Email*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="phone" placeholder="Phone">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="address" placeholder="Address">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="aadhar" placeholder="Aadhar Card No">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="ephone" placeholder="Emergency Contact Number">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="password" class="form-control" name="password" placeholder="password">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" name="SUBMIT" >SUBMIT</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane" id="tab3">
                     <form class="form-donation" action="askadoc.html">
                        <h3 class="title-style-1 text-center">Register or Sign-up <span class="title-under"></span>  </h3>
                        <div class="row">
                           <div class="form-group col-md-12 ">
                              <input type="text" class="form-control" placeholder="USERNAME">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12 ">
                              <input type="password" class="form-control"  placeholder="PASSWORD">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" name="LOGIN" >LOGIN</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane" id="tab4" >
                     <form class="form-donation" action="askadoc.html">
                        <h3 class="title-style-1 text-center">Register or Sign-up<span class="title-under"></span>  </h3>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="firstName" placeholder="First name*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="lastName" placeholder="Last name*">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="email" placeholder="Email*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="phone" placeholder="Phone">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="Postcode" placeholder="Postcode">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="LicenseNo" placeholder="License Number">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <input type="text" class="form-control" name="speciality" placeholder="Speciality">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" name="SUBMIT" >SUBMIT</button>
                           </div>
                        </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>
      <script src="assets/js/bootstrap.min.js"></script>
      <script src="assets/js/owl.carousel.min.js"></script>
      <script src="assets/js/main.js"></script>
      <script>
         function initMap() {
           var center = {lat: 30.7333, lng: 76.7794};
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 13,
             center: center
           });
           var marker = new google.maps.Marker({
             position: center,
             map: map
           });
         }
      </script>
      <script async defer
         src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVB1tWdYVrQbPp1srIvb32KsZ3e8f377A&callback=initMap"></script>
   </body>
</html>
