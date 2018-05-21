<?php 
session_start();


//fetch all values
$uname = $_SESSION["username"];



?>
<!DOCTYPE html>
<html lang="en">
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


            
            
            <!--*********PROFILE CARD***********-->
            
            <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
/*********************END*******/
            
                
                
                
                /*************CENTER PROFILE PIC DIV*****************/
                
 .center-div {
  margin: 0 auto;
  width: 200px;
  height: 200px;
  background-color: transparent;
  border-radius: 500px;
    margin-top: -100px;
}        
                
                
.profilePic {
     margin: 0 auto;
  width: 200px;
  height: 200px;
  background-color: #ccc;
  border-radius: 500px;
    margin-top: 0px;
}  
                

.profileBgPic{
    height: auto 0;
    width: 100%;
    max-width: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-image: url(img/profileBgPicUntitled.jpg);
}                
                
                
.intro{
    text-align: center;
    font-size: 33px;
    color: #000;
    font-weight: 800;
}         
                
.bio{
    text-align: center;
    font-size: 22px;
    color: #000;
    font-weight: 200;               
}
                
                
 /**************SIDE SLIDE BAR MENU*****************START*******/
                
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: rgba(0, 0, 80, 0.9) ;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #fff;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #fff;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

#main {
    transition: margin-left .5s;
    margin-left: 5px;
    margin-right: 5px;
    padding-left: 5px;
    padding-right: 5px;
   
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
/**************SIDE SLIDE BAR MENU*****************END*******/
                
                
/**************CAKE  DAY*****************ON*******/            
        
.cakeDay{
    text-align: center;
    font-weight: bold;
}                               
/*************CAKE  DAY********************OFF*******/
                
                

                
                
                
 /******************PROFILE TAB**************ON********/
                /* Style tab links */
.tablink {
    background-color: #555;
    color: white;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    font-size: 17px;
    width: 25%;
}

.tablink:hover {
    background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
    color: white;
    display: none;
    padding: 80px 0px 0px 0px;
    height: 100%;
}

#Home {background-color: transparent;}
#News {background-color: transparent;}
#Contact {background-color: transparent;}
#About {background-color: transparent;}
                
  /******************PROFILE TAB**************OFF********/               
                
                
                
                
