<html>
<head>
<title>Blood Bank</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css"/>
<link rel="stylesheet" href="css/bootstrap-theme.css"/>
<script src="js/bootstrap.min.js"></script>                    <!--above 3 are bootstrap off line file which are used for responsive page design-->
<link rel="stylesheet" href="w3css/w3.css">                   <!--link for using cs animation without net--><!--here it is used for animating side image-->
<style>
#facts{
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
    <div class="w3-container">
   <a href="1Home.php"><span class="glyphicon glyphicon-home"><br> Home <span></a>
   <marquee behavior="alternate"><img src="Images/25.jpg" width=500></marquee>
   </div>
   <br><br>
     
	 <div id=facts class="w3-container">Blood Facts</div>
	 
	 <div id=fly> <a href="30Madatry.php"><img src="Images/p1.PNG"></a></div>
	 

<div class="row">
 <div class="col-md-1">
 </div>

 <div class="col-md-7"> 
    <img src="Images/img22.jpg">Blood is the life-maintaining fluid that circulates through the body's heart, arteries, veins and capillaries.<br><br>
    <img src="Images/img22.jpg">Blood carries to the body nourishment, electrolytes, hormones, vitamins, antibodies, heat, and oxygen.<br><br>
    <img src="Images/img22.jpg">Blood carries away from the body waste matter and carbon dioxide.<br><br>
    <img src="Images/img22.jpg">Blood fights against infection and helps heal wounds, keeping you healthy.<br><br>
    <img src="Images/img22.jpg"> Blood makes up about 7% of your body's weight.<br><br>
    <img src="Images/img22.jpg">  A newborn baby has about one cup of blood in his or her body.<br><br>
    <img src="Images/img22.jpg"> White blood cells are the body's primary defence against infection.<br><br>
    <img src="Images/img22.jpg">  Granulocytes, a type of white blood cell, roll along blood vessel walls to search and destroy bacteria.<br><br>
    <img src="Images/img22.jpg"> Red blood cells carry oxygen to the body's organs and tissues.<br><br>
    <img src="Images/img22.jpg">There are about one billion red blood cells in two to three drops of blood.<br><br>
    <img src="Images/img22.jpg"> Red blood cells live about 120 days in the circulatory system.<br><br>
   <img src="Images/img22.jpg"> Blood platelets help clotting and give those with leukemia and other cancers a chance to live.<br><br>
 </div>

	<div class="col-md-3">
   <h1 class="w3-center w3-animate-top"><img src="Images/24.jpg"></h1>
   </div>
   
   </div>
 
<hr style="width:80%; height:40px"/>
	</body>
</html>