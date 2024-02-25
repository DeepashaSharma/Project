<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="jquery\jquery-3.2.1.min.js.js"></script>                        <!--jquery css is used here for responsive menu bar--> 
   <link rel="stylesheet" href="css/bootstrap.css"/>
   <link rel="stylesheet" href="css/bootstrap-theme.css"/>
   <script src="js/bootstrap.min.js"></script>                              <!--above 3 are bootstrap off line file which are used for responsive page design-->
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
	  width:60%;
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
100%{left:80%; top:500px}
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
             	  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Home<b class = "caret"></b></a>
			               <ul class = "dropdown-menu">
                                <li><a href="22Donor.php">Home</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Who can donate<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                           <li><a href="26Dnrwcdb.php">Who can donate blood</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">About camps<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                               <li><a href="27Dnrabtcamp.php">About Camps</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Logout<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                              <li><a href="1Home.php">Logout</a></li>
 			              </ul>	 
			  </li>
         </ul>
   </div>
   
</nav>
</center>

<div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>

<div class="row">
     <div class="col-md-4">
         <img src="Images/17.png">
     </div>
     <div class="col-md-8">
      <marquee behavior="alternate" width=800><img src="Images/3.jpg" width=400></marquee>
     </div>
</div>

<br><br>
<hr style="width:80%"/>
 
 
 <div class="row">
     <div class="col-md-2">
     </div>
    
	<div class="col-md-5" >
             <font size=6 font color=336600>Who can give blood</font><br><br>
Most people can give blood. You can give blood if you are:<br><br>
   <img src="Images/img22.jpg"> fit and healthy<br>
   <img src="Images/img22.jpg">weigh over 7 stone 12 lbs or 50kg<br>
   <img src="Images/img22.jpg">aged between 17 and 66 (or 70 if you have given blood before)<br>
   <img src="Images/img22.jpg">over 70 and have given blood in the last two years<br><br>

<font size=5 font color=336600>How often can I give blood?</font><br><br>
    <img src="Images/img22.jpg">Men can give blood every 12 weeks and women can give blood every 16 weeks.<br><br>

<font size=6 font color=336600>Donors and disability</font><br><br>
   <p> <img src="Images/img22.jpg" align="left">Everyone can volunteer to give blood, whether they have a disability or not. However, we must make sure that it’s safe for people to give blood and for patients to receive donated blood.</p><br><br>

   <p> <img src="Images/img22.jpg" align="left">We need to be certain that anyone who wants to give blood understand what’s involved, how they will feel, and the things they’ll need to do afterwards to take care of themselves. If we think that someone doesn’t completely understand, we can’t let them give blood.</p>
     </div>
	 
     <div class="col-md-5">
	    <table align="center" width="400">
           <tr><td><marquee><img src="Images/60.jpg"></marquee><hr></td></tr>
          <tr><td><marquee><img src="Images/60.jpg"></marquee><hr></td></tr>
          <tr><td><marquee><img src="Images/60.jpg"></marquee><hr></td></tr>
       </table>      
    </div>
</div>

<hr style="width:80%"/>

<div class="row">   
<div class="col-md-2">
</div>
<div class="col-md-3"> 
        <h2 align="center">Tips on Blood Donation</h2><br>
	  	<p><img src="Images/62.jpg" align="left">
		You are noble but you got to be informed as well...<a href="18Todb.php"><font color="blue"> >> </font> </a> </p>
	  </div>
	  
	  
<div class="col-md-3">
	  <h2 align="center">Blood facts</h2><br>
	  	<p><img src="Images/63.jpg" align="left">
		A whole world in itself, blood is living matter!...<a href="17bf.php"><font color="blue"> >> </font> </a></p>
	  </div>
	  
	 <div class="col-md-3">
	  <h2 align="center">Related Links</h2><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.indianblooddonors.com"><font color="blue">www.indianblooddonors.com</font></a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.jeevan.org"><font color="blue">www.jeevan.org</font></a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.blooddonations.org"><font color="blue">www.blooddonations.org</font></a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.aabb.org"><font color="blue">www.aabb.org</font></a><br>
       &nbsp;&nbsp;&nbsp;&nbsp;<a href="www.redcross.org"><font color="blue">www.redcross.org</font></a>
</div>
</div>



<hr style="width:80%; height:40px"/>



</body>
</html>