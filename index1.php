<?php 
session_start();

?>


<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SILIGURI CIRCLE</title>
        <link rel="shortcut icon" href="images/favicon.png">
        <!-- GOOGLE FONTS : begin -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		<!-- GOOGLE FONTS : end -->
        <!-- STYLESHEETS : begin -->
		<link rel="stylesheet" type="text/css" href="library/css/style.css">
		<!-- To change to a different pre-defined color scheme, change "red.css" in the following element to blue.css | bluegray.css | green.css | orange.css
		Please refer to the documentation to learn how to create your own color schemes -->
        <link rel="stylesheet" type="text/css" href="library/css/skin/blue.css">
		<link rel="stylesheet" type="text/css" href="library/css/custom.css">
        <!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="library/css/oldie.css">
		<![endif]-->
		<!-- STYLESHEETS : end -->
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!--CUSTOM LINKS-----------------starts------------>
        <!--NEWS SLIDER---CSS-SCSS--->
        <!--------NEWS SLIDER -------END----->
        
	</head>
    
	<body>

		<!-- HEADER : begin -->
		<!-- If you want to use Standard Header Menu, add "m-has-standard-menu" class to the following element (see home-2.html template for example)
		Remove "m-has-gmap" class if you are not using Google Map in this template -->
		<header id="header" class="m-has-header-tools m-has-gmap">
			<div class="header-inner">

				<!-- HEADER CONTENT : begin -->
				<div class="header-content">
					<div class="c-container">
						<div class="header-content-inner">

							<!-- HEADER BRANDING : begin -->
							<!-- Logo dimensions can be changed in library/css/custom.css
							You can remove "m-large-logo" class from following element to use standard (smaller) version of logo -->
							<div class="header-branding m-large-logo">
								<a href="index.html"><span>
									<img class="hidden-lg hidden-md" style="height: 200px  ; width:200px ;" src="images/header-logo.png"
										data-hires="images/header-logo.png" 
										alt="SILIGURI CIRCLE">
								</span></a>
                                
                                <a href="index.html"><span>
									<img class="hidden-xs hidden-sm" style="height: 300px  ; width:300px ;" src="images/header-logo.png"
										data-hires="images/header-logo.png" 
										alt="SILIGURI CIRCLE">
								</span></a>
                                
							</div>
							<!-- HEADER BRANDING : end -->

							<!-- HEADER TOGGLE HOLDER : begin -->
							<div class="header-toggle-holder">

								<!-- HEADER TOGGLE : begin -->
								<button type="button" class="header-toggle">
									<i class="ico-open tp tp-menu"></i>
									<i class="ico-close tp tp-cross"></i>
									<span>Menu</span>
								</button>
								<!-- HEADER TOGGLE : end -->

								<!-- HEADER GMAP SWITCHER : begin -->
								<button type="button" class="header-gmap-switcher" title="Show on Map">
									<i class="ico-open tp tp-map2"></i>
									<i class="ico-close tp tp-cross"></i>
								</button>
								<!-- HEADER GMAP SWITCHER : end -->

							</div>
							<!-- HEADER TOGGLE HOLDER : end -->

							<!-- HEADER MENU : begin -->
							<!-- This menu is used as both mobile menu (displayed on devices with screen width < 991px)
							and standard header menu (only if Header element has "m-has-standard-menu" class) -->
							<nav class="header-menu">
								<ul>
									<li><a href="index.html">Home</a>
									
									</li>
                                    	<li><a href="#">Shop</a>
									</li>
                                    <li><a href="#">Education</a>
									</li>
                                    <li><a href="#">Jobs</a>
									</li>
                                    <li><a href="#">Gallery</a>
									</li>
									<li><a href="phone-numbers.html">Phone Numbers</a>
										<!--<ul>-->
											<!--<li><a href="town-hall.html">Town Hall</a></li>-->
											<!--<li><a href="town-council.html">Town Council</a></li>-->
											<!--<li><a href="phone-numbers.html">Phone Numbers</a></li>-->
											<!--<li><a href="document-list.html">Documents</a></li>-->
											<!--<li><a href="contact.html">Write To Mayor</a></li>-->
										<!--</ul>-->
									</li>
									<li><a href="#">Community</a>
										<ul>
											<!--<li><a href="post-list.html">News</a></li>-->
											<li><a href="#">Notices</a></li>
											<li><a href="#">Events</a></li>
											<li><a href="#">Documents</a></li>
                                            <li><a href="#">Statistics</a></li>
                                            <li><a href="#">About Siliguri</a></li>
											<li><a href="#">Virtual Tour</a></li>
											
										</ul>
                                        <li><a href="http://siliguricircle.com/chat">CHAT</a></li>
										<li><a href="profile.php">My Profile</a></li>
                                    <li><a href="profile.php">Login/Signup</a></li>
									</li>
                                    
										
									</li>
									<!--<li><a href="statistics.html">Pages</a>
										<ul>
											<li><a href="statistics.html">Statistics</a></li>
											<li><a href="virtual-tour.html">Virtual Tour</a></li>
											<li><a href="town-history.html">Town History</a></li>
											<li><a href="elements.html">Elements</a></li>
										</ul>
									</li>-->
								</ul>
							</nav>
							<!-- HEADER MENU : end -->

							<!-- HEADER TOOLS : begin -->
							<div class="header-tools">

								<!-- HEADER SEARCH : begin -->
								<div class="header-search">
									<form method="get" action="search-results.html" class="c-search-form">
										<div class="form-fields">
											<input type="text" value="" placeholder="Search this site..." name="s">
											<button type="submit" class="submit-btn"><i class="tp tp-magnifier"></i></button>
										</div>
									</form>
								</div>
								<!-- HEADER SEARCH : end -->

								<!-- HEADER GMAP SWITCHER : begin -->
								<!-- Remove following block if you are not using Google Map in this template -->
							
                         
                                <?php if(isset($_SESSION["username"])){?>
                                <a  href="profile.php">
                                    <button type="button" class="headerButton  hidden-xs hidden-sm">
									<span  style="color:#2196f3;">My Profile </span>
                                    </button></a>
                                <?php }else{ ?>
                               <a  href="Connect/Signup.html"> 
                                   <button type="button" class="headerButton  hidden-xs hidden-sm">
									<span style="color:#2196f3;">Login/Signup</span>
                                   </button></a>
                            
                                       <?php } ?>
                              	<a href="http://siliguricircle.com/chat" style="text-decoration: none;">
                                    <button type="button" class="headerButton  hidden-xs hidden-sm">
                                        <span style="color:#2196f3;">CHAT</span>
                                    </button></a>
                                
                                 
                                
                                	<button type="button" class="header-gmap-switcher" title="Show on Map">
									<i class="ico-open tp tp-map2"></i>
									<i class="ico-close tp tp-cross"></i>
									<span style="color:#2196f3;">Map</span>
								</button>
                                
                                
								<!-- HEADER GMAP SWITCHER : end -->

							</div>
							<!-- HEADER TOOLS : end -->

						</div>
					</div>
				</div>
				<!-- HEADER CONTENT : end -->
    
				<!-- HEADER GMAP : begin -->
				<!-- Add your address into "data-address" attribute
				Change zoom level with "data-zoom" attribute, bigger number = bigger zoom
				Change map type with "data-maptype" attribute, values: roadmap | terrain | hybrid | satellite
				API KEY IS REQUIRED! More info https://developers.google.com/maps/documentation/javascript/get-api-key -->
				<div class="header-gmap">
					<div class="gmap-canvas"
						data-google-api-key="AIzaSyBoS60s6U74pRIJehW5f23uJU31a8cCTR0&callback=myMap"
						data-address="26.7074, 88.430"
						data-zoom="16"
						data-maptype="ROADMAP"
						data-enable-mousewheel="true">
					</div>
				</div>
				<!-- HEADER GMAP : end --> 

			</div>
		</header>
		<!-- HEADER : end -->

		<!-- HEADER BG : begin -->
		<div class="header-bg">

			<!-- HEADER IMAGE : begin -->
			<!-- To add more images just copy and edit elements with "image-layer" class (see home-2.html template for example)
			Change autoplay speed with "data-autoplay" attribute (in seconds), works only if there are more than one image -->
			<div class="header-image" data-autoplay="8">
				<div class="image-layer" style="background-image: url( 'images/header-01.jpg' );"></div>
				<!-- div class="image-layer" style="background-image: url( 'images/header-02.jpg' );"></div -->
			</div>
			<!-- HEADER IMAGE : begin -->

		</div>
		<!-- HEADER BG : end -->

		<!-- CORE : begin -->
		<div id="core">
			<div class="c-container">
				<div class="row">

                    
