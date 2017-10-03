<?php
$connect = mysqli_connect("localhost", "root", "","signup");
$output='';
if(isset($_POST['search'])){
    $fname = $_POST['fname'];
    $query = mysqli_query($connect,"SELECT `Emergency_contact` FROM `signup` WHERE `Fname`= '$fname'") or die("Could not search!");
    $count = mysqli_num_rows($query);
    if($count == 0){
      $ephone="";
        $output="There was no search result!";
        echo "<script type='text/javascript'>alert('$output');</script>";
    }
    else{
        while($row=mysqli_fetch_array($query)){
            $ephone=$row['Emergency_contact'];
        }
    }
}
else{
    $ephone="";
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
                           <li> <a href="https://www.facebook.com"> <i class="fa fa-facebook"></i> </a> </li>
                           <li> <a href="https://www.twitter.com"> <i class="fa fa-twitter"></i>  </a> </li>
                           <li> <a href="https://www.google.com"> <i class="fa fa-google"></i>  </a> </li>
                        </ul>
                        <!-- /.header-social  -->
                     </div>
                  </div>
               </div>
            </div>
            <div class="navbar-main">
               <div class="container">
                  <div class="navbar-header">

                     <a class="navbar-brand" href="indexhindi.php"><img src="assets/images/HealthFirst.jpg" alt=""></a>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse pull-right">
                     <ul class="nav navbar-nav">
                        <li><a href="indexhindi.php">होम</a></li>
                        <li><a href="hospitalsnearhindi.html">आपके पास अस्पताल</a></li>
                        <li ><a href="remedyhindi.html">उपचार</a>
                        </li>
                        <li><a href="findadochindi.html">डॉक्टर ढूंढें</a></li>
                        <li><a class="is-active" href="emergencyhindi.html">आपातकालीन</a>
                          <li><a href="unknownpatientshindi.html">अज्ञात रोगियों</a>
                          </li>
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
      <div class="page-heading text-center">
         <div class="container zoomIn animated">
            <h1 class="page-title">आपातकालीन<span class="title-under"></span></h1>
            <p class="page-description">
               यहां आप किसी व्यक्ति के लिए खोज कर सकते हैं। या शायद एक पास एम्बुलेंस कॉल करें
            </p>
         </div>
      </div>
      <div class="main-container fadeIn animated">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form class="form-group " style="font-size:30px"  method="post" action="emergencyhindi.php">
                     एक व्यक्ति के लिए खोज:
                     <input type="text" class="form-control" name="fname" placeholder="नाम" style="font-size:30px;">
                     <input type="text" class="form-control" name="Emergency_contact" placeholder="
आपातकालीन संपर्क"  style="font-size:30px;" value="<?php echo $ephone;?>">
                     <button name="search" type="submit" class="btn btn-primary pull-right" style="font-size:30px; ">खोज</button>
                  </form>
               </div>
               <div class="col-md-6">
                <a href="tel:102">  <button type="submit" class="btn btn-primary pull-right" style="font-size:25px;align:left;top:0;left:0"> ❗ एंबुलेंस  ❗ <br>  बुलाओ  </button></a>
                  <a href="tel:100">  <button type="submit" class="btn btn-primary pull-right" style="font-size:25px;align:left;top:0;left:0">❗ प्राथमिकी ❗  <br> दर्ज करें</button></a>
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
                        <h4 class="footer-title">हमारे बारे में <span class="title-under"></span></h4>
                        <div class="footer-content">
                           <p>
                              <strong>स्वास्थ्य पहले</strong> हमारा लक्ष्य ग्राहकों की जरूरतों पर ध्यान केंद्रित करना और तदनुसार समाधान प्रदान करना है।हम उनके पास मौजूद इलाके अस्पतालों के बारे में सभी जानकारी प्रदान करते हैं ताकि वे जल्द से जल्द इलाज कर सकें।
                           </p>
                           <p>
                              हम वहां मौजूद विशेषज्ञों के बारे में जानकारी भी प्रदान करते हैं या उस समय उपलब्ध डॉक्टर के सभी विवरणों के साथ नहीं।
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="footer-col">
                        <h4 class="footer-title">हमसे संपर्क करें<span class="title-under"></span></h4>
                        <div class="footer-content">
                           <div class="footer-form" >
                              <form action="php/mail.php" class="ajax-form">
                                 <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="नाम" required>
                                 </div>
                                 <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="ईमेल" required>
                                 </div>
                                 <div class="form-group">
                                    <textarea name="message" class="form-control" placeholder="संदेश
" required></textarea>
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
                  <div class="clearfix"></div>
               </div>
            </div>
         </div>
      </footer>
      <!-- jQuery -->
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script>window.jQuery || document.write('<script src="assets/js/jquery.min.js"><\/script>')</script>
      <!-- Bootsrap javascript file -->
      <script src="assets/js/bootstrap.min.js"></script>
      <!-- Google map  -->
      <!-- Template main javascript -->
      <script src="assets/js/main.js"></script>
   </body>
</html>
