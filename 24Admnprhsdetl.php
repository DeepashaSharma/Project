<?php
 include('connection.php');
  if(isset($_POST['submit']))
  {	  
	 $bnam=$_POST['select'];
	 $prce=$_POST['price'];
	 $bb=$_POST['bldbnk'];
	 $nfb=$_POST['nofbtl'];
	 $cst=$_POST['cost'];
	 $dte=$_POST['date'];

	 $sql = mysql_query("INSERT INTO pbd(Bname,Price,Bank,Number,Total,Date) VALUES ('$bnam',' $prce','$bb','$nfb','$cst','$dte')");
	 if($sql)
	 {  
      echo"<script type='text/javascript'>
       alert('Purchase blood details hava been submitted');
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
  
  </head>
  <style>
  #one
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
	  width:80%;
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
                    /*css used for enhancing the designing of form*/
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
input[type=password],input[type=date],input[type=text]
{
    background-color: lightgreen;
	width:30%;
	height:30px;
	border-radius: 4px;
}
	           /*ends*/
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
                                <li><a href="21Admin.php">Home</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Purchase details<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                          <li><a href="24Admnprhsdetl.php">Purchase Blood Details</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Camp<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                               <li><a href="25Admcamp.php">Camp</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Donor<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                               <li><a href="22Donor.php">Donor</a></li>
 			              </ul>	 
			  </li>
			  <li class="dropdown"><a href = ""  class = "dropdown-toggle" data-toggle = "dropdown">Patient<b class = "caret"></b></a>
	                   <ul class = "dropdown-menu">
                             <li><a href="23Patient.php">Patient</a></li>
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
         <img src="Images/6.jpg" >
     </div>
     <div class="col-md-10">
	 <marquee behavior="alternate"><img src="Images/14.jpg" ></marquee>
     </div>
</div>

<br><br>
<hr style="width:80%"/>

<div class="row">
     <div class="col-md-2">
     </div>
     <div class="col-md-5" >
               <center>
                <form action="" method="POST"> 
                <font size=10px color=green>  <center> Blood Purchase Details</center> </font><br>
	  Blood Name:<select id="slct" name="select" required > 
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
	   Price per Bottle: <input type="text" name="price"  placeholder="Enter price per bottle" required><br><br>
	   Blood Bank:       <input type="text" name="bldbnk" placeholder="Enter the blood bank name" required><br><br>
	   Number of Bottles:<input type="text" name="nofbtl" placeholder="Enter the nos. of bottle" required><br><br>
	   Total price:      <input type="text" name="cost"   placeholder="Enter the total price" required><br><br>
	   Purchase date:    <input type="date" name="date" required ><br><br>
	                    <center><input type="submit" value="Submit" name="submit" id="submit"></center>
                 </form>
                </center>
     </div>
     <div class="col-md-4">
	   <br><br><br><br><br><br><br>
	 <marquee direction="up"><img src="Images/55.png"></marquee>
     </div>
	 <div class="col-md-1>
     </div>
</div>

 
 </body>
 </html>
