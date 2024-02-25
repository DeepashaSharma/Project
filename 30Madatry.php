<html>
<head>
 <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="jquery\jquery-3.2.1.min.js.js"></script>                        <!--jquery css is used here for responsive menu bar--> 
   <link rel="stylesheet" href="css/bootstrap.css"/>
   <link rel="stylesheet" href="css/bootstrap-theme.css"/>
   <script src="js/bootstrap.min.js"></script>                              <!--above 3 are bootstrap off line file which are used for responsive page design-->
   <link rel="stylesheet" href="w3css/w3.css">                             <!--link for using w3csc animation without net--> <!--this is used for animating the text-->
  </head>
<style>
 #image
 {                          /*css for top most image and after menu image*/
    max-width: 100%;
    height: auto;
}  
#tips{
	background-color:33CC00;
	font-size:40px;
	text-align:center;
}

#one
{
 	font-family:Times New Roman;
}
#two
{
	background-color:66CC00;
	border-radius:20;
	height:500px;
}
#submit
{
    background-color:red;
    height:40px;
    width:150px;
    color:white;	
    border: none;
    cursor: pointer;
    border-radius: 15px;
    box-shadow: 0 9px #999;

}
#submit:hover
{
        background-color: #3e8e41;
}
#submit:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
#slct
{
	width:200px;
	height:40px;
	border-radius:3px;
}

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
</head>
<body>

 <div>               
   <center> <img src="Images/2.jpg" height="110" width="800" id="image"></center>
</div>

<div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>


<div id=tips  class="w3-container">             <!--w3-container is used for responsive div by uing w3 only -->
    Mandatory Attention
</div>
<br>

<div class="row">
      <div class="col-md-1">
	  </div>
     <div class="col-md-6" id="one">
<h1 align="center"><font color="green">Mandatory Attention to all Visitors, Users & Members</font></h1><br><br>

We extremely regret certain inconveniences and irritations caused to some of our esteemed and invaluable members because of the fact that certain
 anti-social and low quality individuals/groups have indulged in the practice of taking/frisking member data from the site and misusing them for 
 whatsoever reasons.<br><br>

We would like to state the following in this regard for all of your immediate and mandatory attention:<br><br>

   <img src="Images/img22.jpg">SBB provides 100% free services and users are strictly advised to use the services only for the needy. The services provided by SBB are only online 
   with 24/7 user access. We won't provide any offline service.<br><br>
   
   <img src="Images/img22.jpg">Please call to the registered SBB number at the most extreme situation only. In this situation, we will post a Blood requirement post on our Facebook
   page with patients information and contact details.<br><br>

   <img src="Images/img22.jpg">Before contacting an SBB member for blood donation or making a call to us, pleae make sure that you have inquired with all relatives, friends, nearby
   clubs, libraries and hospitals for this. SBB is a free service organization and there are so many patients to be helped at urgent situation. Use the SBB
   services only if you fail to get a blood donor through the above mentioned sources.<br><br>

   <img src="Images/img22.jpg">SBB is not collecting any reward including but not limited to money, gifts, donations and return services etc. for the service provided or has not assigned
   any individual/group/institution to do so.<br><br>

   <img src="Images/img22.jpg">We Request once again : Before calling SBB member for blood donation, ensure that you have enquired with your relatives, friends and nearby clubs,
   libraries and hospitals !!<br><br>

   <img src="Images/img22.jpg">The Sanjeevani Blood Bank website strictly follows, and wishes to follow, rules and regulations formulated and implemented by the Honorable Government 
   of India for the functioning of a socially significant website as well as initiative such as ours.<br><br>

   <img src="Images/img22.jpg">We have incorporated certain advanced application systems in order to ensure that data are not easily and ambiguously looted, replicated and misused. 
   We bring to the notice of such anti-social individuals/groups that we are not to be held responsible for any damage to their system(s) caused by the
   function of our inbuilt security and anti-theft systems. Further, we would also initiate the strictest possible measures against such elements with 
   the best of our capabilities and strength.<br><br>

   <img src="Images/img22.jpg">Inappropriate and unacknowledged download, copy, and misuse of data in our website is illegal and liable to be acted up on in the strictest manner, 
   in accordance with the prevalent IT laws in India.<br><br>

   <img src="Images/img22.jpg">Sanjeevani Blood Bank website managers do not undertake the responsibility of data guarantee for the data provided by members registering with the website.
   However, we follow strict auditing procedures on a monthly basis and would try to ensure that any anomalies/misrepresentations whatsoever, brought to notice 
   would be immediately be corrected, or such data are deleted.<br><br>

   <img src="Images/img22.jpg">Members and the general public are advised to undertake detailed check on the data provided by registered members, before deciding up on the usage of data
   in the website.<br><br>

   <img src="Images/img22.jpg">SBB would not be responsible for any situation/issue arising out of any money and/or favour demanded by the 'social' service that the registered members are
   expected to provide by being the registered members of the website. Caution is expected to be exercised by users.<br><br>

   <img src="Images/img22.jpg">Any kind of misuse/malpractice exercised by any individual/group of the internet telephony/SMS service provided by our website would be strictly prohibited, 
   and the strictest action would be initiated against such anti-social practices, as per the prevalent IT laws in India, with our full strength and capabilities.<br><br>

   <img src="Images/img22.jpg">Users registering with SBB are advised to strictly go through the 'Privacy Policy' and 'Terms of Use' detailed in the IBB website. We would not be responsible
   for any matters/situations/issues arising out of these parameters being overseen and ignored by users and its registered members.<br><br>

   <img src="Images/img22.jpg">All disputes, whatsoever, are subject to Ernakulam Jurisdiction.
    </div>

  <div class="col-md-4">
   <div id="two">
        <center>
	     <form action="" method="POST">
	   <h1 style="color:green"><b>FIND A DONOR</b></h1><br>
 &nbsp;&nbsp;
  <select id="slct">
    <option value="">Select Blood Group</option>
    <option  value="A+">A+</option>
	<option  value="A-">A-</option>
    <option  value="B+">B+</option>
    <option  value="B-">B-</option>
    <option  value="O+">O+</option>
    <option  value="O-">O-</option>
	<option  value="AB+">AB+</option>
	<option  value="AB-">AB-</option>
	<option  value="A1+">A1+</option>
	<option  value="A1-">A1-</option>
	<option  value="A2+">A2+</option>
	<option  value="A2-">A2-</option>
	<option  value="A1B+">A1B+</option>
	<option  value="A1B-">A1B-</option>
	<option  value="A2B+">A2B+</option>
	<option  value="A2B-">A2B-</option>
</select><br><br>
  &nbsp;&nbsp;
  <!--<button onclick="window.location.href='19Login.php'" class="btn-block1">SEARCH</button>-->
  <input type="button" value="submit"  id="submit"  onclick="window.location.href='28Patntabd.php'"/>
  </form>
  </center>
  </div>
  <br>
  <div><h1 class="w3-center w3-animate-top"><img src="Images/24.jpg"></h1></div>
</div>

</div> 

<hr style="width:50%; height:20px"/>
</body>
</html>