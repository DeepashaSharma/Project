<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="jquery\jquery-3.2.1.min.js.js"></script>                        <!--jquery css is used here for responsive menu bar--> 
   <link rel="stylesheet" href="css/bootstrap.css"/>
   <link rel="stylesheet" href="css/bootstrap-theme.css"/>
   <script src="js/bootstrap.min.js"></script>                                  <!--above 3 are bootstrap off line file which are used for responsive page design-->
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
<font size=6 font color=336600>How blood is used</font><br><br>
Blood or the components of blood are used to treat patients with medical conditions such as anaemia, cancer blood disorders, and those having surgery.<br><br>

<font size=5 font color=336600>Blood components</font><br><br>
Blood is made up of a number of components, including red blood cells, platelets and plasma. Each of these can be used to treat many different conditions.<br><br>
Blood is usually separated into its individual components or parts, so a patient can be given the particular component they need.<br><br>
This makes the most of every blood donation, as the components in one unit of blood (or one donation) can be used to treat different patients.<br><br>

<font size=5 font color=336600>Blood transfusions</font><br><br>
Donated blood or components are given to a patient in a blood transfusion. Blood transfusions are given via an intravenous line into a blood vessel.<br><br>
How blood was used in 2014, according to hospital usage:<br><br>

    67% was used to treat medical conditions including anaemia, cancer and blood disorders<br><br>
    27% was used in surgery, including cardiac surgery and emergency surgery<br><br>
    6% was used to treat blood loss after childbirth<br><br>
Usage varies between hospitals depending on their particular specialties.<br><br> 

The demand for blood from hospitals has fallen due to increased efficiency, but new donors are always needed to make sure there is enough blood to treat those who need it.<br><br>

<font size=5 font color=336600>Blood transfusions for people who are dying</font><br><br>
Blood can be vital for people with medical conditions or who are having surgery. But blood transfusions can also improve the quality of life for people whose illness has no cure.<br><br>
Karen Clarke, a community nurse who gives transfusions to terminally ill people in their own homes, says: 'These vital transfusions give patients a better quality of life and the energy and ability to enjoy this precious, final time with their families'.
	</div>
	
	<div class="col-md-3">
	<marquee direction="down" height=900 ><img src="Images/50.jpg"></marquee>
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