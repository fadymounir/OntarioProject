<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>camera System</title>
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
			<div class="btn btn-primary all selected filter" data-filter="all">All</div>
		<div class="container">
			<div  class="col-md-3 col-sm-6 col-xs-12 filter" data-filter=".cat1" >
				<div class="btn btn-primary">KarlStorz Camera</div>
			</div>
			<div  class="col-md-3 col-sm-6 col-xs-12 filter" data-filter=".cat2" >
				<div class="btn btn-primary filter">Nephew Camera</div>
			</div>				
			<div  class="col-md-3 col-sm-6 col-xs-12 filter" data-filter=".cat3" >				
				<div class="btn btn-primary ">Olympus Camera</div>
			</div>	
			<div  class="col-md-3 col-sm-6 col-xs-12 filter" data-filter=".cat4" >				
				<div class="btn btn-primary">Stryker Camera</div>	
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
							<img src="camera_sources/KarlStorzCameraSystems/thumb_185_130_image_1_hubFEXV.jpg">
								<p>Karl Storz Telecam DX-II</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat1">
							<img src="camera_sources/KarlStorzCameraSystems/thumb_185_130_telecam_dx_iipbvq.jpg">
								<p>Karl Storz Telecam SL-II</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat1">
							<img src="camera_sources/KarlStorzCameraSystems/thumb_185_130_Telecam_SL-II_FIur0D.jpg">
								<p>Karl Storz Telecam SL-FI</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 mix cat1">
						<div class="pro text-center mix cat1">
							<img src="camera_sources/KarlStorzCameraSystems/thumb_185_130_Telecam_SL-IIXwiS.jpg">
								<p>Karl Storz Tricam SL-II</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12 mix cat1">
						<div class="pro text-center mix cat1">
							<img src="camera_sources/KarlStorzCameraSystems/thumb_185_130_Tricam_SL-IIfj21.jpg">
								<p>Karl Storz Image 1 Hub HD</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>


				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat2">
							<img src="camera_sources/NephewCameraSystems/
							thumb_185_130_460pp6RH.jpg">
								<p>Smith & Nephew 460p</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>



				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat3">
							<img src="camera_sources/OlympusCameraSystems/
							thumb_185_130_OTV_S7_prou9K6.jpg">
								<p>Olympus OTV-S7 Pro</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat3">
							<img src="camera_sources/OlympusCameraSystems/
							thumb_185_130_OTV-S4kUBh.jpg">
								<p>Olympus OTV-S7</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat3">
							<img src="camera_sources/OlympusCameraSystems/
							thumb_185_130_OTV-S5HjES.jpg">
								<p>Olympus OTV-S6</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat3">
							<img src="camera_sources/OlympusCameraSystems/
							thumb_185_130_OTV-S7Cs0Z.jpg">
								<p>Olympus OTV-S5</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>


				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat3">
							<img src="camera_sources/OlympusCameraSystems/
							thumb_185_130_OTV-S68cwc.jpg">
								<p>Olympus OTV-S4</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>


				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat4">
							<img src="camera_sources/StrykerCameraSystems/
							thumb_185_130_1288Xg70.jpg">
								<p>Stryker 1488</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>

				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat4">
							<img src="camera_sources/StrykerCameraSystems/
							thumb_185_130_11885zdA.jpg">
								<p>Stryker 1288</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat4">
							<img src="camera_sources/StrykerCameraSystems/
							thumb_185_130_1488108b.jpg">
								<p>Stryker 1188</p>
								<a href="#" data-value="con" class="btn btn-default">Contact Us</a>
						</div>	
				</div>
				<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="pro text-center mix cat4">
							<img src="camera_sources/StrykerCameraSystems/
							thumb_185_130_Styrker_988GRc6.jpg">
								<p>Stryker 988</p>

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
