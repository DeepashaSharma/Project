<?php
 include('connection.php');
  /*if(isset($_POST['search']))
  {	  
	 $stat=$_POST['one'];
	 $dstct=$_POST['two'];
     echo $stat;echo $dstct;
	
	 $sql = mysql_query("SELECT * FROM camp WHERE State='$stat'");
	 
	 while($result = mysql_fetch_array($sql))
	 {
		 echo $result['id'];
		 echo $result['State'];
		 echo $result['District'];
		 echo $result['Address'];
		 echo $result['Time'];
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

                      /*css for enhancing the form and output table*/
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
     <div class="col-md-2">
         <img src="Images/143.jpg">
     </div>
     <div class="col-md-10">
     <marquee behavior="alternate"><img src="Images/16.png" width=300></marquee>     
	 </div>
</div>
  
  <hr style="width:80%;/>
  
<div class="row">
     <div class="col-md-2">
     </div>
     
	 <div class="col-md-6" >
             <center>
     <form action="" method="POST">
     <font size=10px color=green><center>Blood Donation Camps</center></font><br><br>
	    State:  <select id="slct" name="one">
		                          <option>Select your State</option>
                 				  <option>Andaman Nicobar</option>  
								  <option>Andhra Pradesh</option>
								  <option>Arunachal Pradesh</option>
								  <option>Assam</option>
								  <option>Bihar</option>
								  <option>Chandigarh</option>
								  <option>Chhattisgarh</option>
								  <option>Dadra & Nagar Haveli </option>
								  <option>Daman & Diu</option>
								  <option>Delhi</option>
								  <option>Goa</option>
								  <option>Gujarat</option>
								  <option>Haryana</option>
								  <option>Himachal Pradesh</option>
								  <option>Jammu & Kashmir</option>
								  <option>Jharkhand</option>
								  <option>Karnataka</option>
								  <option>Kerala</option>
								  <option>Lakshdweep</option>
				     			  <option>Madhya Pradesh</option>
					     		  <option>Maharashtra</option>
								  <option>Manipur</option>
						     	  <option>Meghalaya</option>
								  <option>Mizoram</option>
								  <option>Nagaland</option>
								  <option>Orissa</option>
								  <option>Pondicherry</option>
								  <option>Punjab</option>
								  <option>Rajasthan</option>
			     				  <option>Sikkim</option>
								  <option>Tamil Nadu</option>
								  <option>Tripura</option>
								  <option>Uttar Pradesh</option>
							      <option>Uttaranchal</option>
								  <option>West Bengal</option>
                </select><br><br>
	                    <center><input type="submit" value="Search" name="search" id="submit"></center>
  </form>
  </center>
     </div>
	 
     <div class="col-md-3">
	<marquee direction="up" height="250"> <img src="Images/0.jpg"><br><br><br><br> <img src="Images/168.jpg"> </marquee>      
    </div>
	 <div class="col-md-1>
     </div>
</div>
<br><br><br><br>


<div style="overflow-x:auto;">   
<table border=1 align="center" width=1000>
<tr>
<th>State</th><th>District</th><th>Address</th><th>Time</th><th>Date</th>
</tr>
<?php
if(isset($_POST['search']))
  {	  
	 $stat=$_POST['one'];
	 $sql = mysql_query("SELECT * FROM camp WHERE State='$stat'");
	 while($result = mysql_fetch_array($sql))
	 {
	?>

<tr>
<th><?php echo $result['State'];?></th>
<th><?php echo $result['District'];?></th>
<th><?php echo $result['Address'];?></th>
<th><?php echo $result['Time'];?></th>
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