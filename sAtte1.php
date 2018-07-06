<?php 
include("dbconfig.php");
include("s_auth.php");
include("header.php");
$usn= $_SESSION['susername'];

$sql_query="SELECT * FROM student where username='$usn'";
$result_set=mysqli_query($con, $sql_query);
if(mysqli_num_rows($result_set)>0)
{
    while($row=mysqli_fetch_row($result_set))
	{
		$_SESSION['sid']= $row[0];
		$_SESSION['name']= $row[1];

	
	}
}
$new = $_SESSION['sid'];
$name = $_SESSION['name'];

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
	  	<a style="font-size: 16px;" href="sAssi1.php">View Assignments</a>
	  </div>
	</div>


</div>
	
	
	<!-- Page content -->
	<div id="main" style="margin-left: 180px;">
		<h2>AtendanceDetails</h2>

		<div class="table-responsive text-center" style="padding-right: 45px;">
			<h3 class="text-center">Student Name: <?php echo $name; ?></h3>
			<table class="table table-hover table-bordered text-center">
			    <th class="text-center">StudentID</th>
			    <th class="text-center">CourseID</th>
			    <th class="text-center">Date</th>
			    <th class="text-center">Status</th>
			    </tr>
			    <?php
				$sql_query="SELECT * FROM attendance where sid='$new'";
				$result_set=mysqli_query($con, $sql_query);
				if(mysqli_num_rows($result_set)>0)
				{
			        while($row=mysqli_fetch_row($result_set))
					{
					?>
			            <tr>
			            <td><?php echo $row[1]; ?></td>
			            <td><?php echo $row[2]; ?></td>
			            <td><?php echo $row[3]; ?></td>
			            <td><?php echo $row[4]; ?></td>
			            </tr>
			        <?php
					}
				}
				else
				{
					?>
			        <tr>
			        <td colspan="5">No Data Found !</td>
			        </tr>
			        <?php
				}
				?>
		    </table>
			
		</div>


		<div>
					
		</div>
	</div>

</body>
</html>

