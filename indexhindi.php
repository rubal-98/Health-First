<?php
session_start();
//connect to database
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
    $password=md5($password); //hash password before storing for security purposes
            $sql="INSERT INTO signup(Fname,Lname,Email,Phone,Address,aadhar,Emergency_contact,Password) VALUES('$fname','$lname','$email','$phone','$address','$aadhar','$ephone','$password')";
            mysqli_query($db,$sql);
            $_SESSION['message']="You are now logged in";
            $_SESSION['username']=$username;
            header("location:askadochindi.html");  //redirect home page

}
?>
<!DOCTYPE html>
<html class="no-js">
   <head>
      <meta charset="utf-8">
      <title>स्वास्थ्य पहले</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Fonts -->
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
      <link href='http://fonts.googleapis.com/css?family=Dosis:400,700' rel='stylesheet' type='text/css'>
      <!-- Bootsrap -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Font awesome -->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!-- Owl carousel -->
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <!-- Template main Css -->
      <link rel="stylesheet" href="assets/css/style.css">
      <!-- Modernizr -->
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
                        <!-- /.header-contact  -->
                     </div>
                     <div class="col-sm-6 col-xs-12 text-right">
                        <ul class="list-unstyled list-inline header-social">
                           <li> <a href="www.facebook.com"> <i class="fa fa-facebook"></i> </a> </li>
                           <li> <a href="www.twitter.com"> <i class="fa fa-twitter"></i>  </a> </li>
                           <li> <a href="www.google.com"> <i class="fa fa-google"></i>  </a> </li>
                        </ul>
                        <!-- /.header-social  -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="navbar-main">
               <div class="container">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                     <span class="sr-only">टॉगल से संचालित करना</span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     <span class="icon-bar"></span>
                     </button>
                     <a class="navbar-brand" href="indexhindi.php"><img src="assets/images/HealthFirst.jpg" alt=""></a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse pull-right">
                     <ul class="nav navbar-nav">
                        <li><a class="is-active" href="indexhindi.php">होम</a></li>
                        <li><a href="hospitalsnearhindi.html">आपके पास अस्पताल</a></li>
                        <li ><a href="remedyhindi.html">उपचार</a>
                        </li>
                        <li><a href="findadochindi.html">डॉक्टर ढूंढें</a></li>
                        <li><a href="emergencyhindi.php">आपातकालीन</a>
                        </li>
                        <li><a href="unknownpatientshindi.html">अज्ञात रोगियों</a>
                        </li>
                     </ul>
                  </div>
                  <!-- /#navbar -->
               </div>
               <!-- /.container -->
            </div>
            <!-- /.navbar-main -->
         </nav>
      </header>
      <!-- /. main-header -->
      <!-- Carousel
         =================================================== -->
      <div id="homeCarousel" class="carousel slide carousel-home" data-ride="carousel">
         <!-- Indicators -->
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
                     <h2 class="carousel-title bounceInDown animated slow">क्योंकि हम हमेशा आपके लिए यहाँ हैं</h2>
                     <h4 class="carousel-subtitle bounceInUp animated slow "></h4>
                     <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">लॉग इन करें</a>
                  </div>
                  <!-- /.carousel-caption -->
               </div>
            </div>
            <!-- /.item -->
            <div class="item ">
               <img src="assets/images/slider/home-slider-2.jpg" alt="">
               <div class="container">
                  <div class="carousel-caption">
                     <h2 class="carousel-title bounceInDown animated slow">एक साथ हम जान बचा सकते हैं</h2>
                     <h4 class="carousel-subtitle bounceInUp animated slow">तो ये करते है !</h4>
                     <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated" data-toggle="modal" data-target="#donateModal">अब प्रवेश करें</a>
                  </div>
                  <!-- /.carousel-caption -->
               </div>
            </div>
            <!-- /.item -->
            <div class="item ">
               <img src="assets/images/slider/home-slider-3.jpg" alt="">
               <div class="container">
                  <div class="carousel-caption">
                    <h2 class="carousel-title bounceInDown animated slow" >हमेशा आपकी देखभाल करें</h2>
                     <h4 class="carousel-subtitle bounceInUp animated slow"></h4>
                     <a href="#" class="btn btn-lg btn-secondary hidden-xs bounceInUp animated slow" data-toggle="modal" data-target="#donateModal">अब प्रवेश करें</a>
                  </div>
                  <!-- /.carousel-caption -->
               </div>
            </div>
            <!-- /.item -->
         </div>
         <a class="left carousel-control" href="#homeCarousel" role="button" data-slide="prev">
         <span class="fa fa-angle-left" aria-hidden="true"></span>
         <span class="sr-only">पिछला</span>
         </a>
         <a class="right carousel-control" href="#homeCarousel" role="button" data-slide="next">
         <span class="fa fa-angle-right" aria-hidden="true"></span>
         <span class="sr-only">अगला</span>
         </a>
      </div>
      <!-- /.carousel -->
      <div class="section-home about-us fadeIn animated">
         <div class="container">
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div class="about-us-col">
                     <div class="col-icon-wrapper">
                        <img src="assets/images/icons/our-mission-icon.png" alt="">
                     </div>
                     <h3 class="col-title">हमारा विशेष कार्य</h3>
                     <div class="col-details">
