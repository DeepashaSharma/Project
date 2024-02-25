<html>
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>                       <!--above 3 are bootstrap off line file which are used for responsive page design-->
<link rel="stylesheet" href="w3css/w3.css">                   <!--link for using cs animation without net--><!--here it is used for animating side image-->
<style>
#tips{
	background-color:33CC00;
	font-size:40px;
	text-align:center;
}
a
{
	text-decoration:none;
	font-size:30px;
	color:green;
}
a:hover
{
	color:red;
}
h2
{
	color:336600;
}
/*animation for fly the div starts*/

#fly{
    width: 100px;
    height: 100px;
    position: relative;
    animation: myfirst 5s infinite;
    animation-direction: alternate;
}


@keyframes myfirst
 {
0%{left:1000px; top:0px}
100%{left:1000px; top:1000px}
}

/*animation for fly the div ends*/

marquee {
    width: 80%;
    margin: auto;
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
100%{left:80%; top:1200px}
}

/*animation for fly the div ends*/			
hr {
	background-color: #fff;
	border-top: 2px dotted #8c8b8b;
	}		 

</style>
</head>
<body>
<br><br>
<div>
    <a href="1Home.php"><span class="glyphicon glyphicon-home"><br> Home <span></a>
	<marquee behavior="alternate"><img src="Images/25.jpg" width=500></marquee>
</div>		
	<br><br>
		
    <div id=tips>Some Tips of donating Blood</div>
	
	<div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>
	
<div class="row">
 <div class="col-md-1">
 </div>

 <div class="col-md-7"> 
  <img src="Images/img22.jpg"> Have a good meal at least 3 hours before donating blood.<br><br>	  
  <img src="Images/img22.jpg"> Accept the snacks offered to you after the donation, it is vital that you have them. You are recommended to have a good meal later.<br><br>
  <img src="Images/img22.jpg"> Avoid smoking on the day before donating. You can smoke 3 hours after donation.<br><br>
  <img src="Images/img22.jpg"> You will not be eligible to donate blood if you have consumed alcohol 48 hours before donation.<br><br>


    <h2> Misconceptions about donating blood</h2><br><br>

 <img src="Images/img22.jpg">"I will feel drained and tired after donating" - You will not feel drained or tired if you continue to drink fluids and have a good meal.<br><br>
 <img src="Images/img22.jpg">"I cannot resume normal activities" - You can resume all your normal activities, though you're asked to refrain.<br><br>
 <img src="Images/img22.jpg">"I will have low blood" - If you are okayed to donate by the doctor you will still have surplus blood after the donation.<br><br>
 <img src="Images/img22.jpg">"I can't take alcohol..." - You can on the next day.<br><br>
 <img src="Images/img22.jpg">"It will be painful while donating" - No, you will not feel any pain.<br><br>
 <img src="Images/img22.jpg">"I will feel dizzy and may faint" - You will not faint or feel uncomfortable after donating blood.<br><br>
 <img src="Images/img22.jpg">"I may get AIDS!" - No! Make sure disposable syringes are used and all measures are taken to keep you germ free.<br><br>
 <img src="Images/img22.jpg">"My blood is common. I don't think there will be demand for it" - That is why the demand for your type is greater than for rare types.
 </div>

	<div class="col-md-3">
       <h1 class="w3-center w3-animate-top"><img src="Images/24.jpg"></h1>
    </div>
	
	</div>

	<hr style="width:80%; height:40px"/>
	</body>
	</html>