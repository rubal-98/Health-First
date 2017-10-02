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
                           <li> <a href="https://www.facebook.com"> <i class="fa fa-facebook"></i> </a> </li>
                           <li> <a href="https://www.twitter.com"> <i class="fa fa-twitter"></i>  </a> </li>
                           <li> <a href="https://www.google.com"> <i class="fa fa-google"></i>  </a> </li>
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
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="hospitalsnear.html">HOSPITALS NEAR YOU</a></li>
                        <li ><a href="remedy.html">REMEDIES</a>
                        </li>
                        <li><a href="findadoc.html">FIND A DOCTOR</a></li>
                        <li><a class="is-active" href="emergency.html">EMERGENCY</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </nav>
      </header>

      <div class="page-heading text-center">
         <div class="container zoomIn animated">
            <h1 class="page-title">EMERGENCY<span class="title-under"></span></h1>
            <p class="page-description">
               Here you can search for a person. Or maybe call a nearby ambulance.
            </p>
         </div>
      </div>
      <div class="main-container fadeIn animated">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form class="form-group " style="font-size:30px"  method="post" action="emergency.php">
                     SEARCH FOR A PERSON:
                     <input type="text" class="form-control" name="fname" placeholder="Name" style="font-size:30px;">
                     <input type="text" class="form-control" name="Emergency_contact" placeholder="Emergency_contact"  style="font-size:30px;" >
                     <button name="search" type="submit" class="btn btn-primary pull-right" style="font-size:30px; ">SEARCH</button>
                  </form>
               </div>
               <div class="col-md-6">
                  <a href="tel:102">  <button type="submit" class="btn btn-primary pull-right" style="font-size:25px;align:left;top:0;left:0">CALL AN <br> ❗ AMBULANCE ❗</button></a>
                    <a href="tel:100">  <button type="submit" class="btn btn-primary pull-right" style="font-size:25px;align:left;top:0;left:0">FILE A <br> ❗ FIR ❗ </button></a>
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
                  <div class="col-md-6">
                     <div class="footer-col">
                        <h4 class="footer-title">About us <span class="title-under"></span></h4>
                        <div class="footer-content">
                           <p>
                              <strong>HEALTH FIRST</strong> Our aim is to focus on the customers needs and provide solutions accordingly.
                              we provide all information about the locality hospitals present near by them so that they get treatment as soon as possible.
                           </p>
                           <p>
                              we also provide them information about the specialist present there or not with all the details of doctor available at that time.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-col">
                        <h4 class="footer-title">Contact us <span class="title-under"></span></h4>
                        <div class="footer-content">
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
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>

            <script src="assets/js/bootstrap.min.js"></script>

            <script src="assets/js/main.js"></script>

   </body>
</html>
