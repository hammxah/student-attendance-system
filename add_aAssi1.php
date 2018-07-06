<?php 
include_once "dbconfig.php";
include("a_auth.php");


if(isset($_POST['btn-save']))
{
	// variables for input data
	$cid = $_POST['cid'];
	$duedate = $_POST['duedate'];
	$topic = $_POST['topic'];
	$file = $_POST['file'];
	
	// variables for input data
	
	// sql query for inserting data into database
	$sql_query = "INSERT INTO assignment(cid,topic,duedate,file) VALUES('$cid','$topic','duedate','$file')";
	
	// sql query execution function
	if(mysqli_query($con, $sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Updated Successfully ');
		window.location.href='aAssi1.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Error');
		</script>
		<?php
	}
	// sql query execution function
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
		<h2>Assignment</h2>

		<div id="content">
			<div class="container" >

		<form method="post" class="form-horizontal">
			<div class="form-group" style="margin-top: 20px;">
				<a class="btn btn-default btn-block" href="aAssi1.php"> Back to Assignment Page</a>
			</div>
			<div class="form-group">
				<label for="Course"> CourseID: </label>
				<input class="form-control" type="text" id="Course" name="cid" placeholder="Course id" required/>
			</div>
			<div class="form-group">
				<label for="topic"> Assignment Topic: </label>
				<input class="form-control" type="text" id="Topic" name="topic" placeholder="Topic" required/>
			</div>
			<div class="form-group">
				<label for="DueDate"> Assignemnt Due Date: </label>
				<input class="form-control" type="text" id="DueDate" name="duedate" placeholder="Due Date" required/>
			</div>
			<div class="form-group">
				<label for="Assignment"> Upload Assignment: </label>
				<input class="form-control" type="file" accept=".pdf,.docx,.doc,.txt" id="assignemnt" name="file" required/>
			</div>
			<div class="form-group">
				<button type="submit" name="btn-save" class="btn btn-primary btn-block" >Upload</button>
			</div>
	    </form>
		</div>


		<div>
					
		</div>
	</div>

</body>
</html>



