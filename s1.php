<?php 
include("s_auth.php");
include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
</head>
<body style="background-color: white;">
	<nav class="navbar navbar-default" style="margin-bottom: 0px;width: 100%" id="top">
	  <div class="container-fluid">
	  	<div class="navbar-header" style="margin-left: 180px;">
	      <a class="navbar-brand" href="#">Student Management System</a>
	    </div>
	  	<!-- <ul>
	  		<li>
	  			
	  		</li>
	  	</ul> -->
	    <ul class="nav navbar-nav navbar-right list-unstyled">
	    	<li>
	    		
	    		<a href="logout.php" class="btn btn-md"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
	    	</li>
	    </ul>
	  </div>	  
	</nav>
	<marquee style="margin-bottom:-6px;" bgcolor="#f8f8f8" scrollamount="9" height="30"> Welcome to Student Management System</marquee>

	<div class="sidenav">
			<!-- Attendance -->

		<div class="dropdown">
		  <button class="dropbtn">Attendance</button>
		  <div class="dropdown-content" >
		  </div>
		</div>

			<!-- Assignment -->

		<div class="dropdown">
		  <button class="dropbtn">Assignment</button>
		  <div class="dropdown-content" >
		  </div>
		</div>
	</div>
	
	
	<!-- Page content -->
	<div id="main" style="margin-left: 180px;">

		<div>

			
		</div>
	</div>

</body>
</html>
