<?php
include_once 'dbconfig.php';
include("a_auth.php");


if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM student WHERE sid=".$_GET['edit_id'];
	$result_set=mysqli_query($con, $sql_query);
	$fetched_row=mysqli_fetch_array($result_set);
}
if(isset($_POST['btn-update']))
{
	// variables for input data
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$contact = $_POST['contact'];
	$batch = $_POST['batch'];
	$address = $_POST['address'];
	$semester = $_POST['semester'];
	$degree = $_POST['degree'];
	$password = $_POST['password'];

	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE student SET name='$name',gender='$gender',contact='$contact',batch='$batch',address='$address',semester='$semester',degree='$degree',password='$password' WHERE sid=".$_GET['edit_id'];
	// sql query for update data into database
	
	// sql query execution function
	if(mysqli_query($con, $sql_query))
	{
		?>
		<script type="text/javascript">
		alert('Data Updated Successfully');
			window.location.href='as1.php';
		</script>
		<?php
	}
	else
	{
		?>
		<script type="text/javascript">
		alert('Data Not Updated');
		</script>
		<?php
	}
	// sql query execution function
}
if(isset($_POST['btn-cancel']))
{
	header("Location: as1.php");
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
		<button class="dropbtn"> Dashboard </button>
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


							<!-- Body content -->


<div id="body">
	<div class="container" style="padding-left:180px;" >

		<form method="post" class="form-horizontal">
			<div class="form-group" style="margin-top: 20px;">
				<a class="btn btn-default btn-block" href="at1.php"> Back to Student Page</a>
			</div>
			<div class="form-group">
				<label for="Name"> Name: </label>
				<input class="form-control" type="text" id="Name" name="name" placeholder="Name" value="<?php echo $fetched_row['name']; ?>" required/>
			</div>
			<div class="form-group">
				<label for="Gender">Gender: </label>
				<input class="form-control" type="text" id="Gender" name="gender" placeholder="Gender" value="<?php echo $fetched_row['gender']; ?>"  />
			</div>
			<div class="form-group">
				<label for="Contact">Contact: </label>
				<input class="form-control" type="text" id="Contact" name="contact" placeholder="Contact" value="<?php echo $fetched_row['contact']; ?>" required />
			</div>
			<div class="form-group">
				<label for="Batch">Batch: </label>
				<input class="form-control" type="text" id="Batch" name="batch" placeholder="Batch" value="<?php echo $fetched_row['batch']; ?>" required />
			</div>
			<div class="form-group">
				<label for="Address">Address: </label>
				<input class="form-control" type="text" id="Address" name="address" placeholder="Address" value="<?php echo $fetched_row['address']; ?>"  required/>
			</div>
			<div class="form-group">
				<label for="Semester">Semester: </label>
				<input class="form-control" type="text" id="Semester" name="semester" placeholder="Semester" value="<?php echo $fetched_row['semester']; ?>" required />
			</div>
			<div class="form-group">
				<label for="Degree">Degree: </label>
				<input class="form-control" type="text" id="Degree" name="degree" placeholder="Degree" value="<?php echo $fetched_row['degree']; ?>" required />
			</div>
			<div class="form-group">
				<label for="Department">Password: </label>
				<input class="form-control" type="password" id="Password" name="password" placeholder="Password" value="<?php echo $fetched_row['password']; ?>" required />
			</div>
			<div class="form-group">
				<button type="submit" name="btn-update" class="btn btn-primary btn-block">Update</button>
			</div>
			<div class="form-group">
				<button type="submit" name="btn-cancel" class="btn btn-primary btn-block">Cancel</button>
			</div>
			
	    </form>
    </div>
</div>

</body>
</html>