/**************PROFILE TIMELINE********ON********/

                .timeline{
  --uiTimelineMainColor: var(--timelineMainColor, #222);
  --uiTimelineSecondaryColor: var(--timelineSecondaryColor, #fff);

  position: relative;
  padding-top: 3rem;
  padding-bottom: 3rem;
}

.timeline:before{
  content: "";
  width: 4px;
  height: 100%;
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  top: 0;
}

.timeline__group{
  position: relative;
}

.timeline__group:not(:first-of-type){
  margin-top: 4rem;
}

.timeline__year{
  padding: .5rem 1.5rem;
  color: var(--uiTimelineSecondaryColor);
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  left: 0;
  top: 0;
}

.timeline__box{
  position: relative;
}

.timeline__box:not(:last-of-type){
  margin-bottom: 30px;
}

.timeline__box:before{
  content: "";
  width: 100%;
  height: 2px;
  background-color: var(--uiTimelineMainColor);

  position: absolute;
  left: 0;
  z-index: -1;
}

.timeline__date{
  min-width: 65px;
  position: absolute;
  left: 0;

  box-sizing: border-box;
  padding: .5rem 1.5rem;
  text-align: center;

  background-color: var(--uiTimelineMainColor);
  color: var(--uiTimelineSecondaryColor);
}

.timeline__day{
  font-size: 2rem;
  font-weight: 700;
  display: block;
}

.timeline__month{
  display: block;
  font-size: .8em;
  text-transform: uppercase;
}

.timeline__post{
  padding: 1.5rem 2rem;
  border-radius: 2px;
  border-left: 3px solid var(--uiTimelineMainColor);
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .12), 0 1px 2px 0 rgba(0, 0, 0, .24);
  background-color: var(--uiTimelineSecondaryColor);
}

@media screen and (min-width: 641px){

  .timeline:before{
    left: 30px;
  }

  .timeline__group{
    padding-top: 55px;
  }

  .timeline__box{
    padding-left: 80px;
  }

  .timeline__box:before{
    top: 50%;
    transform: translateY(-50%);  
  }  

  .timeline__date{
    top: 50%;
    margin-top: -27px;
  }
}

@media screen and (max-width: 640px){

  .timeline:before{
    left: 0;
  }

  .timeline__group{
    padding-top: 40px;
  }

  .timeline__box{
    padding-left: 20px;
    padding-top: 70px;
  }

  .timeline__box:before{
    top: 90px;
  }    

  .timeline__date{
    top: 0;
  }
}

.timeline{
  --timelineMainColor: #4557bb;
  font-size: 16px;
}

@media screen and (min-width: 768px){

  html{
    font-size: 62.5%;
  }
}

@media screen and (max-width: 767px){

  html{
    font-size: 55%;
  }
}

/*
* demo page
*/

@media screen and (min-width: 768px){

  html{
    font-size: 62.5%;
  }
}

@media screen and (max-width: 767px){

  html{
    font-size: 50%;
  }
}

body{
  font-family: -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Open Sans, Ubuntu, Fira Sans, Helvetica Neue, sans-serif;
  font-size: 1.6rem;
  color: #222;

  background-color: #f0f0f0;
  margin: 0;
  -webkit-overflow-scrolling: touch;   
  overflow-y: scroll;
}

p{
  margin-top: 0;
  margin-bottom: 1.5rem;
  line-height: 1.5;
}

p:last-child{
  margin-bottom: 0;
}

.page{
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
}

.page__demo{
  flex-grow: 1;
}

.main-container{
  max-width: 960px;
  padding-left: 2rem;
  padding-right: 2rem;

  margin-left: auto;
  margin-right: auto;
}

.page__container{
  padding-top: 30px;
  padding-bottom: 30px;
  max-width: 800px;
}

.footer{
  padding-top: 1rem;
  padding-bottom: 1rem;
  text-align: center;  
  font-size: 1.4rem;
}

.footer__link{
  text-decoration: none;
  color: inherit;
}

@media screen and (min-width: 361px){

  .footer__container{
    display: flex;
    justify-content: space-between;
  }
}

@media screen and (max-width: 360px){

  .melnik909{
    display: none;
  } 
}
                
 /*************PROFILE TIMELINE********OFF********/     
                
                
/**********SAY! BUTTON****&******MESSAGE ME BUTTON******ON**********/         
                .SayButton {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 5px #ccc;
}

.SayButton:hover {background-color: #3e8e41}

.SayButton:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
   /**********SAY! BUTTON****&******MESSAGE ME BUTTON******OFF******/              
                
                
     /***********SAY! PHOTO UPLOAD BUTTON ********&******MESSAGE ME BUTTON********ON*****/
 .uploadPicIcon {
    width:100px;
   float: left;
    text-align:left;
    padding: 1px;
     margin-top: 3px;
     margin-bottom: -5px;

}
                
     /***********SAY! PHOTO UPLOAD BUTTON************&******MESSAGE ME BUTTON*****OFF*****/                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
/********STYLE*************END*******/         
</style>
<!--*****STYLE*************END******-->      
  
</head>
    
    
    
<body>


  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <a href="http://www.siliguricircle.com"><i style="font-size:22px" class="fa">&#xf015;</i> Home</a>
  <a href="myNotifications.html"><i style="font-size:20px" class="fa">&#xf0a2;</i> Notifications</a>
 <!-- <a href="#"><i style="font-size:24px" class="fa">&#xf003;</i> Massages</a> -->
   <a href="BuddyList.html"><i style="font-size:20px" class="fa">&#xf0c0;</i> Friends</a>
      <a href="profile.php"><i style="font-size:20px" class="fa">&#xf007;</i> Profile</a>
      <a href="bizHub.html"><i style="font-size:20px" class="fa">&#xf0f2;</i> Biz</a>
      <a href="profile.html"><i style="font-size:20px" class="fa">&#xf073;</i> Appointments</a>

<!--  <a href="#"><i style="font-size:24px" class="fa">&#xf0c0;</i> Friends</a> -->
<!--  <a href="#"><i style="font-size:24px" class="fa">&#xf002;</i> Search</a> -->
<!--   <a href="#"><i style="font-size:24px" class="fa">&#xf03e;</i> Picrures</a>
   <a href="#"><i style="font-size:24px" class="fa">&#xf073;</i> Events</a>
   <a href="#"><i style="font-size:24px" class="fa">&#xf0f6;</i> Notes</a>
   <a href="#"><i style="font-size:24px" class="fa">&#xf14e;</i> Nearby</a>
   <a href="#"><i style="font-size:24px" class="fa">&#xf29c;</i> Help</a>  -->
   
<!-- <a href="adsHub.html"><i style="font-size:20px" class="fa">&#xf069;</i> Free Listings</a> -->
<!--   <a href="adsHub.html"><i style="font-size:22px" class="fa">&#xf0e7;</i> &nbsp;Feature Ads</a>   -->
<!--   <a href="featureYourAds.html"><i style="font-size:20px" class="fa">&#xf0a1;</i> Boost Ads</a>   -->
 <!--   <a href="#"><i style="font-size:24px" class="fa">&#xf07a;</i> Shopping</a> -->
     
      <a href="http://siliguricircle.com/chat"><i style="font-size:20px" class="fa fa-pencil-square-o"></i> Edit Profile</a>
     
      <a href="mySettings.html"><i  style="font-size:20px" class="fa fa-cog fa"></i> Setting</a>
      <a href="mySettings.html"><i  style="font-size:20px" class=""></i> Logout</a>
       
        
        
</div>

<div id="main">
 
  
  <span style="font-size:30px;cursor:pointer; background-color: white; float: right; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px;" onclick="openNav()"> <i style="font-size:24px; padding: 12px 8px 8px 8px;" class="fa">&#xf0a6;</i></span>
</div>

   <!---------------MAIN------OPEN--------->                              
                                    
<div class="container-fluid" style="background-color: #ccc; height: auto; width: 100%;">                       
<div  class="profileBgPic container-fluid" style="background-color: transparent; height: 300px; width: 100%;">
 
</div> 
    
    
 <div  class="container" style="background-color: white; height: auto; width: 98%; margin-top: -50px; margin-left: 1%; border-radius: 8px;">
    
    
<div class="center-div"> <img class="profilePic" src="img/profilePicUntitled.jpg" style="position:fixeds ;" /></div>
    
     
     
     
   <p><div class="intro"><?php echo  $_SESSION["firstname"].' '. $_SESSION["lastname"]; ?><span style="font-size: 25px; color: blue;"></span> <i style="font-size:20px; color: blue;" class="fa">&#xf222;</i> <br/> <i style="font-size:19px" class="fa">&#xf041; Siliguri </i> </div> 
     <div class="bio"><span style="font-size: 16px;"><i style="font-size:16px" class="fa">&#xf1fa;</i><?php echo  $_SESSION["username"]; ?> </span> </div>
     <div class="bio"><span style="font-size: 18px;"> <i style="font-size:18px" class="fa">&#xf0ac;</i> www.SiliguriCircle.com</span></div> <br/>
     <div class="bio"><h5>i am a software developer and coder</h5> </div>
     <div class="cakeDay"><h6><i style="font-size:16px" class="fa">&#xf1fd;</i> &nbsp; Cake Day in: 300 days</h6></div>  </p>
    
    <div class="socialIcons" style="text-align: center;">
    <a href="#"><i class="fa fa-twitter"></i></a> &nbsp;
    <a href="#"><i class="fa fa-google"></i></a> &nbsp;
        <a href="#"><i class="fa fa-whatsapp"></i></a> &nbsp;
         <a href="#"><i class="fa fa-facebook"></i></a>  &nbsp;
    <a href="#"><i class="fa fa-instagram"></i></a> &nbsp;
    <a href="#"><i class="fa fa-linkedin"></i></a> &nbsp;
        <a href="#"><i class="fa fa-reddit"></i></a>
   
    </div>   
    

    <!---------------PROFILE TABS------------------ON------------>
    <div  style="margin-top: 20px; margin-bottom: 10px;">
        
        
<button class="tablink" onclick="openPage('Home', this, '#2196f3')"> <i style="font-size:24px" class="fa">&#xf118;</i> </button>
<button class="tablink" onclick="openPage('News', this, 'orange')" id="defaultOpen"><i style="font-size:24px" class="fa">&#xf1b3;</i></button>
<button class="tablink" onclick="openPage('Contact', this, 'red')"><i style="font-size:24px" class="fa">&#xf004;</i></button>
<button class="tablink" onclick="openPage('About', this, 'limegreen')"><i style="font-size:24px" class="fa">&#xf1d9;</i></button>
        
        
   <div id="Home" class="tabcontent" style="">
  <!--  <h3 style="float: left; margin-right: 15px; "><b style="padding: 13px; background-color: blueviolet; color: white; cursor: pointer;">1457  &nbsp; Buzz</b></h3>
       
      <h3 style=""><b style="padding: 13px; background-color: dodgerblue; color: white; cursor: pointer;">Every Buzz</b></h3>
       
  <p style="color: #000;">###</p>  -->
       <div style="text-align:center;"><h1>COMING SOON!</h1></div>
       
      
       

</div>

<div id="News" class="tabcontent">
 <!-- <h3>BLOG</h3>
  <p style="color: #000;">!!!</p>  -->
    
   <!-- <iframe src="magazine/index.html" height="3000" width="700" scrolling="no"></iframe> -->
    
    <div style="text-align:center;"><h1>COMING SOON!</h1></div>
    
    
    
</div>

<div id="Contact" class="tabcontent">
<!-- <h3 style=""><b style="padding: 13px; background-color: red; color: white; cursor: pointer;">357  &nbsp; Favourites</b></h3>
  <p style="color: #000;">###</p>  -->
     <div style="text-align:center;"><h1>COMING SOON!</h1></div>
    
</div>

<div id="About" class="tabcontent">
 <!-- <h3 style=""><b style="padding: 13px; background-color: limegreen; color: white; cursor: pointer;">74  &nbsp; Messages</b></h3>
  <p style="color: #000;">###</p>  -->
    <div style="text-align:center;"><h1>COMING SOON!</h1></div>
    
    
</div>

        </div><!---CONTAINER------OFF--->
    <!---------------PROFILE TABS------------------OFF------------>

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
</div>                                      

  <!---------------MAIN--------CLOSE------->
                    
                    
                    
                    
                    
                    
                    

















<!-- SCRIPTS : begin -->
		<script src="library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="library/js/third-party.js" type="text/javascript"></script>
		<script src="library/js/library.js" type="text/javascript"></script>
		<script src="library/js/scripts.js" type="text/javascript"></script>

        <!---------------SIDE SLIDER MENU BAR --------------ON------->
     <script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     <!---------------SIDE SLIDER MENU BAR --------------OFF------->
    
    
    
    <!----PROFILE TAB--------ON----->
    <script>
function openPage(pageName,elmnt,color) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
    }
    document.getElementById(pageName).style.display = "block";
    elmnt.style.backgroundColor = color;

}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
      <!----PROFILE TAB--------OFF----->
    
    
    


<!--CUSTOM JAVA SCRIPT LINKS----------STARTS--------->
         <script src="library/js/js1.js" type="text/javascript"></script>

    <!--NEWS SLIDER-------JS-----------STARTS------->
        
    <!--NEWS SLIDER-------JS-----------STARTS------->

<!-- SCRIPTS : end -->

	</body>
</html>