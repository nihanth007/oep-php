<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Online Exam Portal</title>
<link rel="shortcut icon" href="favicon.ico" >
<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/nihanth.css">
<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.min.css">
<script src="assets/js/jquery-3.1.1.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/tether.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script async src="assets/js/nihanth.js"></script>
<script src="assets/js/nihanth-exam.js"></script>

</head>


<?php

			$username=$_POST["username"];
			$password=$_POST["password"];
			$db = @new mysqli('127.0.0.1', 'oep', 'gietoep', 'oep');
				if ($db->connect_error) {
					die('Connect Error: ' . $db->connect_error);
				}
			$sql = 'select * from students where pin="'.$username.'"';
			if($res = $db->query($sql))
			{
				$result = $res->fetch_row();
			}
			else
			{
				echo("Unable to get Details");
				$db->connect_error;
			}

		?>	





<body >
  <nav role="navigation" class="navbar navbar-fixed-top navbar-light bg-faded" style="background-color:#D1CEE9">
  <a class="navbar-brand" href="#">
    <img src="/assets/images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="GIET">
    Online Exam Portal
  </a>
   <ul class="nav navbar-nav float-md-right">
    <li class="nav-item">
      <a class="nav-link" href="#" onclick="instructions('students')">Instructions</a>
    </li>
    <li class="nav-item">
      <h5 class="nav-link" href="#" >Time Left :<span id="timeout"> mm:ss</span></h5>
    </li>
    <li class="nav-item">
      <a class="nav-link"  onclick="if(confirm('If you click OK your test will be submitted and you will be Logged Out')){window.location.href ='index.html';}" href="#" >Logout</a>
    </li>
  </ul>
</nav>
<div class="container row" style="padding-top:54px;height:100%;">
<div class="col-lg-4" style="background-color:lavender;padding-top:15px;height:100%;">
    <p>Name: <?php echo $result[1]; ?></p>
    <p>PIN number: <?php echo($result[0]); ?></p>
    <p>Course: B.Tech - <?php echo($result[2]); ?></p>
    <hr />
	<p>Exam : <?php ?></p>
	<p>Max Time : <span id="time" >20</span> Min</p>
	<hr />
	<img alt="Go to this Question" src="assets/numbers/1.png" />
	<img alt="Go to this Question" src="assets/numbers/2.png" />
	<img alt="Go to this Question" src="assets/numbers/3.png" />
	<img alt="Go to this Question" src="assets/numbers/4.png" />
	<img alt="Go to this Question" src="assets/numbers/5.png" />
	<br />
	<img alt="Go to this Question" src="assets/numbers/6.png" />
	<img alt="Go to this Question" src="assets/numbers/7.png" />
	<img alt="Go to this Question" src="assets/numbers/8.png" />
	<img alt="Go to this Question" src="assets/numbers/9.png" />
	<img alt="Go to this Question" src="assets/numbers/10.png" />
	<br />
	<img alt="Go to this Question" src="assets/numbers/11.png" />
	<img alt="Go to this Question" src="assets/numbers/12.png" />
	<img alt="Go to this Question" src="assets/numbers/13.png" />
	<img alt="Go to this Question" src="assets/numbers/14.png" />
	<img alt="Go to this Question" src="assets/numbers/15.png" />
	<br />
	<img alt="Go to this Question" src="assets/numbers/16.png" />
	<img alt="Go to this Question" src="assets/numbers/17.png" />
	<img alt="Go to this Question" src="assets/numbers/18.png" />
	<img alt="Go to this Question" src="assets/numbers/19.png" />
	<img alt="Go to this Question" src="assets/numbers/20.png" />
	<br />
	<hr />
	<button style=" align-self:stretch;" onclick="if(confirm('If you click OK your test will be submitted and you will be Logged Out')){window.location.href ='index.html';}" class="btn btn-success btn-block">Submit Exam</button>
	<hr />
</div>


<div class="col-lg-8">

	<div class="row">
	<div class="col-lg-12">
		<button id="startbutton" style=" align-self:stretch;" class="btn btn-success btn-block" onClick="gettime();startexam();">Start Test</button>
		
		<div class="container" id="exam" style="display: none;">
			Hello This is the question paper
		</div>
	
	</div>
	</div>
	
</div>
    
</div>

</body>
</html>