<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="jquery\jquery-3.2.1.min.js.js"></script>                      <!--jquery css is used here for responsive menu bar--> 
   <link rel="stylesheet" href="css/bootstrap.css"/>
   <link rel="stylesheet" href="css/bootstrap-theme.css"/>
   <script src="js/bootstrap.min.js"></script>                           <!--above 3 are bootstrap off line file which are used for responsive page design-->
  </head>
  <style>
 #one,#two
 {                          /*css for top most image and after menu image*/
    max-width: 100%;
    height: auto;
}  
                                /*css for menu bar start*/
    .icon-bar
  {
	   background-color:#336600;
  }
.navbar
  {
	  background-color:#33CC00;
	  border-radius:10px;
	  width:90%;
}

.nav li a
{
	 color:white;
	 text-align:center;
	 width:165px;                                                           
	 height:45px;
}

.nav li a:hover
{
	 background-color:#336600;
}
.dropdown-menu
{
	 background-color:#33CC00;  border-radius:10px;
}
.dropdown-menu li a:hover
{
	background-color:#336600;
}

                             /*css for menu bar ends*/
/*animation for fly the div starts*/                                        /* for animation no other files are required */  

#fly{
    width: 100px;
    height: 100px;
    position: relative;
    animation: myfirst 5s infinite;
    animation-direction: alternate;
	z-index:1000;
}


@keyframes myfirst
 {
0%{left:80%; top:0px}
100%{left:80%; top:1200px}
}

/*animation for fly the div ends*/			
hr {
	background-color: #fff;
	border-top: 2px dotted #8c8b8b;
	}		 
 </style>
<body>
  <div>
    <center><img src="Images/2.jpg" height="110" width="800" id="one"></center>
	</div>
<center>
<nav class = "navbar " role = "navigation">
   
     <div class = "navbar-header">
         <button type = "button" class = "navbar-toggle" data-toggle = "collapse" data-target = "#example-navbar-collapse">
           <span class = "sr-only">Toggle navigation</span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
           <span class = "icon-bar"></span>
        </button>
     </div>
   
   
   <div class = "collapse navbar-collapse" id = "example-navbar-collapse">
	    <ul class = "nav navbar-nav">
              <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section1<b class = "caret"></b></a>
			  			    <ul class = "dropdown-menu">
							   <li><a href="1Home.php">Home</a></li>
                               <li><a href="2Aboutus.php">About us</a></li>
                             </ul>
           	  </li>
              <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section2<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
							   <li><a href="3Wgb.php">Why give blood</a></li> 
                               <li><a href="4Tnfb.php">The need for blood</a></li>
				               <li><a href="5Hbiu.php">How blood is used</a></li>
				               <li><a href="6Wych.php">Who you could help</a></li>
                             </ul>
			  </li>
			  <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section3<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
							   <li><a href="7Wcgb.php">Who can give</a></li>
                               <li><a href="8Dad.php">Donors and disability</a></li>
                             </ul>
			  </li>
			  <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section4<b class = "caret"></b></a>
			                 <ul class = "dropdown-menu">
							   <li><a href="9Dp.php">Donation process</a></li>
			                   <li><a href="10Ro.php">Registering online</a></li>
				               <li><a href="11Ptgb.php">Preparing to give blood</a></li>
				               <li><a href="12Whod.php">What happens at day</a></li>
				               <li><a href="13Ayd.php">After your donation</a></li>
			                </ul>
			  </li>
			  <li class="dropdown"><a href = "" class = "dropdown-toggle" data-toggle = "dropdown">Section5<b class = "caret"></b></a>
			               <ul class = "dropdown-menu">
                              <li><a href="14Blood.php">Blood</a></li>
 			                  <li><a href="15Wnb.php">Who need blood</a></li>
				              <li><a href="16Mnb.php">Most needed blood</a></li>
			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Join with us<b class = "caret"></b></a>
			               <ul class = "dropdown-menu">
                              <li><a href="19Jwus.php">Join with us</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Contact us<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                              <li><a href="20Contactus.php">Contact us</a></li>
 			              </ul>	 
			  </li>
         </ul>
   </div>
   
