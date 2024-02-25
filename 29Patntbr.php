<?php
 include('connection.php');
  if(isset($_POST['submit']))
  {	  
	 $nam=$_POST['name'];
	 $blood=$_POST['bg'];
	 $stat=$_POST['state'];
	 $dstct=$_POST['district'];
	 $whn=$_POST['when'];
	 $unt=$_POST['unit'];
	 $eml=$_POST['email'];
	 $phn=$_POST['phone'];
	 $adrs=$_POST['address'];

	 $sql = mysql_query("INSERT INTO bloodreq(Name,Bg,State,District,Date,Units,Email,Phone,Address) VALUES ('$nam',' $blood','$stat','$dstct','$whn','$unt','$eml','$phn','$adrs')");
	 if($sql)
	 {  
      echo"<script type='text/javascript'>
       alert('Required blood details hava been submitted ..........We will try for sending the blood as fast as possible');
	   </script>";
	  //echo "submitted data!!!!!!!!";
	 }
	 else
	 {
		 echo mysql_error();
	 }
  
  }
?>

<html lang="en">
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
   /*css for enhancethe form*/
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
select
{
    border: none;
    border-radius: 4px;
    background-color: lightgreen;
	height:30px;
	width:35%;
}
input[type=date],input[type=text],input[type=email]
{
    background-color: lightgreen;
	width:30%;
	height:30px;
	border-radius: 4px;
}
                        /*end*/   
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
                                    <li><a href="23Patient.php">Home</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Available Blood<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                          <li><a href="28Patntabd.php">Available Blood Details</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Blood Required<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                                <li><a href="29Patntbr.php">Blood Required</a></li>
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
     <div class="col-md-2">
		<img src="Images/23.jpg">
     </div>
     <div class="col-md-10">
		<marquee behavior="alternate"><img src="Images/10.jpg" width=500></marquee>
	 </div>
</div>

  <hr style="width:80%;/>
  
  <div class="row">
     <div class="col-md-2">
     </div>
	 <div class="col-md-6" >
             <center>
    <form action="" method="POST">
       <font size=10px color=green> <center> Blood Required Details </font><br><br>
	    <font size=6px color=green>Patient's Information </font><br>
	   Patient Name: <input type="text" name="name" placeholder="Enter patient name" required><br><br>
	   Blood Group:<select name="bg" required>
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
	   State:            <input type="text" name="state" placeholder="Enter state" required><br><br>
	   District:         <input type="text" name="district" placeholder="Enter district" required><br><br>
	   When Required:    <input type="date" name="when" required><br><br>
	   Units Required:   <input type="text" name="unit" placeholder="Enter units required" required><br><br>
	   <hr>
	   <font size=6px color=green>Contact Details</font><br>
	   Email:            <input type="email" name="email" placeholder="Enter email" required><br><br>
	   Phone:            <input type="text" name="phone" placeholder="Enter phone no." required><br><br>
	   Address:          <input type="text" name="address" placeholder="Enter your address" required><br><br>
	                    <input type="submit" value="Submit" name="submit" id="submit"></center>
  </form>
  </center>
     </div>
	  <div class="col-md-3">
		<marquee direction="up" height="800"><img src="Images/26.png"></marquee>
    </div>
	 <div class="col-md-1>
     </div>
</div>

</body>
</html>	