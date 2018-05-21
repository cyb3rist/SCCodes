<!DOCTYPE html>
<html>
	<head>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Siliguri Circle</title>
        <link rel="shortcut icon" href="images/favicon.png">

		<!-- GOOGLE FONTS : begin -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400italic,700,700italic&amp;subset=latin,latin-ext" rel="stylesheet" type="text/css">
		<!-- GOOGLE FONTS : end -->

        <!-- STYLESHEETS : begin -->
		<link rel="stylesheet" type="text/css" href="library/css/style.css">
        <link rel="stylesheet" type="text/css" href="library/css/skin/blue.css">
		<link rel="stylesheet" type="text/css" href="library/css/custom.css">
		<!--[if lte IE 9]>
		<link rel="stylesheet" type="text/css" href="library/css/oldie.css" />
		<![endif]-->
		<!-- STYLESHEETS : end -->

	<style>
        
    .event-page .event-content {
    border-color:transparent;
}    
        
        
        
        
        /*****************USER RATING*******************ON*******************/
        .checked {
    color: orange;
}
         /*****************USER RATING*******************OFF******************/
        
        
        
        
        
        
        /********IMAGE********ON***************/
 
#myImg {
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

#myImg:hover {opacity: 0.7;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
}

/* Modal Content (image) */
.modal-content {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
}

/* Caption of Modal Image */
#caption {
    margin: auto;
    display: block;
    width: 80%;
    max-width: 700px;
    text-align: center;
    color: #ccc;
    padding: 10px 0;
    height: 150px;
}

/* Add Animation */
.modal-content, #caption {    
    -webkit-animation-name: zoom;
    -webkit-animation-duration: 0.6s;
    animation-name: zoom;
    animation-duration: 0.6s;
}

@-webkit-keyframes zoom {
    from {-webkit-transform:scale(0)} 
    to {-webkit-transform:scale(1)}
}

@keyframes zoom {
    from {transform:scale(0)} 
    to {transform:scale(1)}
}

/* The Close Button */
.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    transition: 0.3s;
}

.close:hover,
.close:focus {
    color: #bbb;
    text-decoration: none;
    cursor: pointer;
}