<p> HEATH पहले सभी आपात स्थितियों में मानव जाति की मदद करने का मिशन है जीवन वास्तव में अनिश्चित है और हमें नहीं पता कि अगले पल में हमारे साथ क्या हो सकता है </ P>
<p> इसलिए हमारा उद्देश्य एक और सभी को सहायता करना है और जितना संभव हो उतना जीवन बचाता है।
 </p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="about-us-col">
                     <div class="col-icon-wrapper">
                        <img src="assets/images/icons/help-icon.png" alt="">
                     </div>
                     <h3 class="col-title">मदद समर्थन</h3>
                     <div class="col-details">

             <p> स्वास्थ्य पर हम आपको पहली बार 24/7 मदद करने के लिए हैं हम यहां किसी भी तरह की आपातकाल के जरिए उन्हें मार्गदर्शन करने के द्वारा इस देश के प्रत्येक नागरिक की सहायता के लिए हैं। </ P>
             <p> आप किसी भी समस्या के बारे में हमसे संपर्क कर सकते हैं और हम इसे असप को हल करने का वचन देते हैं। <p>

                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div class="about-us-col">
                     <div class="col-icon-wrapper">
                        <img src="assets/images/icons/programs-icon.png" alt="">
                     </div>
                     <h3 class="col-title">हमारे कार्यक्रम</h3>
                     <div class="col-details" style="font-size:11px">

     <p> हम अपने कार्यक्रमों को भारत की डिजिटल बनाने के विचार को रखते हुए, हर मदद को आपकी उंगलियों पर रखकर करते हैं।
     हमारे कार्यक्रमों में शामिल हैं-> <br>
     1. अपने स्थान के 5 मील के भीतर सभी अस्पतालों के लिए खोज। <br>
     2. सभी कॉमॉम हेल्थकेयर की समस्याओं के लक्षण और उपचार
     3. किसी विशेष विभाग में एक विशेष चिकित्सक को ढूँढना। <br>
     आपातकाल के मामले में किसी व्यक्ति की जानकारी के लिए खोज करें। <br>
     5. एम्बुलेंस को कॉल करना। <br>
     6. अपने घर पर बैठे डॉक्टर से मुफ्त परामर्श करें। <br>

                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.about-us -->
      <div class="section-home home-reasons">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="reasons-col animate-onscroll fadeIn">
                     <img src="assets/images/reasons/we-fight-togother.jpg" alt="">
                     <div class="reasons-titles">
                        <h3 class="reasons-title">हम साथ साथ संघर्ष करते हैं</h3>
                        <h5 class="reason-subtitle">हम इंसान हैं</h5>
                     </div>
                     <div class="on-hover hidden-xs">

                           <p> हम जानते हैं कि आपातकालीन किसी भी समय हो सकते हैं, किसी क्षण। मानव जीवन बहुत ही अनमोल है और हम इसे सभी तरह की आपात स्थितियों से बचाने का लक्ष्य रखते हैं। दुर्घटनाएं अपरिहार्य हैं लेकिन हम अभी भी इस मानव जीवन को बचाने के लिए एक प्रयास कर सकते हैं। </ P>

                           <p> न केवल दुर्घटनाएं लेकिन स्ट्रोक, चोट, घुट या लंबी अवधि के स्वास्थ्य संबंधी मुद्दों जैसे अन्य प्रकार के चिकित्सा इमरजेंसी भी हैं। </ p>
                           <p> और लोग अक्सर एक आपातकालीन स्थिति में शामिल होने में संकोच करते हैं, तो उस स्थिति में क्या करें? </ p>
                           <p> इसलिए हम यहां समाधान प्रदान करते हैं जो न केवल मानव जीवन को बचाता है बल्कि आपके मूल्यवान समय भी बनाता है, जिससे किसी के लिए ज़रूरत के लिए किसी को मदद करना आसान हो जाता है। </ p></div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="reasons-col animate-onscroll fadeIn">
                     <img src="assets/images/reasons/we-care-about.jpg" alt="">
                     <div class="reasons-titles">
                        <h3 class="reasons-title">हम दूसरों के बारे में ध्यान रखते हैं</h3>
                        <h5 class="reason-subtitle">हम इंसान हैं</h5>
                     </div>
                     <div class="on-hover hidden-xs">
                    <p> स्वास्थ्य पहले हमारा उद्देश्य लोगों को चिकित्सा की जरूरतों पर ध्यान देना और तदनुसार समाधान प्रदान करना है। </ p>
                        <p> हम उनके पास मौजूद इलाके अस्पतालों के बारे में सारी जानकारी प्रदान करते हैं ताकि वे जल्द से जल्द इलाज कर सकें। </ p>
                        <p> हम उन्हें उन लोगों के बारे में जानकारी भी प्रदान करते हैं कि क्या उन्हें विशेष विभाग के डॉक्टर की जरूरत है या वहां मौजूद हैं या जरूरत के समय नहीं। </ p>
                        <p> यहां तक ​​कि एक एम्बुलेंस को बुला रहा है, अस्पताल के लिए फॉर्म भरना या एफआईआर दर्ज करना यहां पर किया जा सकता है। </ p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- /.home-reasons -->
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
                        <h4 class="footer-title">हमसे संपर्क करें<span class="title-under"></span></h4>
                        <div class="footer-content">
                           <div class="footer-form">
                              <div class="footer-form" >
                                 <form action="php/mail.php" class="ajax-form">
                                    <div class="form-group">
                                       <input type="text" name="name" class="form-control" placeholder="नाम" required>
                                    </div>
                                    <div class="form-group">
                                       <input type="email" name="email" class="form-control" placeholder="ईमेल*" required>
                                    </div>
                                    <div class="form-group">
                                       <textarea name="message" class="form-control" placeholder="संदेश" required></textarea>
                                    </div>
                                    <div class="form-group alerts">
                                       <div class="alert alert-success" role="alert">
                                       </div>
                                       <div class="alert alert-danger" role="alert">
                                       </div>
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-submit pull-right">मेसेज भेजें</button>
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
                   <a href="indexhindi.php"> <div class="col-md-1 active">
