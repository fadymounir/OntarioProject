<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Light endoscopy Devices</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--compatability explorere-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--first mobile meta-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Raleway" rel="stylesheet">
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <link href="../css/font-awesome.min.css" rel="stylesheet" />
    <link href="../css/StyleSheet1.css" rel="stylesheet" />
    <link href="mystylesheet.css" rel="stylesheet" />
    <link href="../css/animate.css" rel="stylesheet" />
    <!--bootstap  -->
    <script src="../js/html5shiv.min.js"></script>
    <script src="../js/respond.min.js"></script>
</head>
<body>
<?php 
  if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=filter_var($_POST['username'],FILTER_SANITIZE_STRING);
    $email=filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
    $tel=filter_var($_POST['tel'],FILTER_SANITIZE_NUMBER_INT);
    $message=filter_var($_POST['message'],FILTER_SANITIZE_STRING);
    $formerrors= array();
    if (strlen($username) <3) {
      $formerrors[] ="username is must larger than 3 char";
    }
    if (strlen($username) >20) {
      $formerrors[] ="username is must less than 20 char";
    }
    if(strlen($message) <10) {
      $formerrors[] ="the message is must than 10 char";
    }
    if (empty($formerrors)) {    
      $headers ='from: '. $email;
      $myemail= "Jo.ontarioinc@gmail.com";
      $subject = "Ontario Contact Form";
      $msg= $message . " Number Phone " . $tel;
      mail($myemail,$subject,$msg,$headers);
    $username='';
    $email='';
    $tel='';
    $message='';

      echo '<script> alert("Message Send Sussfully Waiting the Ontario Company To Respond");</script>';
    }
  }
?>
  <!--start option box-->
  <section   class="option_box">
      <div  class="social">
        <p><a style="color:#2b3f8c" href="https://www.facebook.com/OnTario-Medical-suppliers-1905075006380949/"><i class="fa fa-facebook-square fa-3x"></i></a></p>
        <p><a style="color:#5bc0de" href="https://twitter.com/ontario_m"></s> <i class="fa fa-twitter-square fa-3x"></i></a></p>
        <p><a style="color:#d9534f" href="https://plus.google.com/u/0/106671112115345680611"><i class="fa fa-google-plus-square fa-3x"></i></a></p>
        <p><a style="color:#d9534f" href="https://www.youtube.com/channel/UCxa1UfunDdJTMqRRJ1WgIxw"><i class="fa fa-youtube-square fa-3x"></i></a></p>
      </div>
      <i class="fa fa-arrow-right fa-3x arrow"></i>
  </section>
  <!--end option box-->
    <!--start navpar-->
    <nav id="hom" class="navbar navbar-inverse navbar">
  <div class="container rel">   
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="main_color">OnTario</span></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="ournav">
      <ul class="nav navbar-nav navbar-right links">
        <li><a href="../index.php" data-value="hom">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="../index.php">Category</a></li>
        <li><a href="../index.php">About Us</a></li>
        <li><a href="../index.php" >Our Location</a></li>
        <li><a href="#" data-value="con">Contact Us</a></li>
        <li><a href="../index.php" >Our Services</a></li>        
        </li>
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>




<!-- start cat nav-->

<section class="cat_nav text-center">
    <div class="container">
      <div  class="col-md-2 col-sm-4 col-xs-6 all selected filter " data-filter="all" >
        <div class="btn btn-primary">All</div>
      </div>
      <div  class="col-md-2 col-sm-4 col-xs-6 filter" data-filter=".cat1" >
        <div class="btn btn-primary">KarlStorz</div>
      </div>
      <div  class="col-md-2 col-sm-4 col-xs-6 filter" data-filter=".cat2" >
        <div class="btn btn-primary filter">Olympus</div>
      </div>        
      <div  class="col-md-2 col-sm-4 col-xs-6 filter" data-filter=".cat3" >        
        <div class="btn btn-primary ">Pentax</div>
      </div> 

            <div  class="col-md-2 col-sm-4 col-xs-6 filter" data-filter=".cat4" >        
        <div class="btn btn-primary ">Stryker</div>
      </div>  
  </div>  