/* 100% Image Width on Smaller Screens */
@media only screen and (max-width: 700px){
    .modal-content {
        width: 100%;
    }
}
        /**********IMAGE********OFF***************/
        
        
        
        /*********************SCROLL STYLE******************ON****/
        
        ::-webkit-scrollbar {
    width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
    box-shadow: inset 0 0 0px grey; 
    border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
    background: skyblue ; 
    border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
    background: violet; 
}
        
         /*********************SCROLL STYLE******************ON****/
        
        
    </style>
    
    
    
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
									<img src="images/header-logo.png"
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
										<li><a href="Connect/loginOrSignup.html">Login &nbsp; or &nbsp; Signup</a></li>
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
							
                         
                                
                                <button type="button" class="headerButton  hidden-xs hidden-sm">
									<a  href="Connect/loginOrSignup.html"><span >Login/SignUp </span></a>
								</button>
                            
                                       
                                <button type="button" class="headerButton  hidden-xs hidden-sm">
									<a href="http://siliguricircle.com/chat" style="text-decoration: none;"><span>CHAT</span></a>
								</button>
                                
                                 
                                
                                	<button type="button" class="header-gmap-switcher" title="Show on Map">
									<i class="ico-open tp tp-map2"></i>
									<i class="ico-close tp tp-cross"></i>
									<span>Map</span>
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
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
		<!-- CORE : begin -->
		<div id="core">
			<div class="c-container">
				<div class="row">

					<!-- MIDDLE COLUMN : begin -->
					<div class="middle-column col-md-6 col-md-push-3">

						<!-- PAGE HEADER : begin -->
						<div id="page-header" class="m-has-breadcrumbs">

							<!-- PAGE TITLE : begin -->
							<div class="page-title">
								<h1>Your Business Name <button type="button" class="btn btn-info" style="color:yellow;"><i style="font-size:24px" class="fa">&#xf044;</i></button></h1> 
							</div>
							<!-- PAGE TITLE : end -->

							<!-- BREADCRUMBS : begin -->
							<div class="breadcrumbs">
								<ul>
									<li class="home"><a href="index.html">Home</a></li>
									<li><!--<a href="event-list.html">-->Choose Your Business Catagoty &nbsp; <button type="button" class="btn btn-info" style="color:yellow;"><i style="font-size:24px" class="fa">&#xf044;</i></button> <!--</a>--></li>
									<li>Ads</li>
								</ul>
							</div>
							<!-- BREADCRUMBS : end -->

						</div>
						<!-- PAGE HEADER : end -->

						<!-- PAGE CONTENT : begin -->
						<div id="page-content">
							<div class="page-content-inner">

								<!-- EVENT DETAIL PAGE : begin -->
								<div class="event-detail-page event-page">

									<!-- EVENT : begin -->
									<div class="event">
										<div class="event-inner c-content-box m-no-padding">

											<!-- EVENT IMAGE : begin -->
											<!--div class="event-image">
												<a href="event-detail.html"><img src="images/event-01-cropped.jpg" alt=""></a>
											</div-->
											<!-- EVENT IMAGE : end -->

											<!-- EVENT CORE : begin -->
											<div class="event-core">

											

												<!-- EVENT CONTENT : begin -->
												<div class="event-content">
                                                    
                                                    <h2>Write Something about your Business 
                                                     
                                                        <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button></h2>
                                                    
                                                    	<!-- EVENT INFO : begin -->
												<ul class="event-info">
													<li class="event-date">
														<i class="ico tp tp-calendar-full"></i>
														<span>June 3, 2020</span>
													</li>
													<li class="event-time">
														<i class="ico tp tp-clock2"></i>17:00
													</li>
													<li class="event-location">
														<i class="ico tp tp-map-marker"></i>
														<span>City/Town &nbsp; <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button></span>
													</li>
                                                    <li class="event-id">
													<i class="ico tp tp-map-marker"></i> 
														<span>AD ID: #824528</span>
													</li>
												</ul>
												<!-- EVENT INFO : end -->
                                                    
                                                    
                                                    
                                                
                                              
                                                    
                                      
                                               
<!--      <h6>Product Image</h6>    -->

<button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> Upload New Photo
<img id="myImg" src="img/jghjbn545678990.jpg" alt="Image 1" width="100%" height="200">

<!-- The Modal -->
<div id="myModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="img01">
  <div id="caption"></div>
</div>
     
 <div>