<!-----------------------------------------------------------------MIDDLE COLOUMN------------------------------------------------------------------------------------------>
					<!-- MIDDLE COLUMN : begin -->
					<div class="middle-column col-md-6 col-md-push-3">

						<!-- PAGE HEADER : begin -->
						<div id="page-header">

							<!-- PAGE TITLE : begin -->
							<div class="page-title">
								<h1>Welcome to Siliguri,<br><em>the Most Exciting Town of Bengal!</em></h1>
							</div>
							<!-- PAGE TITLE : end -->

						</div>
						<!-- PAGE HEADER : end -->

						<!-- PAGE CONTENT : begin -->
						<div id="page-content">
							<div class="page-content-inner">

								<!-- DIRECTORY : begin -->
								<!-- You can choose to have 2, 3 or 4 columns in Directory element.
								To change the number of columns, change the class in the following element from m-3-columns to m-2-columns or m-4-columns -->
								<div class="c-directory m-has-icon m-3-columns">
									<div class="c-content-box">
										<div class="directory-inner">
											<!--<i class="ico-shadow tp tp-road-sign"></i>-->
                                            <img src="img/chooseinterest.jpg" style="float: left;"> &nbsp; <h2 class="directory-title">Choose <strong>Your Interest</strong></h2></br>
											<div class="directory-content">
												<nav class="directory-menu">
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                                                                        
                                     <div class="row mb-3 col-sm-offset-1 col-md-offset-1 col-xs-offset-1 col-lg-offset-1"> 
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/shopping-cart.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Shop</h6></span> </div> 
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/travel.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Travel</h6></span> </div>
                
            <a href="itandweb.html"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/browser.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">I.T & Web</h6></span> </div></a>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/hospital.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Medical</h6></span> </div>
                 
            <a href="Connect/advert.html"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/submitads.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Advert</h6></span> </div></a>
                                
            </div>                 
 <div class="clearfix visible-sm"></div>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    <!-- ACCORDION (TOGGLE) : begin -->
										<div class="c-accordion m-toggle">
											<div class="c-content-box">
												<ul class="accordion-items">

													<li class="m-has-icon">
                                                        <h4 class="accordion-title" style="text-align: center;"><i class="ico tp"></i><span class="btn" style="background-color: #2196f3; color: white; border-radius: 5px; padding: 3px 80px; font-weight: normal">MORE</span></h4>
                                                        <div class="accordion-content"></br>
															
                                                            
                                                            
                                                            
                                                            
                                                            
                                                                                                          
                                                    
                            
                                     <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                    <img class="img-fluid" alt="" src="flaticon/badge.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">What's New</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/blackboard.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Education</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/tourguide.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Outdoors</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/job.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Jobs</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/fireworks.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Events</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/hotel.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Hotel</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>
                                                    
                                                    
      
            
                               
                                     <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/flats.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Real Estate</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/justice.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Law</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/rent.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Rent</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/cutlery.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Eat Outs</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/popcorn.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Show Time</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/discount.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Offers</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>
                                                    
                                                    
                                                            
                                                            
                                                            
                                                            
                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/gift.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Gift Shops</h6></span> </div>
                                       
            <a href="Sweet-Shop/sweetShop%20-%20Copy.html"><div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske">
                     <img class="img-fluid iconHover" alt="Paragon Casino Resort" src="flaticon/cupcake.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Sweet Shops</h6></span> </div></a>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/flower.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Flower Shop</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/landing.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Home Delivery</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/diamond.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Jewelry</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/grooming.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Grooming</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>






                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/carousel.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Fun & Entertainment</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/insurance.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Insurence</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/startup.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">StartUp</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/loan.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Loans & Finance</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/graduate.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Colleges</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/desktop.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Computers</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>






                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/racing.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Cars</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/motorcycle.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Bikes</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/dresser.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Home Decor</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/smartphone.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Phones</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/drum.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Musicals</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/football.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Sporties</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>






                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/seniorcityzens.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Senior Cityzens</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/services.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Services</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/gym.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Gym & Yoga</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/antiques.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Antiques</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/handmade.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Hand Mades</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/wheat.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Farms & gardens</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>







                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/bank.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Banks</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/packersmovers.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Packers & Movers</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/family.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Pets & Care</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/booktaxi.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Taxi</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/air.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Air</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/rail.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Rail</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>






                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/buss.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Bus</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/teddy-bear.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Kids & Toys</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/eventmanagement.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Event Organizers</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/matrimony.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Matrimony</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/astrology.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Astrology</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/religious.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Religious</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>






                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/notebook.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Books</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/pencil-case.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Stationery</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/teamwork.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Clubs & NGOs</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/repair.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Repair</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/car-repair.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Motor garage</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/gas-station.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Fuel Station</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>







                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/wifi.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Wi-Fi & HotSpots</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/mall.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Shoping Mall</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/wholesale.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">WholeSale</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/archive.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Other</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/lostandfound.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Lost & Found</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/network.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Community & Forum</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>





                                                                      <div class="row mb-3">
           <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
              
               <img class="img-fluid" alt="" src="flaticon/wifi.png" </br><span style="text-align:center;"><h6 style="word-wrap: normal">Wi-Fi & HotSpots</h6></span> </div>
                                       
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                     <img class="img-fluid" alt="Paragon Casino Resort" src="flaticon/mall.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Shoping Mall</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Tuscon Center" src="flaticon/wholesale.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">WholeSale</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                <img class="img-fluid" alt="Choctaw Casino" src="flaticon/archive.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Other</h6></span> </div>
                
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                  <img class="img-fluid" alt="Trump 29 Casino" src="flaticon/lostandfound.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Lost & Found</h6></span> </div>
                 
            <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 filter bunarske iconHover">
                 <img class="img-fluid" alt="Kimberly Clark" src="flaticon/network.png"> </br><span style="text-align:center;"><h6 style="word-wrap: normal">Community & Forum</h6></span> </div>
            </div>                 
 <div class="clearfix visible-sm"></div>




                                                            
														</div>
													</li>
										
												</ul>
											</div>
										</div>
										<!-- ACCORDION (TOGGLE) : end -->
                                                    

                                                    
                                                    
      
          
                                                    
                                                    
                                                    
                                                    
													<!--<ul>
														<li><a href="town-hall.html">Government</a>
															<ul>
																<li><a href="town-hall.html">Town Hall</a></li>
																<li><a href="town-council.html">Town Council</a></li>
																<li><a href="home-2.html">Alternative Home</a></li>
															</ul>
														</li>
														<li><a href="post-list.html">Community</a>
															<ul>
																<li><a href="post-list.html">TownPress News</a></li>
																<li><a href="post-list.html">Public Notices</a></li>
																<li><a href="document-list.html">Town Documents</a></li>
															</ul>
														</li>
														<li><a href="statistics.html">About Our Town</a>
															<ul>
																<li><a href="statistics.html">Statistics</a></li>
																<li><a href="town-history.html">Town History</a></li>
																<li><a href="virtual-tour.html">Virtual Tour</a></li>
															</ul>
														</li>
														<li><a href="event-list.html">Relax</a>
															<ul>
																<li><a href="event-list.html">Upcoming Events</a></li>
																<li><a href="gallery-list-html">Photo Galleries</a></li>
																<li><a href="#">Facebook Page</a></li>
															</ul>
														</li>
														<li><a href="contact.html">Get In Touch</a>
															<ul>
																<li><a href="contact.html">Write To Mayor</a></li>
																<li><a href="phone-numbers.php">Phone Numbers</a></li>
																<li><a href="#">Twitter Profile</a></li>
															</ul>
														</li>
														<li><a href="http://themeforest.net/user/LSVRthemes/portfolio">TownPress Template</a>
															<ul>
																<li><a href="http://themeforest.net/user/LSVRthemes/portfolio">Purchase TownPress</a></li>
																<li><a href="http://themeforest.net/user/LSVRthemes/portfolio">WordPress Version</a></li>
																<li><a href="http://demos.lsvr.sk/townpress.html/documentation/">Documentation</a></li>
															</ul>
														</li>
													</ul> -->
												</nav>
											</div>
										</div>
									</div>
								</div>
								<!-- DIRECTORY : end -->



               
                                    
                                    



