<?php 
include("a_auth.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
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
    margin-bottom: 40px;
}
.boxes h1:hover{
	color:gray; 
    text-decoration:none; 
    cursor:pointer;
}

</style>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body style="background-color: white;">
	<nav class="navbar navbar-default" style="margin-bottom: 0px;width: 100%" id="top">
	  <div class="container-fluid">
	  	<div class="navbar-header" style="margin-left: 180px;">
	      <a class="navbar-brand" href="#">Student Management System</a>
	    </div>
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
	  	<a style="font-size: 16px;" href="adashboard.php">Dashboard</a>
	  </div>
	</div>

	<!-- Teacher -->

	<div class="dropdown">
	  <button class="dropbtn">Teacher</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="add_at1.php">Add Teacher</a>
	    <a style="font-size: 16px;" href="at1.php">View Details</a>
	  </div>
	</div>

	<!-- Student -->

	<div class="dropdown">
	  <button class="dropbtn">Student</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="add_as1.php">Add Student</a>
	    <a style="font-size: 16px;" href="as1.php">View Details</a>
	  </div>
	</div>


		<!-- Attendance -->

	<div class="dropdown">
	  <button class="dropbtn">Attendance</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="add_aAtte1.php">Add Attendance</a>
	  	<a style="font-size: 16px;" href="aAtte1.php">View Attendance</a>
	  </div>
	</div>

		<!-- Assignment -->

	<div class="dropdown">
	  <button class="dropbtn">Assignment</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="add_aAssi1.php">Add Assignment</a>
	  	<a style="font-size: 16px;" href="aAssi1.php">View Assignments</a>
	  </div>
	</div>


</div>
	
	
	<!-- Page content -->
	<div id="main" style="margin-left: 180px;">
		<h3>Welcome <?php echo $_SESSION['ausername']; ?> to Admin Dashboard!</h3>

		<div class="boxes">
			<a href="at1.php"><h1 style="padding-left: 78px;"> Teacher </h1></a>
			<a href="as1.php"><h1 style="padding-left: 83px;"> Student </h1></a>
			<a href="aAtte1.php"><h1> Attendance </h1></a>
			<a href="aAssi1.php"><h1> Assignment </h1></a>
		</div>

	</div>

</body>
</html>