<br/>
     <h5><b style="font-weight: 800"> <i style="font-size:18px; color: gray;" class="fa">&#xf041;</i> &nbsp; &nbsp; Address:</b> <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> </h5>
     <h5><b style="font-weight: 800"> <i style="font-size:18px; color: gray;" class="fa">&#xf276;</i> &nbsp; &nbsp; Area PIN Code:</b><button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button></h5>
     <h5><b style="font-weight: 800"> <i style="font-size:18px; color: gray;" class="fa">&#xf0ac;</i> &nbsp; Website:</b> <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button></h5>
   <!--  <h5><b style="font-weight: 800"> <i style="font-size:17px; color: grey;" class="fa">&#xf0e0;</i> &nbsp; E-mail:</b> info@mywebsitename.com</h5> -->
    <!--<h5><b style="font-weight: 800"> <i style="font-size:25px; color: grey;" class="fa">&#xf10b;</i> &nbsp; &nbsp; Phone:</b> +91 990099009900</h5> -->                                           
    <h5><b style="font-weight: 800"> <i style="font-size:18px; color: grey;" class="fa">&#xf05a;</i> &nbsp; Services:</b> <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> (Eg: Web development, SEO, SMO, Software, Hosting)</h5>
     
    <h5><b style="font-weight: 800"> <i style="font-size:18px; color: gray;" class="fa">&#xf09d;</i> &nbsp; Modes of Payment:</b><button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button></h5>
     
       <h5><b style="font-weight: 800">  <i style="font-size:18px; color: gray" class="fa">&#xf13d;</i> &nbsp; Year Established:</b> <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button></h5>
     
    </div>                                                   
                        
                    <div>
                        <h3 style="font-weight: 500; color: black;">&nbsp; <span style="font-weight: 600; color: darkslategray">Price ₹ :</span> &nbsp; <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> (Eg: Website starting from  ₹ 2500 per year)</h3>                                
                    </div>
                                                    
                                                    
             
                                <br/>               
                                     <form action="/action_page.php">
                                                              <textarea name="message" rows="5" cols="30">(Example: We are a Web and Software Development Company, we deal with Domain Name, Web Hosting, Short Code and Bulk SMS, Email Marketing, Web Graphics Designing and Resellar Pacakages, etc.) 
                                                                  
                                                                  ("Example: Web Development and Software Application Studio")  or ("Example: Exclusive Multi Cuisine Food Cafe")</textarea>
                                                              <br>
                                                              <input type="submit">
                                                        </form>
                                                    
                                                    <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button>
													<h3></h3> <br/>
												
                        
													<p style="color: gray; font-size: 15px;"><em>When you call, don't forget to mention that you found this ad on <u>SiliguriCircle.com</u><br/> I do not wish to be contacted by telemarketers or representatives of any other website.</em></p>
												</div>
												<!-- EVENT CONTENT : end -->

											</div>
											<!-- EVENT CORE : end -->
                                            
                                                    
                                            
                                            
                                                                    
                            <div style="text-align: center;">                       
        <!-- AddToAny BEGIN -------------SOCIAL SHARE-------------------------->
               
                <!--<i style="font-size:18px" class="fa">&#xf06e; </i>--> 
                          <a href="#">      <i style="font-size:20px; float: left; margin-left: 0px; color: red; " class="fa">&#xf004; <span style="color: darkslategray; font-family: sans-serif">&nbsp;54<h6> &nbsp; &nbsp; &nbsp; &nbsp; Favourites</h6></span></i>   </a>
                                
                                
                                <span style="margin-left: 10px; text-align: center; cursor: pointer;">Views: 458</span>  
                                
                                
                                
                            <a href="#">   <div style="float: right;  margin-right: 10px;"><img style="width:22px;" src="img/pocketIcon.jpg"> &nbsp; &nbsp; &nbsp;   </div> <div style="float: right;"><span style="font-size: 21px; padding-left: 0px; margin-bottom: 0px;" ><b style="color: darkslategray;">22</b><h6>Pocket</h6> </span> </div> </a>
                                
                               <br/><br/> <a class="a2a_dd" href="https://www.addtoany.com/share">
                       <img style="text-align: center;" src="img/share01001.jpg" width="200px;" height="50px" border="0" alt="Share"> <b style="color: blueviolet; font-size: 20px; padding-top: -20px; "></b>
                    </a>
                                
                    <script>
                        var a2a_config = a2a_config || {};
                        a2a_config.num_services = 10;
                    </script>
                    <script async src="https://static.addtoany.com/menu/page.js"></script>
                    <!-- AddToAny END -------------------SOCIAL SHARE----------------------->   
                    </div>
                                      
                                            <br/>
                                            
                                  
                                            
                                            
											<!-- EVENT LOCATION : begin -->
											<!-- Add your address into "data-address" attribute
											Change zoom level with "data-zoom" attribute, bigger number = bigger zoom
											Change map type with "data-maptype" attribute, values: roadmap | terrain | hybrid | satellite
											API KEY IS REQUIRED! More info https://developers.google.com/maps/documentation/javascript/get-api-key -->
                                            <h3>&nbsp; Update Your Business Location On Map
                                            <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> </h3>
                                            
											<div class="event-location" style="height: 250px;">
												<div class="gmap-canvas"
													data-google-api-key="ADD-YOUR-GOOGLE-API-KEY-HERE"
													data-address="siliguri, deshbandhupara"
													data-zoom="16"
													data-maptype="hybrid"
													data-enable-mousewheel="true">
												</div>
											</div>
											<!-- EVENT LOCATION : end -->

										</div>
									</div>
									<!-- EVENT : end -->

								</div>
								<!-- EVENT DETAIL PAGE : begin -->

							</div>
						</div>
						<!-- PAGE CONTENT : end -->
                    