<!---------MID POD--------STARTS---------------------------------------------------------------------------------------------->

                            <!--------------NEWS-------------------------- MID POD---------------------1---------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>UPDATES</strong></a></h2>
								<div class="post-list-content">
                     
                                    
                                    
                                    
                                    
                                    
                                    
  
                                    
                                    
                                    <!--------------NEWS SLIDER MID POD-------------------------STARTS----------------------->
                                    
                                    
								<!-- FEATURED POST : begin -->
				                <article class="featured-post m-has-thumb">
								<div class="post-image">
								<!-- SLIDER : begin --><h6 class="hidden-md hidden-lg hidden-xl" style="text-align: center;">  <sub>←  &nbsp; &nbsp;  slide &nbsp; &nbsp;    →</sub></h6>
								<!-- If you want to have single BG image for all slides,
								just add style="background-image: url( 'url-to-your-image.jpg' );" to the following element
								(and remove "style" attributes from all "slide" elements) -->
								<div class="c-slider" data-autoplay="5" style="height: 330px; overflow: hidden;">
									<div class="slide-list">

										<!-- SLIDE : begin -->
										<div class="slide" style="background-image: url( 'img/newsPicDemo510201.jpg' );" style="height: 333px; overflow: hidden;">
											<div class="slide-inner">
												<!-- You can change vertical align of the content with the following classes valign-top | valign-middle | valign-bottom -->
												<div class="slide-content valign-bottom">

													<div class="row">
														<div class="col-md-6 col-md-push-6">
															<h2><a href="post-detail.html" style="color: white; background-color: red; padding: 5px;">UPDATES</a></h2>
															<h3 style="color: black; background-color: red;"></br> </br> </br> </h3>
														</div>
													</div>

												</div>
											</div>

										</div>
										<!-- SLIDE : end -->

										<!-- SLIDE : begin -->
										<div class="slide" style="background-image: url( 'img/newsPicDemo5120201.jpg' );">
											<div class="slide-inner">
												<div class="slide-content valign-bottom">

													<div class="row">
														<div class="col-md-6">
															<h2><a href="post-detail.html" style="color: #fff; background-color: red; padding: 5px;">SILIGURI UPDATES</a></h2>
															<h3 style="color: black; background-color: red;"></br> </br> </br> </h3>
														</div>
													</div>

												</div>
											</div>

										</div>
										<!-- SLIDE : end -->

										<!-- SLIDE : begin -->
										<div class="slide image-responsive" style="background-image: url( 'img/newsPicDEmo630251.jpg' );">
											<div class="slide-inner">
												<div class="slide-content valign-bottom">

													<div class="row">
														<div class="col-md-6 col-md-push-6">
															<h2><a href="post-detail.html"  style="color: #fff; background-color: red; padding: 5px;">NEW UPDATES</a></h2>
                                                            <h3  style="color: black; background-color: red;"></br> </br> </br></h3>
														</div>
													</div>

												</div>
											</div>

										</div>
										<!-- SLIDE : end -->

									</div>
								</div>
								<!-- SLIDER : end -->
                                    
                                     <!--------------NEWS SLIDER MID POD-------------------------STARTS----------------------->
                                    
                                    
                                    
                                    
                                    
                                    
                                    
								</div>
				                <div class="post-core">
				             <!--   <h3 class="post-title"> -->
							<!--<a href="post-detail.html">Report from Friendly Soccer Match between East Bengal & Mohan Baagan Soccer Clubs</a> 
								</h3>
								<div class="post-date"><i class="ico tp tp-clock2"></i>January 23, 2018</div>
								<div class="post-excerpt">
        
								<p>Football refers to a number of sports that involve, to varying degrees, kicking a ball with the foot to score a goal. Unqualified, the word football is understood to refer to whichever form of football is the most popular in the regional context in which the word appears.
                                    
                                </p>
								</div>-->
                                    
                                    
                                    
                                    
                                    
                                    
                                  
                                    
                                    
                                    
                                    
                                    
								</div>
								</article>
							<!-- FEATURED POST : end -->
                                    
                                    
                                    
                                    
                                    
                                    
                                    <!-- POST : begin -----MORE IN NEWS-->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in News ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->New Housing Complex in Siliguri Nearly Complete</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">Jan 18 2020</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->This Year’s Summer Rock Festival Draws More Than 1000 Fans</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">Feb 06 2020</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->10 Things You Didn’t Know About our Town</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">Mar 13 2020</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post" >
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->New Shoping Mall Opened in Town, Welcomes Everyone. Visit Today!</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">Mar 21 2020</div>
								</article>
				            <!-- POST : end -->

								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>

				                </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                        <!--------------NEWS-------------------------- MID POD--END---------------------1-------------------------->

                                  























                        <!--------------NEWS-------------------------- MID POD---START--------------------------2------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Education</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="images/educationMidPodPic.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="images/jobMidPodPic1.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">ABCs Co-Education School Opens In Siliguri. Enqury Now!ABCs Co-Education School Opens In Siliguri. Enqury Now!ABCs Co-Education School Opens In Siliguri. Enqury Now!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/educationPicDemo15020.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Skill Development Course Available 48 seats Apply Now! Gre...</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/educationPicDemo502505.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Apply For the Briliance Science College In Siliguri, For m.ore of inf...</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/educationPicDemo0505581.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Arkimic Convent School Siliguri, Apply for year 2020 Ongoing</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/educationPicDemo050515020.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">I.T Crash Course Regular Basis for B.C.A Students, Apply Now </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/educationPicDemo8765432456d.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Knowlerix Public High School Siliguri, From Class KG I - XII fo...</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN EDUCATION-->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Education ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->New Siliguri public School - Co-Ed Addmition Open, Apply For Your Kids Now!</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Siliguri Science Festivel 2020 Audition Begins! Find Out More</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Sir Jhon's Coaching Center From Standard V - IX, Subjects English & Arts </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Kinder Garden for Little Kids -  Admission Open </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------NEWS-------------------------- MID POD--END--------------------------2--------------------->






















                        <!--------------JOBS-------------------------- MID POD---START--------------------------3------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Jobs</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="images/jobs.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/jobPicDemo7487.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">New Call Center Jobs Opening For Male & Females, Apply Now!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/jobPicDemo12058.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Job Arch Consultency Offering Graduate Jobs, Interview Ongoing</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/jobPicDemo150620.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Jobs for Teachers available in the area of Mathametics & Science</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/jobPicDemo222.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Home Tutor available for class II - VII English Medium All Subjects</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/jobPicDemo510105.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Goverment Jobs Oppurtunities in Siliguri. Apply Today!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/jobPicDemo515250.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Data Entry Jobs available In Siliguri. Enqury Now!</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Jobs ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Call Center Jobs Hiring For Freshers & Experienced, Both Male & Female may Apply!</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Web Developer PHP Jobs Openeing. Walk-In Interview Ongoing till March 15<sup>th</sup> 2020</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Nursing Jobs Opening For Females Apply Only.</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Offered Data Entry Jobs Online/Ofline. No Experience Needed, Free Traning! </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------3--------------------->











                            <!--------------JOBS-------------------------- MID POD---START--------------------------3------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Health & Care</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/HealthandCareMidPod.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/healthPicDemo4415320.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Stay Active & Fit For Ages, Lose or gain Weight or re-shape your Health</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/healthPicDemo6512002168633.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Dentist & Oral Care. Prevent Dozens of diseases with Oral Care Treatments </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/healthPicDemo65120215.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Polio Center List In Siliguri. Visit with your new born upto age of 6</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/healthPicDemo845120251.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Family total health & care treatment available for all members</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/healthPicDemo2102505.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Health is Wealth. Make a Healthy & Good Living starts today!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/healthPicDemo25451021.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Diabetes Myths & Facts. Free Check Up Available till May 2020</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Health & Care ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Doctors for Home Check ups and Visits are available </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Spacially Abled Full yearly check ups for all ages</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Nurse & Medical Aya for home patients available </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Free First Aid and simple medical training ongoing</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------3--------------------->














                            <!--------------JOBS-------------------------- MID POD---START--------------------------4------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Fun</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/funandentertainmentMidPod.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/demo-fun-pic-0111210.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Fly the sky! Paragliding Season open for a mesmerizing view! </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/fun-demopic000-bs.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Visit the biggest Game Station in Siliguri with over 47 different consoles!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/fun-demopic0003-bs.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Wanna Race? Checkout the all new Go-Kart Racing Track. Visit Today!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/funPicMidPod0101010110101010.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Water Park Siliguri, this summer visit with your friends & Family!  </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/fun-demopic002-bs.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Rafting & Treaking Season is here! Group tour available now! </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/funPicMidPod604110512.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Toy Train Rides, book your tickets today wit Family & Friends!</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Fun ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Not scared of ghost? Really!? Find it out at the Scary House, Haunted Special! </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Skate away! Ice Skating Ring in Siliguri, The Ice Ride</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Feeling Boread? Checkout the new Shopping Mall in Siliguri! </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Kingdom 6 the Amusement Park in Siliguri, Open now! </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------4--------------------->













                            <!--------------JOBS-------------------------- MID POD---START--------------------------5------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Food</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/FoodMidPodPic101101.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/foodMidPod10101101.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Juice Station introduces new Herbal Juice - health fit</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/foodMidPodPic101010100110.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Food Clubr - A club for all the foodies in town!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/foodMidPodPic1011110101.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Rtro Resto Resturent & Bar, Opening shortly near you!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/FoodMidPodPic100011010.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Momo in all new Desi Style, Visit Momo Planet, Limited Time Offer! </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/foodMidPodPic011010010.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Buffet Lunch, New menu added, The Cooks Special! </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/FoodMidPodPic1000110101011.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Dinner Delight visit this evening with Family & Friends</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Foods ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Love Organic Foods? Visit Foodsters for Pure Veg Organic Foods </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Diet Plus - Tasty Weight Loss Dishes for Fitness Diet and Health Regulations </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Visit the new Continental Cafe for yummy Continental Foods! </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Live Kitchen at Siliguri Kitchen Cooks Welcomes All!</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------5--------------------->
















                            <!--------------JOBS-------------------------- MID POD---START--------------------------6------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Travel</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/traveltoppic.png" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/travelMidPodAds0002.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Juice Station introduces new Herbal Juice - health fit</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/travelMidPodAds00004.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Food Clubr - A club for all the foodies in town!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/travelMidPodAds00003.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Rtro Resto Resturent & Bar, Opening shortly near you!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/travelMidPodAds00001.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Momo in all new Desi Style, Visit Momo Planet, Limited Time Offer! </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/travelMidPodAds00005.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Buffet Lunch, New menu added, The Cooks Special! </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/travelMidPodAds00006.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Dinner Delight visit this evening with Family & Friends</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Foods ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Love Organic Foods? Visit Foodsters for Pure Veg Organic Foods </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Diet Plus - Tasty Weight Loss Dishes for Fitness Diet and Health Regulations </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Visit the new Continental Cafe for yummy Continental Foods! </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Live Kitchen at Siliguri Kitchen Cooks Welcomes All!</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------6--------------------->













                            <!--------------JOBS-------------------------- MID POD---START--------------------------7------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Fashion</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/fashionMidPodPic.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/FashionMidPodPIc101010010111.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Fashion Lux the Indian Style Bridal Collections</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/FashionMidPodPic0110101010001.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Kids Fashion Trends 2020 Age upto 17 years</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/FashionMidPodPic1010101100110.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Semi Winter Ware Collection 2020 Super Sale</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/FashionMidPodPic101101.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Lehengas All India Exclusive Womens Collecctions  </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/FashionMidPodPic10001011111.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Siliguri Mega Mart Presents Fashion for Everyone!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/FashionMidPodPic101111101.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">The Young Indo Cream Collections! Visit Today</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Fashion ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Trends 2020 Fashion for Kids upto 12 Years Old, Visit Today! </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Fashion Mart Brings You New Year Trends for Men & Women  </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Anjali's Royal 2020 Wedding Collection for Brides & Grooms!  </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->StyleIn Presents 2020 Super Summer Collections for All</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------7--------------------->











                            <!--------------JOBS-------------------------- MID POD---START--------------------------8------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Beauty</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/beautyMidPodPic.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/BeautyMidPodPic111010010.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Nature Touch Beauty Parlour 100% Natural & Auyrvedic</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/BeautyMidPodPic111101011001.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">The Grand SPA Siliguri, Visit Today!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/BeautyMidPodPic1011011000.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Sparkle Beauty Products for Women</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/BeautyMidPodPic10111010.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Relax With New Water Stone SPA & Beauty Parlour  </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/BeautyMidPodPic101010101.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Gold Leaf Products for Your Soft & Glowing Skin!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/BeautyMidPodPic10111101.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Acupuncture & Full Body Message with Steem Bath Only for Womens</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Beauty ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Best Beauty Products for Oily, Dry & Normal Skin</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> New SPA & Message Centeer for Ladies in Town  </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> GlowPlus Natural Beauty Products </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Make-Up Kit for All Skin Types, Limited Offer Pack</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------8--------------------->

















                            <!--------------JOBS-------------------------- MID POD---START--------------------------9------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Insurance</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/insuranceMidPodPic.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/insurenceMidPodAds001.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Insure yourself with 101 different type of Insurance</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/insuranceMidPodAds003.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Insure all your Family members Today!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/insurenceMidPodAds0004.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Life Insurance Corporation of India for Everyone!</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/insuranceMidPodAds005.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">See the best way to Insure your House. </p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/insuranceMidPodAds009.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Car Insurance Available for New and Old Cars</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/insuranceMidPodAds0007.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Insure your safety while traveling!</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Insurance ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Derotey Car Insurance & Policy </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> New Insurance for your Family </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> See the all new Heakth Insurance for your New Born!</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Travel Insurance available over 244 Countries for travellers</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------9--------------------->




















                            <!--------------JOBS-------------------------- MID POD---START--------------------------10------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>I.T & Web</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/itwebMidPodPic.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/webMidPodAds0001.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">WebBengal Web Developement Software and Applications</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/webMidPodAds002.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Web Development Classes for Freelancer Developers</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/webMidPodAds0003.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Design your Websiteor App acording to your Business</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/webMidPodAds0004.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Redesign your web starting from 1500/-</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/webMidPodAds0007.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Make your website visible for all Search Engines and Social Search</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/webMidPodAds0008.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Learn To Code!</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in I.T and Web ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Coding for Freelancers Ongoing. Visit Now! </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Best SEO and SMO for Hyper Local Websites</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Get your own Domain Name for best price in town!</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Learn Photoshop and Web Design</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------10--------------------->














                            <!--------------JOBS-------------------------- MID POD---START--------------------------11------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>StartUps</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/startupMidPodPic.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/startupMidPodAds0001.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">NewStartupInSiliguri-One</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/startupMidPodAds0002.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">NewStartupInSiliguri-Two</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/startupMidPodAds0003.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">NewStartupInSiliguri-Three</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/startupMidPodAds004.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">NewStartupInSiliguri-Four</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/startupMidPodAds0005.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">NewStartupInSiliguri-Five</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/startupMidPodAds0008.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">NewStartupInSiliguri-Six</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Startups ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->NewStartupInSiliguri-One </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> NewStartupInSiliguri-Two</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->NewStartupInSiliguri-Three</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->NewStartupInSiliguri-Four</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------11--------------------->


















                            <!--------------JOBS-------------------------- MID POD---START--------------------------12------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Event Organizers</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/eventorganizerpiclp.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/eventorganizer-demopic00000088.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Greetinz Event Organizers for Corporates</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/eventorganizer-demopic00000600.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">SLG Events for Birthday Party and Decors</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/eventlistpic.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Popuz held all king of Events in Town</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/4334sdfaadaesdhrt.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Looking for Event Organizers? Dazel Event Organizers</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/4334sadf43aesdhrt.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Event-Horizon Call us for Mairriang Even Managements</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/4334sdfaadwesdsadf4332hrt.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Bablious We are specialists in Business Event Managements</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Event Organizers ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Need Profesional Photographers? Contact PhotographPus </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Event Decoraters For all kinds of Themes</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->The best cooks in town for your special events</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Birthday Party Fun, Games, Magic Show and more.</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------12--------------------->















                            <!--------------JOBS-------------------------- MID POD---START--------------------------13------------------------->
                            <!-- POST LIST : begin -->
								<div class="c-post-list m-has-icon">
								<div class="c-content-box">
								<div class="post-list-inner">
							<!--<i class="ico-shadow tp tp-reading"></i>
							<h2 class="post-list-title"><i class="ico tp tp-reading"></i><!--<a href="post-list.html"><strong>News</strong></a></h2>-->
                            <!--<i class="ico-shadow tp tp-reading"></i>-->
								<h2><!--</h2> class="post-list-title"><i class="ico tp tp-reading"></i>--><!--<a href="post-list.html">--><strong>Gym and Yoga</strong></a></h2>
								<div class="post-list-content">

								<!-- FEATURED POST : begin -->
				                <div class="featured-post m-has-thumb">
								<div class="post-image">
							<!--<a href="post-detail.html">--><img src="img/gymMidPodPic.jpg" style="width: 100%; height: 100px;"  alt=""></a>
								</div>
				       
								</div>
							<!-- FEATURED POST : end -->

                                    
							  <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/gymMIdPodAds0001.jpg" class="img-responsive" style="width: 100%; height: 100px;"> 
                                  <p style="color:#000; font-weight: bold;">Greetinz Event Organizers for Corporates</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/gymMidPodAds00004.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">SLG Events for Birthday Party and Decors</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/gymyoga-demopic00000004.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Popuz held all king of Events in Town</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/gymyoga-demopic00005500.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Looking for Event Organizers? Dazel Event Organizers</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/gymMidPodAds0007.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Event-Horizon Call us for Mairriang Even Managements</p>
                              </div>

                              <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe" style="height: 150px; overflow: hidden;">
                                  <img src="img/gymMidPodAds0005.jpg" class="img-responsive" style="width: 100%; height: 100px;">  
                                  <p style="color:#000; font-weight: bold;">Bablious We are specialists in Business Event Managements</p>
                              </div>

                              

                              

                                    
                                    
                                    
                                    
                                    
                                    
       

