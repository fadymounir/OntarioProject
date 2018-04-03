<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>OnTario</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--compatability explorere-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--first mobile meta-->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Josefin+Sans|Raleway" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <link href="css/StyleSheet1.css" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <!--bootstap  -->
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
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
        <li class="active"><a href="#" data-value="hom">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#" data-value="cat">Category</a></li>
        <li><a href="#" data-value="about">About Us</a></li>
        <li><a href="#" data-value="loc">Our Location</a></li>
        <li><a href="#" data-value="con">Contact Us</a></li>
        <li><a href="#" data-value="serv">Our Services</a></li>        
        </li>
    </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div id="myslider" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators hidden-xs">
    <li data-target="#myslider" data-slide-to="0" class="active"></li>
    <li data-target="#myslider" data-slide-to="1"></li>
    <li data-target="#myslider" data-slide-to="2"></li> 
    <li data-target="#myslider" data-slide-to="3"></li>       
  </ol>

  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slider/w_170103_04079.jpg">
      <div class="carousel-caption car_lg  hidden-xs" >
            <div>
               <h1>Your Trusted Medical SuppLiers</h1>
                <p>We Provide Complete Operating Room Set Up</p>
            </div>    
      </div>
            <div class="carousel-caption car_xs visible-xs  ">
           <div>

             <h5>Your Trusted Medical SuppLiers</h5>
              <p>We Provide Complete Operating Room Set Up</p> 
           </div>     
      </div>
    </div>
    <div class="item ">
      <img src="images/slider/pic3.jpg">
      <div class="carousel-caption car_lg hidden-xs">
            <div>
                <h1>Endscopy</h1>
                <p>We Provide Endscopy Equipment To Suit Your Every Need</p>
            </div>            
      </div>
      <div class="carousel-caption car_xs visible-xs">

           <div>
              <h5><span>Endscopy</span></h5>
                <p>We Provide Endscopy Equipment To Suit Your Every Need</p>              
           </div>              
      </div>
    </div>
    <div class="item">
      <img src="images/slider/pic2.jpg">
      <div class="carousel-caption car_lg hidden-xs ">
            <div>
               <h1>Endscopy Accessories</h1>
                <p>We Provide A Wide Of Endscopy Accessories</p>
            </div>                
      </div>

            <div class="carousel-caption  car_xs visible-xs ">
            <div>
               <h5>Endscopy Accessories</h5>
                <p>We Provide A Wide Of Endscopy Accessories</p>
            </div>                
      </div>
    </div>
        <div class="item">
      <img src="images/slider/Operation-Theater-6-3.jpg">
      <div class="carousel-caption car_lg hidden-xs">
            <div>
               <h1>Operation Room Equipment</h1>
                <p> We Provide all Equipemnt Required To Set Up Your Operating Room</p>
             </div>                    
      </div>
            <div class="carousel-caption car_xs visible-xs">
            <div>
               <h5>Operation Room Equipment</h5>
                <p> We Provide all Equipemnt Required To Set Up Your Operating Room</p>
             </div>
                             
      </div>
    </div>