<div class="jumbotron" style="text-align: center;">
 <p> <b style="padding: 5px 28px; background-color: orange; color:white; font-size: 25px; font-weight: bold; cursor: pointer;"><i style="font-size:24px" class="fa">&#xf086;</i></b> &nbsp;
     
     
     <b style="background-color: dodgerblue; color: white; padding: 5px 28px;  font-size: 25px; font-weight: bold; cursor: pointer;"><i style="font-size:24px" class="fa">&#xf095;</i></b> 
    
    
     <b style="background-color: limegreen; color: white; padding: 5px 25px; margin-left: 5px;  font-size: 25px; font-weight: bold; cursor: pointer;">📧</b> 
    
     
    </p>
  
</div>
                        
                           <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> Your Valid Business Concact
                        
                        &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
                        
                              <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> Your Valid Business E-mail
                        
                        
                        <hr/>
                        <br/>
                        <div>
                              
                            <div class="widget categories-widget" style="background-color: ghostwhite; border-radius: 10px;">
									<div class="widget-inner">
										<h2 class="widget-title m-has-ico" style="color: dodgerblue; padding: 0px; text-align: center; padding-bottom: 30px; padding-top: 10px;" >
									<!--	<i class="widget-ico tp tp-list4">-->USER REVIEWS</h2>
                                        <h6 style="text-align: center; margin-top: -40px; color: dimgray;"><strong>How was your experience with this service?</strong> <br> (Your Feedback is Important to Us for Further Improvements of Our Service)</h6>
										<div class="widget-content" style="height: 200px; overflow: scroll; scroll-behavior: smooth; padding-left: 10px">
											<ul style="width: 100%; height: 100%; text-align: left; word-wrap: break-word; ">
												
                                                <li><strong>USER 1:</strong> Good Service </li>
                                                <li><strong>USER 2:</strong>  Nice</li>
                                                <li><strong>USER 3:</strong>  Excelent</li>
                                                <li><strong>USER 4:</strong>  Avarage</li>
                                                <li><strong>USER 5:</strong>  Not Bad</li>
                                                <li><strong>USER 6:</strong> Good Service</li>
                                                <li><strong>USER 7:</strong>  Nice</li>
                                                <li><strong>USER 8:</strong>  Excelent</li>
                                                <li><strong>USER 9:</strong>  Avarage</li>
                                                <li><strong>USER 10:</strong>  Not Bad</li>
                                                
												
											</ul>
										</div>
                               
									</div>
								</div>
                        
                        </div>
                                                <!--<div style="float: right; color: blueviolet; cursor: pointer;"><strong>More</strong></div> -->
                    <br/>
                     
                        <div style="text-align: center;">
                        <button type="button" class="btn btn-info" style="background-color: dodgerblue; color: white; padding: 12px 40px; border-radius: 5px;"> <strong>Give Feedback</strong></button>
                    
                            </div>
                            
                            <br/><br/>
                                        

                    
                        <hr/>
                        
                        
                        
						<hr class="c-separator m-margin-top-small m-margin-bottom-small m-transparent hidden-lg hidden-md">

					</div>
					<!-- MIDDLE COLUMN : end -->

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

								<!-- CATEGORIES WIDGET : begin -->
								<div class="widget categories-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico" style="color: dodgerblue; padding: 0px; text-align: center; padding-bottom: 30px; padding-top: 10px;" >
									<!--	<i class="widget-ico tp tp-list4">--></i>Safety Tips For Sellers and Buyers</h3>
										<div class="widget-content">
											<ul>
												<li>1. Meet Seller/Buyers at a safe location</li>
												<li>2. Check the item before you buy/sell</li>
												<li>3. Pay only after collecting item</li><br/>
                                                <a href="BuyerSafetyTips.html"> <li style="float: right;">Know more »</li> </a>
											</ul>
										</div>
									</div>
								</div>
								<!-- CATEGORIES WIDGET : end -->

								<!-- EVENTS WIDGET : begin -->
								<div class="widget events-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico" style="color: dodgerblue; padding: 0px; text-align: center; padding-bottom: 30px; padding-top: 10px;" >
									<!--	<i class="widget-ico tp tp-list4">--></i>Contact Person</h3>
										<div class="widget-content">
											<ul class="event-list">

												<!-- EVENT : begin -->
											<div class="chip" style="text-align: center;">
                                            <img src="img/profilePicUntitled.jpg" alt="Person" width="96" height="96" style="border-radius: 5px;">
                                                    
                                                        </div>
												<!-- EVENT : end -->
                                                    <br/>
												<!-- EVENT : begin -->
												NAME:&nbsp; &nbsp;    <strong>Full Name</strong>  <br/><br/>
                                                LOCATION:&nbsp; &nbsp;     <strong>Siliguri   </strong>  <br/><br/>
                                              
                                                STATUS:&nbsp; &nbsp;   <strong>Ofline    </strong>     <br/><br/>
                                                  USER ADS:&nbsp; &nbsp;    <strong>View all Ads  </strong> <br/><br/>
                                                JOINED ON:&nbsp; &nbsp;      <strong>3rd March 2020  </strong>     <br/><br/>
                                                
                                                <a href="profile.html" >  <p style="float: right; color: blueviolet;">View Profile »</p> </a>
                                 
                                                
												<!-- EVENT : end -->

											
											</ul>
										
										</div>
									</div>
								</div>
								<!-- EVENTS WIDGET : end -->
	                           
                        
                        <!--OPENING HOURS------------ON----->
                        
                        <div class="widget categories-widget">
									<div class="widget-inner">
										<h6 class="widget-title m-has-ico" style="color: dodgerblue; padding: 0px; text-align: center; padding-bottom: 30px; padding-top: 10px; font-size: 18px;" >
									<!--	<i class="widget-ico tp tp-list4"></i>--> VISITING HOURS</h6>
										<div class="widget-content" style="text-align: left   ;">
											<ul style="width: 100%;">
											<!--	<img  style="cursor: pointer;" src="#"/>   -->
                                                
                                                <li>Monday:&nbsp;   
                           <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> 00:00 to 00:00</li>  
                                                <li>Tuesday:&nbsp;   
                           <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> 00:00 to 00:00</li> 
                                                <li>Wednesday:&nbsp;   
                           <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> 00:00 to 00:00</li> 
                                                <li>Thursday:&nbsp;   
                           <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> 00:00 to 00:00</li> 
                                                <li>Friday:&nbsp;   
                           <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> 00:00 to 00:00</li> 
                                                <li>Saturday:&nbsp;   
                           <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> 00:00 to 00:00</li> 
                                                <li>Sunday:&nbsp;   
                           <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> 00:00 to 00:00</li> 
                                                
                                                
												
											</ul>
										</div>
									</div>
								</div>
                        <!--OPENING HOURS------------OFF----->
                
                
    
                        
                        
                        
                        
                        
                        
                            <div class="widget categories-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico" style="color: dodgerblue; padding: 0px; text-align: center; padding-bottom: 30px; padding-top: 10px;" >
									<!--	<i class="widget-ico tp tp-list4">--></i>USER RATING</h3>
										<div class="widget-content">
											<ul style="width: 100%; height: 100%; text-align: center;">
												
                                                <span class="fa fa-star checked" style="font-size: 25px;"></span>
                                                <span class="fa fa-star checked" style="font-size: 25px;"></span>
                                                <span class="fa fa-star checked" style="font-size: 25px;"></span>
                                                <span class="fa fa-star checked" style="font-size: 25px;"></span>
                                                <span class="fa fa-star" style="font-size: 25px;"></span>
                                                <br/><br/>
                                                <span style="text-align: center;">Total Ratings: 85</span>
                                                
                                                
                                                <div>    <a href="">   <p style="float: right; padding-top: 30px;">View all Ads by this user » </p> </a>   </div>
                                                
                                         
                                                
												
											</ul>
										</div>
									</div>
								</div>
                        
                        
                  <!--------------VIEW MY SHOP------------->      
                        <div class="widget categories-widget">
									<div class="widget-inner">
										<h6 class="widget-title m-has-ico" style="color: dodgerblue; padding: 0px; text-align: center; padding-bottom: 20px; padding-top: 10px; font-size: 18px;" >
									<!--	<i class="widget-ico tp tp-list4">--></i>SHOP ONLINE</h6>
										<div class="widget-content" style="padding-left: 0%;">
											<ul style="width: 100%; height: 100%;">
                                                <a href=".html">	<img style="cursor: pointer; width: 100%; height: 250px;" src="img/visitmyministore00012.jpg"/>  </a> 
                                                
                                                
												
											</ul>
										</div>
									</div>
								</div>
                        
                        
                
                
                
                
                                  <!--BOOK APPOINTMENT HOURS------------ON----->
                        
                        <div class="widget categories-widget">
									<div class="widget-inner">
										<h6 class="widget-title m-has-ico" style="color: dodgerblue; padding: 0px; text-align: center; padding-bottom: 30px; padding-top: 10px; font-size: 18px;" >
									<!--	<i class="widget-ico tp tp-list4"></i>-->MAKE APPOINTMENT</h6>
										<div class="widget-content" style="text-align: left   ;">
											<ul style="width: 100%;">
											<!--	<img  style="cursor: pointer;" src="#"/>   -->
                                                
                                              <form action="/action_page.php">
                                                 <strong>Your Full name</strong> <span style="color: blueviolet">*</span> <input type="text" name="fname" placeholder="what do I call you?"><br><br>
                                                 <strong>Your Contact Number</strong> <span style="color: blueviolet">*</span> <input type="text" name="lname"  placeholder="how can I contact you if needed?"><br><br>
                                                  <strong>Appointment for</strong> <span style="color: blueviolet">*</span>    <input type="text" name="lname"  placeholder="meeting, checkups, casual, other work, "><br><br>
                                                  