<div>
                            <!-- POST : begin -----MORE IN JOBS---->
								<article class="post">
								<h3 class="post-title">
                             <!--<a href="post-detail.html">--><strong style="color: #2196f3;">More in Gym and Yoga ▾</strong></a>
								</h3>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Need Profesional Photographers? Contact PhotographPus </a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">--> Event Decoraters For all kinds of Themes</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                            <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->The best cooks in town for your special events</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->


                              <!-- POST : begin -->
								<article class="post">
								<h3 class="post-title" style="color: #2196f3;">
							<!--<a href="post-detail.html">-->Birthday Party Fun, Games, Magic Show and more.</a>
								</h3>
								<div class="post-date" style="color: #ccc00; font-weight: bold;">View More</div>
								</article>
				            <!-- POST : end -->
                            
                                    
                                    
								<p class="more-btn-holder"  style="color: #ccc00; font-weight: bold;"><!--<a href="post-list.html">-->Read All Posts</a></p>
</div>
				                 </div> <!----post-list-content----end--->
								</div> <!----post-list-inner----end--->
								</div> <!---- c-content-box----end--->
								</div> <!----  c-post-list m-has-icon----end---> 
                            <!---POST LIST ENDS-->
                            <!--------------Jobs-------------------------- MID POD--END--------------------------13--------------------->


























				</div>
				</div>
            <!-- PAGE CONTENT : end -->
                <hr class="c-separator m-margin-top-small m-margin-bottom-small m-transparent hidden-lg hidden-md">
                </div>
            <!-- MIDDLE COLUMN : end -->