हिंदी</div></a>
                   </div>
            </div>
         </div>
      </footer>
      <!-- main-footer -->
      <!-- Donate Modal -->
      <div class="modal fade" id="donateModal" tabindex="-1" role="dialog" aria-labelledby="donateModalLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="donateModalLabel">अब प्रवेश करें</h4>
         </div>
         <div class="modal-body">
            <div class="tabbable">
               <!-- Only required for left/right tabs -->
               <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab1" data-toggle="tab">लॉग इन कर</a></li>
                  <li><a href="#tab2" data-toggle="tab">साइन अप करें</a></li>
                  <li class="active"><a href="#tab3" data-toggle="tab">एक डॉक्टर के रूप में लॉग इन करें</a></li>
                  <li><a href="#tab4" data-toggle="tab">एक डॉक्टर के रूप में साइन अप करें</a></li>
               </ul>
               <div class="tab-content">
                  <div class="tab-pane active" id="tab1">
                     <form class="form-donation" action="askadochindi.html">
                        <h3 class="title-style-1 text-center">पंजीकरण करें या साइन-अप करें<span class="title-under"></span>  </h3>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <input type="text" class="form-control" placeholder="उपयोगकर्ता नाम">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12 ">
                              <input type="password" class="form-control"  placeholder="पासवर्ड">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" name="LOGIN">लॉग इन करें</button>
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
                     <form class="form-donation" method="post" action="indexhindi.php">
                        <h3 class="title-style-1 text-center">पंजीकरण करें या साइन-अप करें<span class="title-under"></span>  </h3>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="firstName" placeholder="पहला नाम*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="lastName" placeholder="अंतिम नाम*">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="email" placeholder="ईमेल*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="phone" placeholder="फ़ोन">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="address" placeholder="पता">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="aadhar" placeholder="आधार कार्ड संख्या">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="ephone" placeholder="आपातकालीन संपर्क नंबर">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="password" class="form-control" name="password" placeholder="पासवर्ड">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" name="SUBMIT" >जमा करें</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane" id="tab3">
                     <form class="form-donation" action="askadochindi.html">
                        <h3 class="title-style-1 text-center">पंजीकरण करें या साइन-अप करें <span class="title-under"></span>  </h3>
                        <div class="row">
                           <div class="form-group col-md-12 ">
                              <input type="text" class="form-control" placeholder="उपयोगकर्ता नाम">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12 ">
                              <input type="password" class="form-control"  placeholder="पासवर्ड">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" name="LOGIN" >लॉग इन करें</button>
                           </div>
                        </div>
                     </form>
                  </div>
                  <div class="tab-pane" id="tab4" action="askadochindi.html">
                     <form class="form-donation">
                        <h3 class="title-style-1 text-center">पंजीकरण करें या साइन-अप करें<span class="title-under"></span>  </h3>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="firstName" placeholder="पहला नाम*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="lastName" placeholder="अंतिम नाम*">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="email" placeholder="ईमेल*">
                           </div>
                           <div class="form-group col-md-6">
                              <input type="text" class="form-control" name="phone" placeholder="फ़ोन">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <input type="text" class="form-control" name="Speciality" placeholder="विशेषता">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <input type="text" class="form-control" name="phone" placeholder="आपातकालीन संपर्क नंबर">
                           </div>
                        </div>
                        <div class="row">
                           <div class="form-group col-md-12">
                              <button type="submit" class="btn btn-primary pull-right" name="SUBMIT" >जमा करें</button>
                           </div>
                        </div>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <!-- /.modal -->
      <!--  Scripts
         ================================================== -->
      <!-- jQuery -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')</script>
      <!-- Bootsrap javascript file -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- owl carouseljavascript file -->
      <script src="assets/js/owl.carousel.min.js"></script>
      <!-- Template main javascript -->
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