<form >
  <strong>At Which Date</strong> <span style="color: blueviolet">*</span> 
  <input type="date" name="dateOfAppointment">
 
</form>
                                                  
                                                  <input style="float: right; border-radius: 5px;" type="submit" value="Make Appiontment">
                                                </form>
                                                
                                                
												
											</ul>
										</div>
									</div>
								</div>
                        <!--BOOK APPOINTMENT------------OFF----->
                        
                        
                        
                
                
                
                
                
                
                
                
                        
                        <div class="widget categories-widget">
									<div class="widget-inner">
										<h3 class="widget-title m-has-ico" style="color: dodgerblue; padding: 0px; text-align: center; padding-bottom: 30px; padding-top: 10px;" >
									<!--	<i class="widget-ico tp tp-list4">--></i>Seller Verification</h3>
										<div class="widget-content">
											<ul style="width: 100%; height: 50%; padding-left: 0px;">
                                                
                                                 *[SELLER VERIFICATION is important to minimize fraud activity for the BUYER PROTECTION and helps building trust for the seller's BRAND]*
                                                <br/> <br/> 
                         Verify Phone Number  <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button> <br/>
                                                
                                                
                                                 
                          Verify Email Address <button type="button" class="btn btn-info" style="color:dodgerblue;"><i style="font-size:24px" class="fa">&#xf044;</i></button>
                                                
                                                
										<!--		<img src="img/phoneVerified.jpg"/>   <br/> <br/>
                                                <img src="img/emailVerify.jpg"/>  -->
                                                
												
											</ul>
										</div>
									</div>
								</div>
            
            
            
            
            <div class="widget categories-widget">
									<div class="widget-inner">
										<h6 class="widget-title m-has-ico" style="color: #000; padding: 0px; text-align: center; padding-bottom: 30px; padding-top: 10px; font-size: 14px;" >
									<!--	<i class="widget-ico tp tp-list4">--></i>Report This Advert.</h6>
										<div class="widget-content" style="padding-left: 42%;">
											<ul style="width: 30%; height: 30%;">
                                                <a href="reportAds.html">	<img style="cursor: pointer;" src="img/flagIt.jpg"/>  </a> 
                                                
                                                
												
											</ul>
										</div>
									</div>
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
		<!-- SCRIPTS : end -->


<!---------------IMAGE-----MODAL-------------ON--------------------->
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
</script>
<!---------------IMAGE-----MODAL-------------OFF--------------------->


	</body>
</html>