<!----MAIN----MID POD-----------END--------------------------------------------------------------------------------------------------->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
					<!-- LEFT COLUMN : begin -->
					<div class="left-column col-md-3 col-md-pull-6">

						<!-- SIDE MENU : begin -->
						<nav class="side-menu m-left-side m-show-submenu">
							<ul>
								<li><a href="index.html">Home</a>
				            <!--<li><a href="index.html">CHAT</a></li>
										<li><a href="home-2.html">Login or Signup</a></li>	
								 </li>-->
                                <li><a href="#l">Shop</a>
									</li>
                                <li><a href="#">Education</a>
									</li>
                                <li><a href="#">Jobs</a>
									</li>
                                <li><a href="#">Gallery</a>
									</li>
                                <li><a href="phone-numbers.html">Phone Numbers</a>
									</li>
								<li><a href="#">Community</a>
									<ul>
										<li><a href="#">Notices</a></li>
										<li><a href="#">Events</a></li>
                                        <li><a href="#">Documents</a></li>
										<li><a href="#">Statistics</a></li>
                                        <li><a href="#">About Siliguri</a></li>
										<li><a href="#">Virtual Tour</a></li>
										
										<!--<li><a href="contact.html">Write To Mayor</a></li>-->
									</ul>
								</li>
								<!--<li><a href="post-list.html">Community</a>
									<ul>
										<li><a href="post-list.html">News</a></li>
										<li><a href="notice-list.html">Notices</a></li>
										<li><a href="event-list.html">Events</a></li>
										<li><a href="gallery-list.html">Galleries</a></li>
									</ul>
								</li>
								<li><a href="statistics.html">Pages</a>
									<ul>
										<li><a href="statistics.html">Statistics</a></li>
										<li><a href="virtual-tour.html">Virtual Tour</a></li>
										<li><a href="town-history.html">Town History</a></li>
										<li><a href="elements.html">Elements</a></li>
									</ul>
								</li>-->
							</ul>
						</nav>
						<!-- SIDE MENU : end -->
                        
                        
                        
                        
                        
                        
						<!-- LEFT SIDEBAR : begin -->
						<aside class="sidebar">
							<div class="widget-list">

								<!-- DOCUMENTS WIDGET : begin -->
								<div class="widget documents-widget">
								<div class="widget-inner">
								    <h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-papers"></i>Documents</h3>
								<div class="widget-content">
								    <ul class="document-list m-has-icons">

												<!-- DOCUMENT : begin -->
												<li class="document">
													<div class="document-inner">
														<div class="document-icon" title="PDF File"><h5>»</h5><!--<i class="fa fa-file-pdf-o">--></i></div>
														<h4 class="document-title">
															<!--<a href="documents/dummy-document2.pdf" target="_blank">Council Agenda April 24, 2015</a>-->
                                                            <a href="#" target="_blank">Make PAN Card</a>
															<!--<span class="document-filesize">(27 kB)</span>-->
														</h4>
													</div>
												</li>
												<!-- DOCUMENT : end -->

												<!-- DOCUMENT : begin -->
												<li class="document">
													<div class="document-inner">
														<div class="document-icon" title="PDF File"><h5>»</h5><!--<i class="fa fa-file-pdf-o">--></i></div>
														<h4 class="document-title">
															<!--<a href="documents/dummy-document2.pdf" target="_blank">Council Agenda April 24, 2015</a>-->
                                                            <a href="#" target="_blank">Make Income Tax File</a>
															<!--<span class="document-filesize">(27 kB)</span>-->
														</h4>
													</div>
												</li>
												<!-- DOCUMENT : end -->

												<!-- DOCUMENT : begin -->
												<li class="document">
													<div class="document-inner">
														<div class="document-icon" title="PDF File"><h5>»</h5><!--<i class="fa fa-file-pdf-o">--></i></div>
														<h4 class="document-title">
															<!--<a href="documents/dummy-document2.pdf" target="_blank">Council Agenda April 24, 2015</a>-->
                                                            <a href="#" target="_blank">Get a Bank Account</a>
															<!--<span class="document-filesize">(27 kB)</span>-->
														</h4>
													</div>
												</li>
												<!-- DOCUMENT : end -->

												<!-- DOCUMENT : begin -->
												<li class="document">
													<div class="document-inner">
														<div class="document-icon" title="PDF File"><h5>»</h5><!--<i class="fa fa-file-pdf-o">--></i></div>
														<h4 class="document-title">
															<!--<a href="documents/dummy-document2.pdf" target="_blank">Council Agenda April 24, 2015</a>-->
                                                            <a href="#" target="_blank">Skill Development Class</a>
															<!--<span class="document-filesize">(27 kB)</span>-->
														</h4>
													</div>
												</li>
												<!-- DOCUMENT : end -->

											</ul>
											<p class="show-all-btn"><a href="document-list.html"> See All Documents</a></p>
										</div>
									</div>
								</div>
								<!-- DOCUMENTS WIDGET : end -->

								 <!-- LOCALE INFO WIDGET : begin -->
								<!-- to remove background image from this widget, simply remove "m-has-bg" class from the following element -->
								<div class="widget locale-info-widget m-has-bg hidden-md hidden-lg hidden-xl">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-map-marker"></i>Locale Info</h3>
										<div class="widget-content">
											<ul>
												<li>
													<div class="row-title"><h4>Country</h4></div>
													<div class="row-value">India</div>
												</li>
												<li>
													<div class="row-title"><h4>State</h4></div>
													<div class="row-value">West Bengal</div>
												</li>
												<li>
													<div class="row-title"><h4>Distric</h4></div>
													<div class="row-value">Darjeeling (62%)  Jalpaiguri (38%)</div>
												</li>
												<li>
													<div class="row-title"><h4>Area</h4></div>
													<div class="row-value">41.9 km² (16.18 mi²)</div>
												</li>
												<li>
													<div class="row-title"><h4>Population</h4></div>
													<div class="row-value">20,000,00+ </br>(Males: 51%, Females: 49%, Other: 10%)</div>
												</li>
												<li>
													<div class="row-title"><h4>Coordinates</h4></div>
													<div class="row-value">26.707°N, 88.430°E</div>
												</li>
												<li>
													<div class="row-title"><h4>Time zone</h4></div>
													<div class="row-value">IST (UTC +5:30)</div>
												</li>
                                                <li>
													<div class="row-title"><h4>Weather</h4></div>
													<div class="row-value">Cold & Decent All Year</div>
												</li>
												<li>
													<div class="row-title"><h4>ZIP code</h4></div>
													<div class="row-value">734001-004</div>
												</li>
											</ul>
            							</div>
									</div>
								</div>
								<!-- LOCALE INFO WIDGET : end --> 
                                

								<!-- FEATURED GALLERY WIDGET : begin >
								<div class="widget featured-gallery-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-pictures"></i>Featured Gallery</h3>
										<div class="widget-content">
											<div class="gallery-image" title="Streets of TownPress">
												<a href="gallery-detail.html"><img src="images/featured-gallery-01.jpg" alt=""></a>
											</div>
											<p class="show-all-btn"><a href="gallery-list.html">See All Galleries</a></p>
            							</div>
									</div>
								</div>
								<!-- FEATURED GALLERY WIDGET : end -->
