<?php 
include("s_auth.php");
include("header.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Student</title>
<style type="text/css">
.boxes{
    float: left;
    margin-top: 60px;
}

.boxes a{
    text-decoration: none;
    float: left;
}

.boxes h1{
	margin-left: 150px;
    color: #f2f2f2;
    width:300px;
    height:250px; 
    float: left; 
    background-color: #262626; 
    padding-left: 55px;
    padding-right: 50px;
    padding-top: 105px;
}
.boxes h1:hover{
	color:gray; 
    text-decoration:none; 
    cursor:pointer;
}

</style>
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

	<div class="dropdown">
	  <button class="dropbtn">Dashboard</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="sdashboard.php">Dashboard</a>
	  </div>
	</div>
		<!-- Attendance -->

	<div class="dropdown">
	  <button class="dropbtn">Attendance</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="sAtte1.php">View Attendance</a>
	  </div>
	</div>

		<!-- Assignment -->

	<div class="dropdown">
	  <button class="dropbtn">Assignment</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="sAssi1.php">View Assignment</a>
	  </div>
	</div>
</div>
	
	
	<!-- Page content -->
	<div id="main" style="margin-left: 180px;">
		<h3>Welcome <?php echo $_SESSION['susername']; ?> to Student Dashboard!</h3>

			<div class="boxes">
					<a href="sAtte1.php">
						<h1> Attendance </h1>
					</a>
					<a href="sAssi1.php">
						<h1> Assignment </h1>
					</a>
			</div>
	</div>

</body>
</html>
