<?php
 include('connection.php');
  /*if(isset($_POST['submit']))
  {	  
	 $slct=$_POST['sl'];
	 
     echo $slct;
	  $sql = mysql_query("SELECT * FROM pbd WHERE Bname='$slct'");
	 
	 while($result = mysql_fetch_array($sql))
	 {
		 echo $result['Bname'];
		 echo $result['Price'];
		 echo $result['Bank'];
		 echo $result['Number'];
		 echo $result['Total'];
		 echo $result['Date'];
	 }
	
	}*/
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
               /*css for enhancing the form */
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


table {
    border-collapse: collapse;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even)
{
	background-color: #f2f2f2
}
select
{
    border: none;
    border-radius: 4px;
    background-color: lightgreen;
	height:30px;
	width:35%;
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
		<img src="Images/163.jpg" align="left" width=200>     </div>
     <div class="col-md-10">
		<center><marquee behavior="alternate"><img src="Images/18.jpg" width=500></marquee></center>
	 </div>
</div>
  
  <hr style="width:80%;/>
  
  
  <div class="row">
     <div class="col-md-2">
     </div>
	 <div class="col-md-6" >
             <center>
     <form action="" method="POST">
       <font size=10px color=green> <center> Available Blood Details</font><br>
	   Blood Name:<select name="sl" required>
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
	                    <input type="submit" value="Search" name="submit" id="submit"></center>
  </form>
  </center>
     </div>
	  <div class="col-md-3">
		<marquee direction="up" ><img src="Images/19.jpg"> <br><br><img src="Images/20.jpg"></marquee>
    </div>
	 <div class="col-md-1>
     </div>
</div>
<br><br><br><br>
  
  
<div style="overflow-x:auto;">   
<table border=1 align="center" width=1000>
<tr>
<th>Blood</th><th>Price per unit of blood</th><th>Bank where blood available</th><th>Number of units blood available</th><th>Total cost for blood</th><th>Date when blood received</th>
</tr>
<?php
if(isset($_POST['submit']))
  {	  
	 $slct=$_POST['sl'];
     $sql = mysql_query("SELECT * FROM pbd WHERE Bname='$slct'");
     while($result = mysql_fetch_array($sql))
	 {
?>

<tr>
<th><?php echo $result['Bname']; ?></th>
<th><?php echo $result['Price'];?></th>
<th><?php echo $result['Bank'];?></th>
<th><?php echo $result['Number'];?></th>
<th><?php echo $result['Total'];?></th>
<th><?php echo $result['Date'];?></th>
	 
</tr>
<?php
	 }
  }
  
	 ?>
	 </table>
</div>









<hr style="width:50%; height:10px"/>
</body>
</html>	