<!-----LEFT PODS--------------------------------------------------------------------------------------------------------------------------->


	                                   <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Education</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="images/educationpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Jobs</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/jobpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Health</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/healthpic.jpg"></a>
                                       	</div>

                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Lawyers</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/lawyerspic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Clucs & NGOs</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/openquestionspic0.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Eat Outs</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/eatoutspic.jpg"></a>
                                       	</div>

                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Sweet Shop</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/sweetshoppic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Home Delivery</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/homedeliverypic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Insurence</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/insurencepic.jpg"></a>
                                       	</div>

                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Senior Citizens</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/seniorcitizenact-0100.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Loans & Finance</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/loansandfinancepic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Learn to Code</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/learntocodepic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>StartUp</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/startuppic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Phones & Mobiles</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/mobilepic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Bikes</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/bikespic.jpg"></a>
                                       	</div>

                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Home Decor</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/homedecorpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Fashion</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/fashionpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Repair</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/repairpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Event Organizers</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/eventmanagementpic.jpg"></a>
                                       	</div>

							</div>
						</aside>
						<!-- LEFT SIDEBAR : end -->

					</div>
					<!-- LEFT COLUMN : end -->

					<!-- RIGHT COLUMN : begin -->
					<div class="right-column col-md-3">

						<!-- RIGHT SIDEBAR : begin -->
						<aside class="sidebar">
							<div class="widget-list">

                                	 <!-- LOCALE INFO WIDGET : begin -->
								<!-- to remove background image from this widget, simply remove "m-has-bg" class from the following element -->
								<div class="widget locale-info-widget m-has-bg hidden-sm hidden-xs">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-map-marker"></i>Locale Info</h3>
										<div class="widget-content">
											<ul>
												<li>
													<div class="row-title"><h4>Country</h4></div>
													<div class="row-value">India</div>
												</li>
												<li>
													<div class="row-title"><h4>State</h4></div>
													<div class="row-value">West Bengal</div>
												</li>
												<li>
													<div class="row-title"><h4>Distric</h4></div>
													<div class="row-value">Darjeeling (62%)  Jalpaiguri (38%)</div>
												</li>
												<li>
													<div class="row-title"><h4>Area</h4></div>
													<div class="row-value">41.9 km² (16.18 mi²)</div>
												</li>
												<li>
													<div class="row-title"><h4>Population</h4></div>
													<div class="row-value">20,000,00+ </br>(Males: 51%, Females: 49%, Other: 10%)</div>
												</li>
												<li>
													<div class="row-title"><h4>Coordinates</h4></div>
													<div class="row-value">26.707°N, 88.430°E</div>
												</li>
												<li>
													<div class="row-title"><h4>Time zone</h4></div>
													<div class="row-value">IST (UTC +5:30)</div>
												</li>
                                                <li>
													<div class="row-title"><h4>Weather</h4></div>
													<div class="row-value">Cold & Decent All Year</div>
												</li>
											
											</ul>
            							</div>
									</div>
								</div>
								<!-- LOCALE INFO WIDGET : end --> 
                        
								<!-- NOTICES WIDGET : begin -->
								<div class="widget notices-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-bullhorn"></i>Announcements</h3>
										<div class="widget-content">
											<ul class="notice-list">

												<!-- NOTICE : begin -->
												<li class="notice">
													<div class="notice-inner">
                                                        <h4 class="notice-title"><a href="notice-detail.html">Apply For Adhar</a></h4>
														<span class="notice-date">May 14, 2020</span>
													</div>
												</li>
												<!-- NOTICE : end -->

												<!-- NOTICE : begin -->
												<li class="notice">
													<div class="notice-inner">
														<h4 class="notice-title"><a href="notice-detail.html">Zero Balance Bank Account</a></h4>
														<span class="notice-date">July 19, 2020</span>
													</div>
												</li>
												<!-- NOTICE : end -->

												<!-- NOTICE : begin -->
												<li class="notice">
													<div class="notice-inner">
														<h4 class="notice-title"><a href="notice-detail.html">Waste & Scrap Management</a></h4>
														<span class="notice-date">August 24, 2020</span>
													</div>
												</li>
												<!-- NOTICE : end -->

												<!-- NOTICE : begin -->
												<li class="notice">
													<div class="notice-inner">
														<h4 class="notice-title"><a href="notice-detail.html">New Electricity Connection</a></h4>
														<span class="notice-date">October 18, 2020</span>
													</div>
												</li>
												<!-- NOTICE : end -->

											</ul>
											<p class="show-all-btn"><a href="notice-list.html">See All Announcements</a></p>
										</div>
									</div>
								</div>
								<!-- NOTICES WIDGET : end -->
                        
                        
                        
                        
                        
                        
                        

								<!-- IMAGE WIDGET : begin >
								<div class="widget image-widget">
									<div class="widget-inner">
										<div class="widget-content">
											<a href="#"><img src="images/poster-01.jpg" alt=""></a>
										</div>
									</div>
								</div>
								<!-- IMAGE WIDGET : end -->
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        

								<!-- EVENTS WIDGET : begin -->
								<div class="widget events-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-calendar-full"></i>Upcoming Events</h3>
										<div class="widget-content">
											<ul class="event-list">

												<!-- EVENT : begin -->
												<li class="event m-has-date">
													<div class="event-inner">
														<div class="event-date" title="June 3, 2016">
															<span class="event-month">Jun</span>
															<span class="event-day">3</span>
														</div>
														<h4 class="event-title"><a href="event-detail.html">Movie Premiere: RaOne 2.0 (Action Drama)</a></h4>
													</div>
												</li>
												<!-- EVENT : end -->

												<!-- EVENT : begin -->
												<li class="event m-has-date">
													<div class="event-inner">
														<div class="event-date" title="June 24, 2016">
															<span class="event-month">Jun</span>
															<span class="event-day">24</span>
														</div>
														<h4 class="event-title"><a href="event-detail.html">Summer Rock Festival: Water Park Party, Invitition Available &amp; More!</a></h4>
													</div>
												</li>
												<!-- EVENT : end -->

												<!-- EVENT : begin -->
												<li class="event m-has-date">
													<div class="event-inner">
														<div class="event-date" title="July 9, 2016">
															<span class="event-month">Jul</span>
															<span class="event-day">9</span>
														</div>
														<h4 class="event-title"><a href="event-detail.html">New Appartments Almost Ready</a></h4>
													</div>
												</li>
												<!-- EVENT : end -->

												<!-- EVENT : begin -->
												<li class="event m-has-date">
													<div class="event-inner">
														<div class="event-date" title="July 15, 2016">
															<span class="event-month">Jul</span>
															<span class="event-day">15</span>
														</div>
														<h4 class="event-title"><a href="event-detail.html">Test drive the new Honda! limited Offfer!</a></h4>
													</div>
												</li>
												<!-- EVENT : end -->

											</ul>
											<p class="show-all-btn"><a href="event-list.html">See All Events</a></p>
										</div>
									</div>
								</div>
								<!-- EVENTS WIDGET : end -->

						                              