</section>
<!-- end cat nav-->
<!--start our pro-->
  <section  class="our_product">
    <div  class="container">
      <div id="container" class="row">

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat1">
              <img src="Light_sources/KarlStorzLightSources/thumb_185_130_150_W_cold_lightOAWm.png">
                <p>Xenon Nova 300 (20 134001)</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat1">
              <img src="Light_sources/KarlStorzLightSources/thumb_185_130_power_LED_175PIjr.jpg">
                <p>Techno Light 270 (81 123501 A)</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat1">
              <img src="Light_sources/KarlStorzLightSources/thumb_185_130_techno_arc_60tedj.png">
                <p>Power LED 175 (20 161401-1)</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat1">
              <img src="Light_sources/KarlStorzLightSources/thumb_185_130_techno_led_nova_150Pjfw.jpg">
                <p>Techno Arc 60 (81 131001)</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat1">
              <img src="Light_sources/KarlStorzLightSources/thumb_185_130_techno_light_270rikz.jpg">
                <p>Techno LED Nova 150 (SL 150)</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat1">
              <img src="Light_sources/KarlStorzLightSources/thumb_185_130_xenon_nova_300TLph.jpg">
                <p>150 Cold Light (81472 B)</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>

        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat2">
              <img src="Light_sources/OlympusLightSources/thumb_185_130_CLV-_S300jvK.jpg">
                <p>CLV-190</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>  



                <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat2">
              <img src="Light_sources/OlympusLightSources/thumb_185_130_CLV-160GZmO.jpg">
                <p>Olympus CLV-180</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>  


                <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat2">
              <img src="Light_sources/OlympusLightSources/thumb_185_130_CLV-180syic.jpg">
                <p>Olympus CLV-160</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>  


                <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat2">
              <img src="Light_sources/OlympusLightSources/thumb_185_130_CLV-S20Rc1T.jpg">
                <p>Olympus CLV-U40</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>  


                <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat2">
              <img src="Light_sources/OlympusLightSources/thumb_185_130_clv-s190-1bArp.jpg">
                <p>Olympus CLV-U20</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>  


                <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat2">
              <img src="Light_sources/OlympusLightSources/thumb_185_130_CLV-U20PcUo.jpg">
                <p>Olympus CLV-S30</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>  


                <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat2">
              <img src="Light_sources/OlympusLightSources/thumb_185_130_CLV-U40YLGv.jpg">
                <p>Olympus CLV-S20</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat3">
              <img src="Light_sources/PentaxLightSources/thumb_185_130_lh-150pc49iY.jpg">
                <p>Pentax LH-150PC</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>




        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat4">
              <img src="Light_sources/StrykerLightSources/thumb_185_130_L9000IXjK.jpg">
                <p>Stryker X600</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat4">
              <img src="Light_sources/StrykerLightSources/thumb_185_130_X6000VdNA.jpg">
                <p>Stryker L9000</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>



        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat4">
              <img src="Light_sources/StrykerLightSources/thumb_185_130_X7000aJgB.jpg">
                <p>Stryker X8000</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>



        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="pro text-center mix cat4">
              <img src="Light_sources/StrykerLightSources/thumb_185_130_X8000puVP.jpg">
                <p>Stryker X7000</p>
                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
            </div>  
        </div>









                                   
      </div>
    </div>
  </section>
<!--end our pro-->
     <!--start Contact Us-->
     <section id="con" class="contact">
        <div class="overlay">
      <div class="container">
        <h1 class="text-center">
        <span class="main_color1"><i class="fa fa-headphones fa-lg"></i> Contact </span>
         <span class="main_color">Us</span></h1>
          <div class="text-center our_info">
              <span><i class="fa fa-mobile fa-2x"></i>:xxx-xxx-xxx</span>
              <span><i class="fa fa-map-marker fa-2x"></i>:addresse:xxxx</span> 
          </div>             
          <form class="contact_form" action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="POST" > 
            <div class="col-md-6">
                  <div class="form-group">
                    <input placeholder="enter your user name" class="form-control" type="text" name="username" value="<?php if(isset($username)) echo $username; ?>">
                  </div>
                  <div class="form-group">                  
                    <input placeholder="enter your email" class="form-control" type="email" name="email" value="<?php if(isset($emil)) echo $email; ?>">
                  </div>
                  <div class="form-group"> 
                  <input placeholder="Enter Your Number Phone" type="text" name="tel" class="form-control" 
                  value="<?php if(isset($tel)) echo $tel; ?>">
                  </div>
                       </div>
               <div class="col-md-6">
                  <div class="form-group">      
                       <textarea placeholder="enter your message" class="message form-control input-lg" name="message">
                        <?php if(isset($message)) echo $message; ?></textarea>
                  </div>
                  <div class="form-group">
                   <input class="btn btn-primary btn-block" type="submit" value="Contact Us"  name="send"> 
             </div>
         </div>
      </form>
       </div>
                     <div class="container">
                 <?php
                      if(isset($formerrors)){
                          foreach ($formerrors as $key) {
                             echo "<div class='alert alert-danger text-center'>". $key . "</div>";
                          }
                      }
                  ?>
              </div>        
    </div> 
</section>
    <!--start navpar-->
    <section  class="fr_footer hidden-xs">
    <nav class="navbar navbar-inverse navbar">
  <div class="container rel">   
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#ournav" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><span class="main_color1">On</span><span class="main_color">Tario</span></a>
    </div>
    <div class="copy_right text-center">
      <p><span> Copy Right OnTario Medical Suppliers &copy; 2017</span> <a href="https://www.facebook.com/profile.php?id=100005527359332">Developing By : Fady M Kamel</a></p>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
  </div><!-- /.container-fluid -->
</nav>
</section>
    <!--end footer-->
    <!--star scroll top-->
      <div id="scroll_top">
          <i class="fa fa-chevron-up fa-3x "> </i>
      </div>
    <!--end scroll top-->
    <script src="../js/jquery-3.1.0.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.nicescroll.min.js"></script>
    <script src="../js/jquery.mixitup.js"></script>
    <script src="../js/myjs.js"></script>
    <script src="myjs.js"></script>    
</body>
</html>