</nav>
</center>
<br><br>
<div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>

<div>
      <center> <img src="Images/1.jpg" width="1100" id="two"></center>
</div>
<br>


<div class="row">
 <div class="col-md-1">
 </div>

 <div class="col-md-7"> 
<font size=6 font color=336600>The donation process</font><br><br>
Giving blood is simple and it saves lives. When you give blood, it is collected so it can be used to treat someone else.<br><br>
For most people, giving blood is easy and follows the simple steps listed below.<br><br>


<font size=5 font color=336600>Before you give blood</font><br><br>
    Check you are able to give blood.<br>
    Find an appointment – a number of appointments can be booked in advance.<br>
    Register to be a donor online.<br>
    Follow the preparing to give blood recommendations.<br><br>

<font size=5 font color=336600>When you give blood</font><br><br>
This is what will happen when you attend your appointment, or go to a drop-in session, to give blood. If you attend an appointment to give blood we aim to ensure it takes no more than an hour.<br><br>

<font size=5 font color=336600>1. Welcome and preparation</font><br><br>
  We will ask you to read our Welcome leaflet which explains the importance of blood safety. It’s important to read this whenever you attend because advice does change. We will give you 500ml of fluid just before you give blood. Drinking this over about 5 minutes will help with your well-being during and after donation.<br><br>

 <font size=5 font color=336600> 2. Health screening</font><br><br>
We make sure it is safe for you to donate, and that your blood donation is safe for a patient to receive.</font><br><br>
    We confirm your identity and ask you about the information on your donor health check form; a registered nurse may follow up if necessary.<br>
    We test a drop of blood from your finger to check the iron levels (haemoglobin) in your blood.<br><br>
If you are not able to donate we will explain why, and may ask you to make another appointment.<br><br>
If you are able to donate you will be asked to sit in a waiting area until you are called to a donation chair.<br><br>

<font size=5 font color=336600>3. Your blood donation</font><br><br>
When you are comfortable on the chair we will ask you to confirm your name, address and date of birth.<br><br>
We examine your arm and place a cuff on your arm to maintain a small amount of pressure during donation (this does not measure blood pressure).<br><br>
We then examine your arm to find a suitable vein and clean it with an antiseptic sponge.<br><br>
    1.We will insert a needle in your arm which will collect your blood into a blood bag with your unique donor number.<br>
    2.You should not feel any discomfort or pain. If you do, tell a member of staff.<br>
    3.A scale weighs the blood and stops when you have donated 470ml (or just under a pint). This usually takes between 5-10 minutes.<br>
    4.The needle will be removed and a sterile dressing applied to your arm.
</div>

	<div class="col-md-3">
	<marquee direction="down" height=1100 ><img src="Images/50.jpg"></marquee>
	</div>

</div>
<br><br><br>

<hr style="width:80%"/>


<div class="row">
 <div class="col-md-1">
 </div>
 
 <div class="col-md-3">
  	<image src="Images/54.jpg" align="left"/>
                   <br>   <font color="336600" size=5px><u>Latest News</u></font>
	<marquee direction="up">Blood Donation camp <br> coming soon</marquee>				  
 </div>
  
 <div class="col-md-3">
  <image src="Images/55.jpg" align="left"/>
                <font color="336600" size=5px><u>Donate Blood</u></font><br><br>
   <image src="Images/56.jpg"/>
 </div>
  
 <div class="col-md-3">
  <image src="Images/57.jpg"align="left">
               <font color="336600" size=5px><u>Register as a blood donor</u></font><br><br>
	<image src="Images/58.jpg"/>		   
  </div>
   
   <hr style="width:80%; height:40px"/>
   
</div>
</body>
</html>
