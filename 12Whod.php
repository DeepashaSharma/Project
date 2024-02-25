<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="jquery\jquery-3.2.1.min.js.js"></script>                                         <!--jquery css is used here for responsive menu bar--> 
   <link rel="stylesheet" href="css/bootstrap.css"/>
   <link rel="stylesheet" href="css/bootstrap-theme.css"/>
   <script src="js/bootstrap.min.js"></script>                                                     <!--above 3 are bootstrap off line file which are used for responsive page design-->
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
<font size=6 font color=336600>What happens on the day</font><br><br>
From the moment you arrive at your donation session, we will guide you through the process, explain what we are doing and answer any questions you may have.<br><br>

<font size=5 font color=336600>Welcome and preparation</font></br></br>
Before donating blood, please eat regular meals, drink plenty of fluid (non-alcoholic) and avoid vigorous exercise or exertion.<br><br>
When you attend your donation session please read our Welcome leaflet: this explains the importance of blood safety. It's important to read this every time you attend, because advice does change.<br><br>
We must give you sufficient information so that you can make an informed choice, on the benefits and risks of donating blood and samples for testing.<br><br>
We will provide 500ml of fluid just before you donate. By drinking this over about 5 minutes, it will help with your wellbeing during and after donation.<br><br>

<font size=5 font color=336600>Health screening</fnt></font><br><br>
You will be called for private health screening, where a donor carer will confirm your identity. It’s critical that we guarantee an accurate link between you, your Donor Health Check and your donation.<br><br>
We must ensure that it's safe for you to donate and your donation is safe for a patient to receive. We’ll ask some confidential questions based on your completed Donor Health Check.<br><br>
There is a period of time from contact with any infection to detecting markers in the laboratory. We trust your honesty when answering these personal questions. This will ensure your blood is safe to transfuse to patients.<br><br>
You may be referred to a registered nurse for certain medical queries: their uniforms have red piping on the collar and cuffs. An explanation will always be provided if you are not able to donate. You will be advised when you can donate, and we’ll encourage you to make an appointment before you leave (the team are only able to book future appointments for the venue they are currently at).<br><br>
For your wellbeing, we must ensure you have enough haemoglobin (iron) in your blood before donating. A small blood sample will be taken from your finger to test your haemoglobin levels. If your test is borderline, we will offer you a confirmatory test. This requires a sample of blood from your arm, to be tested in a machine at the session. We will advise you of the result.<br><br>
Following health screening, you will be asked to sit in a different waiting area. From here you’ll be called and invited to a donation chair.<br><br>

<font size=5 font color=336600>Your donation</font><br><br>
When you are comfortable on the chair, you will be asked your name, address and date of birth again.<br><br>
Blood bags and sample tubes are labelled with unique donor identification numbers. All collection equipment is single use and sterile; only one blood bag is filled with your donation.<br><br>
A blood pressure cuff will be placed on your arm to maintain a small amount of pressure during your donation. The cuff is not used to measure blood pressure.<br><br>
Your arm will be thoroughly examined to find a suitable vein before being cleaned with an antiseptic sponge. This kills normal bacteria (germs) on the skin. You will see staff cleaning their hands frequently, using hand wipes or gels.<br><br>
Donors are advised to do applied muscle tension exercises during donation. This is to maintain blood pressure and promote wellbeing during and after donation.<br><br>
Following needle insertion you should be comfortable during your donation. If you experience any discomfort or pain please alert a member of staff.<br><br>
An agitator scale constantly weighs and measures your donation. It will stop automatically when your donation is complete. Donor carers will be available to you throughout your donation.<br><br>
You may hear beeping noises from the agitator, these inform us of the progress of your donation. A full donation is 470ml and will usually take between 5 and 10 minutes.<br><br>


<font size=5 font color=336600>After donation refreshment</font><br><br>
A selection of drinks and snacks are available at the refreshment table. We encourage donors to relax here for at least 15 minutes and to have at least 2 drinks following donation.<br><br>
If you feel unwell, please remain seated and alert a member of staff immediately. Where possible, we encourage you to book an appointment for your next donation.<br><br>

<font size=5 font color=336600>At home</font><br><br>
Please do not have a hot bath on the day of your donation. 
</div>

	<div class="col-md-3">
	<marquee direction="down" height=1700 ><img src="Images/50.jpg"></marquee>
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
  
</div>

 <hr style="width:80%; height:40px"/>
 
</body>
</html>