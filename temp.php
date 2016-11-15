<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Online Exam Portal</title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/nihanth.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fontawesome/css/font-awesome.min.css">
	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/tether.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/js/nihanth.js"></script>
	<script async src="assets/js/nihanth-exam.js"></script>

</head>


<?php

$username = $_POST[ "username" ];
$password = $_POST[ "password" ];
$db = @new mysqli( '127.0.0.1', 'oep', 'gietoep', 'oep' );
if ( $db->connect_error ) {
	die( 'Connect Error: ' . $db->connect_error );
}
$sql = 'select * from students where pin="' . $username . '"';
if ( $res = $db->query( $sql ) ) {
	$result = $res->fetch_row();
} else {
	echo( "Unable to get Details" );
	$db->connect_error;
}

?>





<body>
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
				<h5 class="nav-link" href="#">Time Left :<span id="timeout"> mm:ss</span></h5>
			</li>
			<li class="nav-item">
				<a class="nav-link" onclick="if(confirm('If you click OK your test will be submitted and you will be Logged Out')){window.location.href ='index.html';}" href="#">Logout</a>
			</li>
		</ul>
	</nav>
	<div class="container row" style="padding-top:54px;height:100%;">
		<div class="col-lg-4" style="background-color:lavender;padding-top:15px;height:100%;">
			<p>Name:
				<?php echo $result[1]; ?>
			</p>
			<p>PIN number:
				<?php echo($result[0]); ?>
			</p>
			<p>Course: B.Tech -
				<?php echo($result[2]); ?>
			</p>
			<hr/>
			<p>Exam :
				<?php ?>
			</p>
			<p>Max Time : <span id="time">20</span> Min</p>
			<hr/>
			<img alt="Go to this Question" onClick="q1()" src="assets/numbers/1.png"/>
			<img alt="Go to this Question" onClick="q2()" src="assets/numbers/2.png"/>
			<img alt="Go to this Question" onClick="q3()" src="assets/numbers/3.png"/>
			<img alt="Go to this Question" onClick="q4()" src="assets/numbers/4.png"/>
			<img alt="Go to this Question" onClick="q5()" src="assets/numbers/5.png"/>
			<br/>
			<img alt="Go to this Question" onClick="q6()" src="assets/numbers/6.png"/>
			<img alt="Go to this Question" onClick="q7()" src="assets/numbers/7.png"/>
			<img alt="Go to this Question" onClick="q8()" src="assets/numbers/8.png"/>
			<img alt="Go to this Question" onClick="q9()" src="assets/numbers/9.png"/>
			<img alt="Go to this Question" onClick="q10()" src="assets/numbers/10.png"/>
			<br/>
			<img alt="Go to this Question" onClick="q11()" src="assets/numbers/11.png"/>
			<img alt="Go to this Question" onClick="q12()" src="assets/numbers/12.png"/>
			<img alt="Go to this Question" onClick="q13()" src="assets/numbers/13.png"/>
			<img alt="Go to this Question" onClick="q14()" src="assets/numbers/14.png"/>
			<img alt="Go to this Question" onClick="q15()" src="assets/numbers/15.png"/>
			<br/>
			<img alt="Go to this Question" onClick="q16()" src="assets/numbers/16.png"/>
			<img alt="Go to this Question" onClick="q17()" src="assets/numbers/17.png"/>
			<img alt="Go to this Question" onClick="q18()" src="assets/numbers/18.png"/>
			<img alt="Go to this Question" onClick="q19()" src="assets/numbers/19.png"/>
			<img alt="Go to this Question" onClick="q20()" src="assets/numbers/20.png"/>
			<br/>
			<hr/>
			<button style=" align-self:stretch;" onclick="if(confirm('If you click OK your test will be submitted and you will be Logged Out')){$('#exam').submit();}" class="btn btn-success btn-block">Submit Exam</button>
			<hr/>
		</div>


		<div class="col-lg-8">

			<div class="row">
				<div class="col-lg-12">
				<div  id="startbutton">
					<button style=" align-self:stretch;" class="btn btn-success btn-block" onClick="gettime();startexam();">Start Test</button>
					<?php 
						$i = 0; 
						while($i<10){
							$r[$i] = mt_rand ($i*10,($i*10)+10); 
							$i++;
						}
					if($r[0]==0){
						$r[0]=1;
					}
					echo 'The Questions Selected for You are <br>';
					$i=0;
					while($i<10){
						echo $r[$i];
						echo '<br>';
						$i++;
					}
					?>
					</div>
					<form action="submit.php" method="get" class="container" id="exam" style="display: none;">
						<div id="q1" class="fb-radio form-group field-q1">
							<label for="q1" class="fb-radio-group-label">Question Number 1 </label>
							<div id="question1"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q1" id="q1-0" type="radio">
								<label for="q1-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q1" id="q1-1" type="radio">
								<label for="q1-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q1" id="q1-2" type="radio">
								<label for="q1-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q1" id="q1-3" type="radio">
								<label for="q1-3">Option 4</label>
								<br>
							</div>
						</div>


						<div id="q2" class="fb-radio form-group field-q2">
							<label for="q2" class="fb-radio-group-label">Question Number 2 </label>
							<div id="question2"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q2" id="q2-0" type="radio">
								<label for="q2-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q2" id="q2-1" type="radio">
								<label for="q2-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q2" id="q2-2" type="radio">
								<label for="q2-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q2" id="q2-3" type="radio">
								<label for="q2-3">Option 4</label>
								<br>
							</div>
						</div>
						<div id="q3" class="fb-radio form-group field-q3">
							<label for="q3" class="fb-radio-group-label">Question Number 3 </label>
							<div id="question3"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q3" id="q3-0" type="radio">
								<label for="q3-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q3" id="q3-1" type="radio">
								<label for="q3-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q3" id="q3-2" type="radio">
								<label for="q3-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q3" id="q3-3" type="radio">
								<label for="q3-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q4" class="fb-radio form-group field-q4">
							<label for="q4" class="fb-radio-group-label">Question Number 4 </label>
							<div id="question4"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q4" id="q4-0" type="radio">
								<label for="q4-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q4" id="q4-1" type="radio">
								<label for="q4-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q4" id="q4-2" type="radio">
								<label for="q4-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q4" id="q4-3" type="radio">
								<label for="q4-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q5" class="fb-radio form-group field-q5">
							<label for="q5" class="fb-radio-group-label">Question Number 5 </label>
							<div id="question5"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q5" id="q5-0" type="radio">
								<label for="q5-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q5" id="q5-1" type="radio">
								<label for="q5-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q5" id="q5-2" type="radio">
								<label for="q5-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q5" id="q5-3" type="radio">
								<label for="q5-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q6" class="fb-radio form-group field-q6">
							<label for="q6" class="fb-radio-group-label">Question Number 6 </label>
							<div id="question6"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q6" id="q6-0" type="radio">
								<label for="q6-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q6" id="q6-1" type="radio">
								<label for="q6-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q6" id="q6-2" type="radio">
								<label for="q6-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q6" id="q6-3" type="radio">
								<label for="q6-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q7" class="fb-radio form-group field-q7">
							<label for="q7" class="fb-radio-group-label">Question Number 7 </label>
							<div id="question7"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q7" id="q7-0" type="radio">
								<label for="q7-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q7" id="q7-1" type="radio">
								<label for="q7-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q7" id="q7-2" type="radio">
								<label for="q7-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q7" id="q7-3" type="radio">
								<label for="q7-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q8" class="fb-radio form-group field-q8">
							<label for="q8" class="fb-radio-group-label">Question Number 8 </label>
							<div id="question8"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q8" id="q8-0" type="radio">
								<label for="q8-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q8" id="q8-1" type="radio">
								<label for="q8-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q8" id="q8-2" type="radio">
								<label for="q8-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q8" id="q8-3" type="radio">
								<label for="q8-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q9" class="fb-radio form-group field-q9">
							<label for="q9" class="fb-radio-group-label">Question Number 9 </label>
							<div id="question9"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q9" id="q9-0" type="radio">
								<label for="q9-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q9" id="q9-1" type="radio">
								<label for="q9-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q9" id="q9-2" type="radio">
								<label for="q9-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q9" id="q9-3" type="radio">
								<label for="q9-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q10" class="fb-radio form-group field-q10">
							<label for="q10" class="fb-radio-group-label">Question Number 10 </label>
							<div id="question10"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q10" id="q10-0" type="radio">
								<label for="q10-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q10" id="q10-1" type="radio">
								<label for="q10-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q10" id="q10-2" type="radio">
								<label for="q10-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q10" id="q10-3" type="radio">
								<label for="q10-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q11" class="fb-radio form-group field-q11">
							<label for="q11" class="fb-radio-group-label">Question Number 11 </label>
							<div id="question11"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q11" id="q11-0" type="radio">
								<label for="q11-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q11" id="q11-1" type="radio">
								<label for="q11-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q11" id="q11-2" type="radio">
								<label for="q11-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q11" id="q11-3" type="radio">
								<label for="q11-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q12" class="fb-radio form-group field-q12">
							<label for="q12" class="fb-radio-group-label">Question Number 12 </label>
							<div id="question12"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q12" id="q12-0" type="radio">
								<label for="q12-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q12" id="q12-1" type="radio">
								<label for="q12-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q12" id="q12-2" type="radio">
								<label for="q12-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q12" id="q12-3" type="radio">
								<label for="q12-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q13" class="fb-radio form-group field-q13">
							<label for="q13" class="fb-radio-group-label">Question Number 13 </label>
							<div id="question13"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q13" id="q13-0" type="radio">
								<label for="q13-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q13" id="q13-1" type="radio">
								<label for="q13-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q13" id="q13-2" type="radio">
								<label for="q13-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q13" id="q13-3" type="radio">
								<label for="q13-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q14" class="fb-radio form-group field-q14">
							<label for="q14" class="fb-radio-group-label">Question Number 14 </label>
							<div id="question14"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q14" id="q14-0" type="radio">
								<label for="q14-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q14" id="q14-1" type="radio">
								<label for="q14-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q14" id="q14-2" type="radio">
								<label for="q14-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q14" id="q14-3" type="radio">
								<label for="q14-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q15" class="fb-radio form-group field-q15">
							<label for="q15" class="fb-radio-group-label">Question Number 15 </label>
							<div id="question15"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q15" id="q15-0" type="radio">
								<label for="q15-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q15" id="q15-1" type="radio">
								<label for="q15-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q15" id="q15-2" type="radio">
								<label for="q15-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q15" id="q15-3" type="radio">
								<label for="q15-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q16" class="fb-radio form-group field-q16">
							<label for="q16" class="fb-radio-group-label">Question Number 16 </label>
							<div id="question16"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q16" id="q16-0" type="radio">
								<label for="q16-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q16" id="q16-1" type="radio">
								<label for="q16-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q16" id="q16-2" type="radio">
								<label for="q16-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q16" id="q16-3" type="radio">
								<label for="q16-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q17" class="fb-radio form-group field-q17">
							<label for="q17" class="fb-radio-group-label">Question Number 17 </label>
							<div id="question17"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q17" id="q17-0" type="radio">
								<label for="q17-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q17" id="q17-1" type="radio">
								<label for="q17-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q17" id="q17-2" type="radio">
								<label for="q17-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q17" id="q17-3" type="radio">
								<label for="q17-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q18" class="fb-radio form-group field-q18">
							<label for="q18" class="fb-radio-group-label">Question Number 18 </label>
							<div id="question18"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q18" id="q18-0" type="radio">
								<label for="q18-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q18" id="q18-1" type="radio">
								<label for="q18-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q18" id="q18-2" type="radio">
								<label for="q18-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q18" id="q18-3" type="radio">
								<label for="q18-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q19" class="fb-radio form-group field-q19">
							<label for="q19" class="fb-radio-group-label">Question Number 19 </label>
							<div id="question19"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q19" id="q19-0" type="radio">
								<label for="q19-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q19" id="q19-1" type="radio">
								<label for="q19-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q19" id="q19-2" type="radio">
								<label for="q19-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q19" id="q19-3" type="radio">
								<label for="q19-3">Option 4</label>
								<br>
							</div>
						</div>

						<div id="q20" class="fb-radio form-group field-q20">
							<label for="q20" class="fb-radio-group-label">Question Number 20 </label>
							<div id="question20"></div>
							<div class="radio-group">
								<input value="1" class="radio-group" name="q20" id="q20-0" type="radio">
								<label for="q20-0">Option 1</label>
								<br>
								<input value="2" class="radio-group" name="q20" id="q20-1" type="radio">
								<label for="q20-1">Option 2</label>
								<br>
								<input value="3" class="radio-group" name="q20" id="q20-2" type="radio">
								<label for="q20-2">Option 3</label>
								<br>
								<input value="4" class="radio-group" name="q20" id="q20-3" type="radio">
								<label for="q20-3">Option 4</label>
								<br>
							</div>
						</div>
						<div class="container-fluid">
							<a id="prev" onClick="" class="btn btn-outline-primary">Previous</a>
							<a id="next" onClick="" class="btn btn-outline-primary">Next</a>
						</div>
					</form>

				</div>
			</div>

		</div>

	</div>

</body>

</html>