<!------RIGHT POD----------------------------------------------------------------------------------------->
                                
                                
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Tourist & Guide</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/touristguidepic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Travel</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/travelpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Hotel</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/hotelspic.jpg"></a>
                                       	</div>

                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Real Estate</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/realestatepic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Rent</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/rentpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Show Time</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/showtimepic.jpg"></a>
                                       	</div>

                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Jewelry</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/jewelrypic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>I.T HUB</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/ithubpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>University</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/universitypic.jpg"></a>
                                       	</div>

                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Colleges</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/collegespic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Grooming & Spa</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/grooming-and-spa-siliguri-lpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Gym & Yoga</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/gympic.jpg"></a>
                                       	</div>                     
                                
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Air</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/flightpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Rail</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/railpic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Bus</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/buspic.jpg"></a>
                                       	</div>   
                                
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Astrology</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/astrologypic.jpg"></a>
                                       	</div>
                                        
                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Matrimony</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/matrimonypic.jpg"></a>
                                       	</div>   

                                        <div class="widget hidden-xs hidden-sm notices-widget pod" style="box-shadow: 0 0 2em 0.1em #ccc">
                                        <a href="#"><p><h2>Community & Forum</h2></p>
								        <ul class="container-fluid  mg-image image-responsive" style="margin-top: -10px;">
                                        <img class="podImage podInnerOne" style="width: 100%; height: 100%;" src="img/openquestionspic.jpg"></a>
                                       	</div>   
                         

          
                                
                                
                                












							</div>
						</aside>
						<!-- RIGHT SIDEBAR : end -->

					</div>
					<!-- RIGHT COLUMN : end -->

				</div>
			</div>
		</div> 
		<!-- CORE : end -->



























			<!-- FOOTER : begin -->
		<footer id="footer" class="m-has-bg">
			<div class="footer-bg">
				<div class="footer-inner">

					<!-- FOOTER TOP : begin -->
					<div class="footer-top">
						<div class="c-container">

							<!-- BOTTOM PANEL : begin -->
							<div id="bottom-panel">
								<div class="bottom-panel-inner">
									<div class="row">
										<div class="col-md-3">
	<!-- DEFINITION LIST WIDGET : begin -->
											<div class="widget definition-list-widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title">Quick Links</h3>
													<div class="widget-content">
														<dl>
															<dt>Help Desk</dt>
															<!--<dd>(123) 456-7890</dd>-->
															<dt>Feedbacks</dt>
															<!--<dd>(123) 456-7891</dd>-->
															<dt>Site Security</dt>
															<!--<dd>(123) 456-7892</dd>-->
                                                            <dt>F.A.Q.s</dt>
															<!--<dd>(123) 456-7892</dd>-->
                                                            <dt>support@SiliguriCircle.com</dt>
														</dl>
													
													</div>
												</div>
											</div>
											<!-- DEFINITION LIST WIDGET : end -->
                                            
                                            
											<!-- TEXT WIDGET : begin
											<div class="widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title">Quick Links</h3>
													<div class="widget-content">
                                                        <p><strong>Help Desk</strong></p>
                                                        <p><strong>Feedbacks</strong></p>
                                                        <p><strong>Site Security</strong></p>
                                                        <p><strong>F.A.Q.s</strong></p>
													</div>
												</div>
											</div>
											<!-- TEXT WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- DEFINITION LIST WIDGET : begin -->
											<div class="widget definition-list-widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<h3 class="widget-title">Experts</h3>
													<div class="widget-content">
														<dl>
															<dt>Advertise with Us</dt>
															<!--<dd>(123) 456-7890</dd>-->
															<dt>We are Hiring!</dt>
															<!--<dd>(123) 456-7891</dd>-->
															<dt>Affiliates</dt> 
                                                            <dt>Sell on Siliguri Circle</dt> 
															<!--<dd>(123) 456-7892</dd>-->
                                                           <dt>info@SiliguriCircle.com</dt>
															<!--<dd>(123) 456-7892</dd>-->
                                                           
															<!--<dd>(123) 456-7892</dd>-->
														</dl>
													
													</div>
												</div>
											</div>
											<!-- DEFINITION LIST WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- MAILCHIMP SUBSCRIBE WIDGET : begin -->
											<!-- Please read the documentation to learn how to configure Mailchimp Subscribe widget -->
											<div class="widget mailchimp-subscribe-widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
													<!--<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-at-sign"></i>Subscribe Here</h3>-->
                                                    <h3 class="widget-title">Subscribe Here</h3>
													<div class="widget-content">

														<!-- Add your custom form URL into "action" attribute in following element -->
                										<form class="mailchimp-subscribe-form" method="get"
                											action="http://lsvr.us14.list-manage.com/subscribe/post-json?u=8291218baaf54ddfd7dbc6016&amp;id=f3e5d696dc&amp;c=?">
	                    									<div class="subscribe-inner">

	                    										<div class="description">
	                    											<p>Join our newsletter to receive up to date information about News, Offers, Product Recomendetions & more of Fun & Entertainment arround the Town</p>
																</div>

																<!-- VALIDATION ERROR MESSAGE : begin -->
																<p class="c-alert-message m-warning m-validation-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>
																<span>Your email address is required.</span></p>
																<!-- VALIDATION ERROR MESSAGE : end -->

																<!-- SENDING REQUEST ERROR MESSAGE : begin -->
																<p class="c-alert-message m-warning m-request-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>
																<span>There was a connection problem. Try again later.</span></p>
																<!-- SENDING REQUEST ERROR MESSAGE : end -->

																<!-- SUCCESS MESSAGE : begin -->
																<p class="c-alert-message m-success" style="display: none;"><i class="ico fa fa-check-circle"></i>
																<span><strong>Form sent successfully!</strong></span></p>
																<!-- SUCCESS MESSAGE : end -->

										                        <div class="form-fields">
										                            <input type="text" placeholder="Your Email Address" name="EMAIL" class="m-required m-email">
										                            <button title="Subscribe" type="submit" class="submit-btn">
																		<i class="fa fa-chevron-right"></i>
																		<i class="fa fa-spinner fa-spin"></i>
																	</button>
										                        </div>

	                    									</div>
                										</form>

    												</div>
												</div>
											</div>
											<!-- MAILCHIMP SUBSCRIBE WIDGET : end -->

										</div>
										<div class="widget-col col-md-3">

											<!-- TEXT WIDGET : begin -->
											<div class="widget">
												<hr class="c-separator m-transparent hidden-lg hidden-md">
												<div class="widget-inner">
												<!--	<h3 class="widget-title m-has-ico"><i class="widget-ico tp tp-envelope"></i>Siliguri Circle</h3>-->
                                                    <h3 class="widget-title">Siliguri Circle</h3>
													<div class="widget-content">
														<p>Product Recomendation Engine - Digital Infrastructure.</br>
                                                                Towards Connected, Digital, Clean Energy & Green Siliguri</br>
                                                                </br>
                                                                Get this Code for Your City/Town [Anywhere in India] </p>
														<!--<p>Phone: +91 73195 90095<br>Fax: n/a<br> -->
														
													</div>
												</div>
											</div>
											<!-- TEXT WIDGET : end -->

										</div>
									</div>
								</div>
							</div>
							<!-- BOTTOM PANEL : end -->

						</div>
					</div>
					<!-- FOOTER TOP : end -->

					<!-- FOOTER BOTTOM : begin -->
					<div class="footer-bottom">
						<div class="footer-bottom-inner">
							<div class="c-container">

								<!-- FOOTER SOCIAL : begin -->
								<!-- Here is the list of some popular social networks. There are more icons you can use, just refer to the documentation -->
								<div class="footer-social">
									<ul class="c-social-icons">
										<li class="ico-twitter"><a href="https://www.Twitter.com/SiliguriCircle"><i class="fa fa-twitter"></i></a></li>
										<li class="ico-facebook"><a href="https://www.facebook.com/SiliguriCircle"><i class="fa fa-facebook"></i></a></li>
								<!--<li class="ico-googleplus"><a href="https://www.google+/SiliguriCircle"><i class="fa fa-google-plus"></i></a></li>-->
                                <!--<li class="ico-instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>-->
										<!--li><a href="#"><i class="fa fa-envelope"></i></a></li-->
										<!--li class="ico-angellist"><a href="#"><i class="fa fa-angellist"></i></a></li-->
										<!--li class="ico-behance"><a href="#"><i class="fa fa-behance"></i></a></li-->
										<!--li class="ico-bitbucket"><a href="#"><i class="fa fa-bitbucket"></i></a></li-->
										<!--li class="ico-bitcoin"><a href="#"><i class="fa fa-bitcoin"></i></a></li-->
										<!--li class="ico-codepen"><a href="#"><i class="fa fa-codepen"></i></a></li-->
										<!--li class="ico-delicious"><a href="#"><i class="fa fa-delicious"></i></a></li-->
										<!--li class="ico-deviantart"><a href="#"><i class="fa fa-deviantart"></i></a></li-->
										<!--li class="ico-digg"><a href="#"><i class="fa fa-digg"></i></a></li-->
										<!--li class="ico-dribbble"><a href="#"><i class="fa fa-dribbble"></i></a></li-->
										<!--li class="ico-dropbox"><a href="#"><i class="fa fa-dropbox"></i></a></li-->
										<!--li class="ico-flickr"><a href="#"><i class="fa fa-flickr"></i></a></li-->
										<!--li class="ico-foursquare"><a href="#"><i class="fa fa-foursquare"></i></a></li-->
										<!--li class="ico-git"><a href="#"><i class="fa fa-git"></i></a></li-->
										<!--li class="ico-github"><a href="#"><i class="fa fa-github"></i></a></li-->
										<!--li class="ico-lastfm"><a href="#"><i class="fa fa-lastfm"></i></a></li-->
										<!--li class="ico-linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li-->
										<!--li class="ico-paypal"><a href="#"><i class="fa fa-paypal"></i></a></li-->
										<!--li class="ico-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li-->
										<!--li class="ico-reddit"><a href="#"><i class="fa fa-reddit"></i></a></li-->
										<!--li class="ico-skype"><a href="#"><i class="fa fa-skype"></i></a></li-->
										<!--li class="ico-soundcloud"><a href="#"><i class="fa fa-soundcloud"></i></a></li-->
										<!--li class="ico-spotify"><a href="#"><i class="fa fa-spotify"></i></a></li-->
										<!--li class="ico-steam"><a href="#"><i class="fa fa-steam"></i></a></li-->
										<!--li class="ico-trello"><a href="#"><i class="fa fa-trello"></i></a></li-->
										<!--li class="ico-tumblr"><a href="#"><i class="fa fa-tumblr"></i></a></li-->
										<!--li class="ico-twitch"><a href="#"><i class="fa fa-twitch"></i></a></li-->
										<!--li class="ico-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li-->
										<!--li class="ico-vine"><a href="#"><i class="fa fa-vine"></i></a></li-->
										<!--li class="ico-vk"><a href="#"><i class="fa fa-vk"></i></a></li-->
										<!--li class="ico-wordpress"><a href="#"><i class="fa fa-wordpress"></i></a></li-->
										<!--li class="ico-xing"><a href="#"><i class="fa fa-xing"></i></a></li-->
										<!--li class="ico-yahoo"><a href="#"><i class="fa fa-yahoo"></i></a></li-->
										<!--li class="ico-yelp"><a href="#"><i class="fa fa-yelp"></i></a></li-->
										<!--li class="ico-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li-->
									</ul>
								</div>
								<!-- FOOTER SOCIAL : end -->

								<!-- FOOTER MENU : begin -->
								<nav class="footer-menu">
									<ul>
										<li><a href="#">Siliguri Circle &copy;  All Rights Reserved</a></li>
										<li><a href="#">Privicy</a></li>
										<li><a href="#">Policy</a></li>
									</ul>
								</nav>
								<!-- FOOTER MENU : end -->

								<!-- FOOTER TEXT : begin -->
								<div class="footer-text">
									<a href="timeline.html"> <p>Wired By:  Siddharth.d - V 2.1 &nbsp; &nbsp; Updates Info.</p> </a>
								</div>
								<!-- FOOTER TEXT : end -->

							</div>
						</div>
					</div>
					<!-- FOOTER BOTTOM : end -->

				</div>
			</div>
		</footer>
		<!-- FOOTER : end -->









<!-- SCRIPTS : begin -->
		<script src="library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="library/js/third-party.js" type="text/javascript"></script>
		<script src="library/js/library.js" type="text/javascript"></script>
		<script src="library/js/scripts.js" type="text/javascript"></script>

        

<!--CUSTOM JAVA SCRIPT LINKS----------STARTS--------->
         <script src="library/js/js1.js" type="text/javascript"></script>

    <!--NEWS SLIDER-------JS-----------STARTS------->
        
    <!--NEWS SLIDER-------JS-----------STARTS------->

<!-- SCRIPTS : end -->

	</body>
</html>