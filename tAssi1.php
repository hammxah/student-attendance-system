<?php 
include("dbconfig.php");
include("t_auth.php");
include("header.php");

if(isset($_GET['delete_id']))
{
	$sql_query="DELETE FROM assignment WHERE id=".$_GET['delete_id'];
	mysqli_query($con, $sql_query);
	header("Location: $_SERVER[PHP_SELF]");
}
// delete condition

?>

<!DOCTYPE html>
<html>
<head>
	<title>Teacher</title>

<script type="text/javascript">
function delete_id(id)
{
	if(confirm('Sure to Delete ?'))
	{
		window.location.href='tAssi1.php?delete_id='+id;
	}
}
</script>
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
	  	<a style="font-size: 16px;" href="tdashboard.php">Dashboard</a>
	  </div>
	</div>


		<!-- Attendance -->

	<div class="dropdown">
	  <button class="dropbtn">Attendance</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="add_tAtte1.php">Add Attendance</a>
	  	<a style="font-size: 16px;" href="tAtte1.php">View Attendance</a>
	  </div>
	</div>

		<!-- Assignment -->

	<div class="dropdown">
	  <button class="dropbtn">Assignment</button>
	  <div class="dropdown-content" >
	  	<a style="font-size: 16px;" href="add_tAssi1.php">Add Assignment</a>
	  	<a style="font-size: 16px;" href="tAssi1.php">View Assignments</a>
	  </div>
	</div>


</div>
	
	
	<!-- Page content -->
	<div id="main" style="margin-left: 180px;">
		<h2>Attendance</h2>

		<div class="table-responsive text-center" style="padding-right: 45px;">
			<table class="table table-hover table-bordered text-center">
			    <th class="text-center">CourseID</th>
			    <th class="text-center">Topic</th>
			    <th class="text-center">Due Date</th>
			    <th class="text-center">Assignment</th>
			    <th class="text-center">Operation</th>
			    </tr>
			    <?php
				$sql_query="SELECT * FROM assignment";
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
			            <td align="center"><a href="javascript:delete_id('<?php echo $row[0]; ?>')"><i class="glyphicon glyphicon-remove"></i></a></td>
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