</div>
  <a class="left carousel-control" href="#myslider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myslider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
   <!-- end slider-->
   <!-- start about us -->
   <section id="about" class="about_us">
        <h1 class="text-center"><span class="main_color1"> About</span> <span class="main_color">Us</span></h1>
                <p class="hidden-xs text-center text_color">
                <span class="main_color">OnTario</span> Medical Suppliers,Established in 2017 with headquarters in the city of ontario Canada Inc. specializes in the Endscopy devices, ten years experience in the field of medical devices, the possibility of repair and treatment of all medical devices, providing potential crisis for the operating rooms, the company that Your Trusted Medical SuppLiers                 
                </p>

                <p class="visible-xs text-center text_color">
                <span class="main_color">OnTario</span> Medical Suppliers, Established in 2017 with headquarters in the city of ontario Canada Inc. specializes in the Endscopy devices                  
                </p>                
   </section>
    <!-- end about us -->
        <!--start our services-->
    <section id="serv" class="services">
        <div class="overlay">
      <div class="container">
         <div class="row text-center">
                  <h1 class="text-center" style="margin-top: 10px;">
                      <span class="main_color1">Our</span>
                      <span class="main_color">Services</span>
                  </h1>
                <p class="text-center" style="margin-bottom: 20px;">We Have Ten Years Of experience in <span class="main_color">Endscopy</span>Devices</p>

                <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="serv_info">
                           
                      <h2><strong> Repair Mangement </strong></h2>
                      <p class="hidden-xs">With expertise in mechanical, electrical, materials, optical, and applied engineering, Ontario research team designs each repair protocol to ensure that when your's is returned to you.</p>

                       <p class="visible-xs">With expertise in mechanical and applied engineering, Ontario research team designs each repair protocol devices.</p>
                              <p class="hidden-xs">Contact with the Company To Repair your Device</p> 
                                <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
                            </div> 
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="serv_info">

                                    <div class="par">
                                    <h2> <strong>Flexible Endscopy Repair  </strong></h2>
                         <p class="hidden-xs">When a flexible endoscope does require restoration, Ontario provides restoration by highly trained Ontario technicians to return endoscopes to their relevant engineering industry standards.
                      </p>

                       <p class="visible-xs">When a flexible endoscope does require restoration, Ontario provides restoration by highly trained Ontario technicians.
                      </p>
                          <p class="hidden-xs">Contact with the Company To Repair your Device</p>
                              <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
                         </div>
                      </div>                  

                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                      <div class="serv_info">
                      
                       <h2><strong> Instrument Repair </strong> </h2>
                       <p class="hidden-xs">OnTario offers complete surgical instrument repair of general stainless, specialty stainless, and minimally invasive or laparoscopic instruments utilized in the operating room,with the less price and best quality </p>
                       <p class="visible-xs">OnTario offers complete surgical instrument repair of general stainless, specialty stainless, and minimally  repair service</p> 
                       <p class="hidden-xs">Contact with the Company To Repair your Device</p> 
                          <a href="#" data-value="con" class="btn btn-default">Contact Us</a>
                      </div>
                  
                </div>               
            </div>
       </div>
    </div> 
  </section>   
    <!--end our services-->
    <!-- start our location -->
   <section id="loc" class="our_location">
           <h1 class="text-center">
           <span class="main_color1">Our </span>
          <span class="main_color"> Location</span></h1>
      <div class="container-fluid">
          <div class="col-md-8 col-sm-12 col-xs-12">
          <div class="map">
               <iframe class="map_location" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2879.253666979183!2d-79.53235181517198!3d43.809097479116254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b2f0b988bb8fd%3A0xe699754626a59925!2zMTYwIEFwcGxld29vZCBDcmVzY2VudCwgQ29uY29yZCwgT04gTDRLIDRFNdiMINmD2YbYr9in!5e0!3m2!1sar!2seg!4v1488830297974"  allowfullscreen></iframe>
          </div>
          </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="map_info">
                            <div class="icon">
                            <i class="fa fa-map-marker fa-5x"></i>
                                </div>
                           <p>160 APPLEWOOD CRESCENT CONCORD ON</p> 
                          <p><i class="fa fa-mobile fa-4x"></i>  647-217-5580</p>
                          <p><i class="fa fa-envelope-o fa-3x"></i>  Jo.ontarioinc@gmail.com</p>

                          <div>
                          <span ><a style="color: #fff"  href="https://www.facebook.com/OnTario-Medical-suppliers-1905075006380949/"><i class="fa fa-facebook-square fa-3x"></i></a></span>
                          <span><a style="color: #fff" href="https://twitter.com/ontario_m"></s> <i class="fa fa-twitter-square fa-3x"></i></a></span>                          
                          <span><a style="color: #fff" href="https://plus.google.com/u/0/106671112115345680611"><i class="fa fa-google-plus-square fa-3x"></i></a></span>
                          <span><a style="color: #fff" href="https://www.youtube.com/channel/UCxa1UfunDdJTMqRRJ1WgIxw"><i class="fa fa-youtube-square fa-3x"></i></a></span>
                          </div>
            </div>
      </div>     
   </section>
    <!-- end our location -->

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



    <!--end Contact Us-->


   


    <!--start our categories-->

    <section id="cat" class="our_cat text-center">

        <h1><span class="main_color1">Cat</span><span class="main_color">egories</span></h1>
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
              
              <div class="cat">

                  <img src="images/our_cat/clv_160.png">
                    <div class="cat_des">
                        <h2>Camera Sources</h2>

                        <div class="btn btn-danger btn-block"><a style="color:#fff " href="cat/camera.php">View More</a></div>
                    </div>

              </div>
            </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="cat">
                    <img src="images/our_cat/iStock_000007323033XSmall-600x600.jpg">
                        <div class="cat_des">
                        <h2>Light sources</h2>

                        <div class="btn btn-danger btn-block"><a style="color:#fff " href="cat/light.php">View More</a></div>
                    </div>
              </div>
            </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="cat">
                  <img src="images/our_cat/sku_156712_2.jpg">
                        <div class="cat_des">
                        <h2>Video Endoscopy</h2>
                        <div class="btn btn-danger btn-block"><a style="color:#fff " href="cat/endoscopy_devices.php">View More</a></div>
                    </div>
              </div>
            </div>

          <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="cat">
                  <img src="images/our_cat/thumb_diandongshuangbiqiangjingta.jpg">
                         <div class="cat_des">
                        <h2>Gas Endoscopy</h2>

                        <div class="btn btn-danger btn-block"><a style="color:#fff " href="cat/endoscopy_gas.php">View More</a></div>
                    </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!--end our categories-->






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



    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nicescroll.min.js"></script>
    <script src="js/myjs.js"></script>
    
</body>
</html>
