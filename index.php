<?php 
	include "dbconfig.php";
	include "header.php";


	session_start();
	// if(empty($_SESSION['username'])) {
	//  echo 'incorrect username/ password please try again.' ;
	// }

	if(isset($_POST['username'])){
		$un = $_POST['username'];
		$pw = $_POST['password'];
		$type = $_POST['type'];

		if($type=='Student'){
			$q ="select * from student where username='$un' && password='$pw'";
			$result = mysqli_query($con ,$q);
			if(!$result){
				?>
				<script>alert("Error");</script>
				<?php
			}
			$row = mysqli_num_rows($result);

			if($row==1){
				$_SESSION['susername'] = $un;
				header("Location: sdashboard.php");
			} else {
	    		?> 
	    		<script>
	    			alert("incorrect username/password, please try again...");
	    		</script>
	    		<?php
	    		header("refresh:0.01;url=index.php");
	    	} 
		} else if($type=='Teacher'){
				$q ="select * from teacher where username='$un' && password='$pw'";
				$result = mysqli_query($con ,$q);
				if(!$result){
					?>
					<script>alert("Error");</script>
					<?php
				}
					$row = mysqli_num_rows($result);

				if($row==1){
					$_SESSION['tusername'] = $un;
					header("Location: tdashboard.php");
				} else {
	    		?> 
		    		<script>
		    			alert("incorrect username/password, please try again...");
		    		</script>
		    		<?php
		    		header("refresh:0.01;url=index.php");
		    	} 
			} else if($type=='Admin'){
				$q ="select * from admin where username='$un' && password='$pw'";
				$result = mysqli_query($con ,$q);
				if(!$result){
					?>
					<script>alert("Error");</script>
					<?php
				}
					$row = mysqli_num_rows($result);

				if($row==1){
					$_SESSION['ausername'] = $un;
					header("Location: adashboard.php");
				} else {
	    		?> 
		    		<script>
		    			alert("incorrect username/password, please try again...");
		    		</script>
		    		<?php
		    		header("refresh:0.01;url=index.php");
		    	} 
	    	}
	   } else {
 ?>

 <script>
 	
$(document).ready(function(){
		$(document).on('click', 'a[href^="#"]', function (event) {
		    event.preventDefault();

		    $('html, body').animate({
		        scrollTop: $($.attr(this, 'href')).offset().top
		    }, 1000);
		});
	});


$(document).ready(function(){
	    $("[data-toggle=popover]").popover({
		    html: true, 
			content: function() {
		          return $('#popover-content').html();
		        }
		});

	});
 </script>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">

	<title>Home: SMS</title>
</head>
<body style="background: url('bg51.png')no-repeat center center fixed;">
	<nav class="navbar navbar-default" style="margin-bottom: 0px" id="top">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Student Management System</a>
	    </div>
	    <ul class="nav navbar-nav topnav myTopnav">
	      <li><a href="#index-outer" class="anchorLink">Home</a></li>
	      <li><a href="#about-outer" rel="scroll" id="anchor1" class="anchorLink">About</a></li>
	      <li><a href="#event-outer" rel="scroll" id="anchor1" class="anchorLink">Events</a></li>
	      <li><a href="#contact-outer" rel="scroll" id="anchor1" class="anchorLink">Contact</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right list-unstyled">
		    <li>
		    	<a href="#" data-toggle="popover" data-title="Login" data-placement="left" data-container="body" id="login" data-html="true" type="button"><span class="glyphicon glyphicon-log-in"></span> Login </a></li>
			<div id="popover-content" class="hide">
		      <form class="form-inline" role="form" action="index.php" method="post">
		      	<div class="input-group">
		        	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		        	<input id="username" type="text" class="form-control" name="username" placeholder="Username" required>
    			</div><br>
			    <div class="input-group">
			      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
			      <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
			    </div><br>
				 <div class="input-group" style="margin-top: 8px;" >
			    	<label for="stype">Select account type:</label>
			    	<select class="form-control" id="type"  name="type" required>
			            <option>Student</option>
			            <option>Teacher</option>
			            <option>Admin</option>
			        </select>
			    </div><br>
			    <div class="form-group" style="margin-top: 8px;">
					<button class="btn btn-primary" name="submit" type="submit">Login</button>
				</div>	
		      </form>
		    </div>
	    </ul>
	  </div>
	</nav>
	<marquee style="margin-bottom:-6px" bgcolor="#f8f8f8" scrollamount="9" height="30"> Welcome to Student Management System</marquee>



	<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img src="0.png" alt="StudentManagementSystem" style="width:100%;" >
			</div>
			<div class="item">
				<img src="2.png" alt="StudentManagementSystem" style="width:100%;">
			</div>
			<div class="item">
				<img src="3.png" alt="StudentManagementSystem" style="width:100%;">
			</div>
			<div class="item">
				<img src="4.png" alt="StudentManagementSystem" style="width:100%;">
			</div>
		</div>
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>


		<!--Home  -->

			
			<div id="info-outer" style="background-color: #d0c1b3; width: 100%; ">
				<h2 style="padding-left: 30px; margin-bottom: 10px;margin-top: 0px; padding-top:10px; " id="heading">STUDENT LIFE</h2>
				<div style="width: 100%;  padding:0px 20px 20px 20px;" id="info-inner">
					<div style="float: left;margin: 0 auto; width: 32%;  padding: 2%; background-color: #dbd3cc;">
						"Student life is the period of education. Education is the all round development of an individual into a useful member of society. We must see that student life is full-filling this aim. The success or failure of student-life can be judged by the students life. We must see that student life is full-filling this aim. Unfortunately for us, student life in our country is not receiving the right amount of attention that it deserves. We hope things will take proper shape now."
					</div>	
					<div style="float: right;margin: 0 auto; width: 32%; padding: 2%; background-color: #dbd3cc;">
						"Student life is the period of education. Education is the all round development of an individual into a useful member of society. We must see that student life is full-filling this aim. The success or failure of student-life can be judged by the students life. We must see that student life is full-filling this aim. Unfortunately for us, student life in our country is not receiving the right amount of attention that it deserves. We hope things will take proper shape now."
					</div>
					<div style="float: none;margin: 0 auto; width: 32%; padding: 2%; background-color: #dbd3cc;">
						"Student life is the period of education. Education is the all round development of an individual into a useful member of society. We must see that student life is full-filling this aim. The success or failure of student-life can be judged by the students life. We must see that student life is full-filling this aim. Unfortunately for us, student life in our country is not receiving the right amount of attention that it deserves. We hope things will take proper shape now."
					</div>
				</div>
			</div>


		<!--About  -->
	<div id="about-outer" style="background-color: #9bdaf3;">
		<h2 name="myAnchor" id="myAnchor heading" style="padding-left: 30px; margin:0px; margin-bottom: 10px;padding-top:10px">ABOUT</h2>		
		<div  style="width: 100%; padding:0px 20px 20px 20px;" id="about inner" >
			<img src="11.jpg" style="float: right;height: 250px;width: 400px;  padding: 2%;">
			<p style="padding: 2%; background-color: #cfedfb;" >
				The University of Lahore believes in delivering excellence in research and learning. Our ability to add to your academic and social skills will allow you to lead in your professional career. We aim to create high-quality graduates who are practically skilled to enter the world of work. The University of Lahore is recognised as the largest private sector university of Pakistan, and there is no better time to join the university when it is expanding internationally with campuses and networks being developed across the world.<br> We believe in commercialisation and entrepreneurship and have invested in the establishment of enterprises in order to ensure that our students gain hands-on experience that actually matters for graduating students. Our academic standards are high and we believe in encouraging independent thought driven by creativity and critical insight. You will experience our faculty that is one of the best in Pakistan and believe in research and expression in academic terms.<br> The experience at a university for a student is not only driven by the excellence in academics and research but the entire experience of being involved in the projects that the university takes on, as well as the experiences that a student gains outside the classroom. We have extensive activities ranging from sports to cultural events, media and society events etc that keep you engaged and entertained across the year. The University of Lahore has now expanded internationally with its first move to Uganda providing support to setup a medical school. We believe that internationalisation is an important step towards ensuring that experiences are shared both academically and intellectually.<br> We also have the largest international community in a private sector university with students from 15 different countries currently enrolled with us. We provide extensive support to our students including preparing for career, mentoring, personal and financial support. Your success at The University of Lahore will be the measure of our success in delivering high quality education. I look forward to welcoming you to The University of Lahore.
			</p>
			
		</div>
	</div>		

	<!--Events  -->
<div id="event-outer" style="background-color: #d0c1b3; width: 100%; height: 200px;">
	<h2 id="heading" style="padding-left: 30px; margin-bottom: 10px;margin-top: 0px; padding-top:10px; ">EVENTS</h2>
    <div id="event inner " style="width: 100%; height: 90%; padding:0px 20px 50px 20px;">
    	<img src="00.jpg" style="float: right;height: 100px; width: 250px; padding:10px; ">
        	<p style=" padding: 2%; background-color: #dbd3cc;">
    		The most awaited event is just here "LOK MELA '17"
			This lok mela carries so many fun activities for you like food stalls, games, cultural performances, live<br> musical concert, dramas, rampwalk and much more. <br>

    		The event will end with beautiful sky lanterns.
			Be a part of the most colorful mega event of UOL in cultural dress.
			Mega Event of the University organized by Arts and culture society with collaboration of All other societies.
			<br>
    	</p>
    </div>
</div>




<!--Contact  -->
<!-- <div id="contact-outer" style="background-color: white;">
	<div class="text-center">
		<ul>
			<li></li>
			<li><i class="glyphicon glyphicon-pushpin"></i> Khayaban-e-Johar Road, Islamabad.</li>
			<li><i class="glyphicon glyphicon-phone"></i> Phone: +92-42-35880007</li>
			<li><i class="glyphicon glyphicon-print"></i> Fax: +92-42-35954892</li>
			<li><i class="glyphicon glyphicon-envelope"></i> Email: info@sms.edu.pk</li>
		</ul>
	</div>		
</div> -->

<div id="contact-outer" style="background-color: white; ">
	<div  style="width: 100%">
		<ul style="list-style: none;display: inline-flex; margin-left: 9%;" >
			<li style="left:0; margin-left: 20px; margin-right: 20px;"><i class="glyphicon glyphicon-pushpin"></i> Khayaban-e-Johar Road, Islamabad.</li>
			<li style="margin-left: 20px; margin-right: 20px;"><i class="glyphicon glyphicon-phone"></i> Phone: +92-42-35880007</li>
			<li style="margin-left: 20px; margin-right: 20px;"><i class="glyphicon glyphicon-print"></i> Fax: +92-42-35954892</li>
			<li style="margin-left: 20px; margin-right: 20px; right: 0;"><i class="glyphicon glyphicon-envelope"></i> Email: info@sms.edu.pk</li>
		</ul>
	</div>
	
	
</div>


<?php 
	include "footer.php";

} ?>	

</body>
</html>