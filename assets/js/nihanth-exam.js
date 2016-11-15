function countdown(sec){
		var min = sec/60;
		var sec1 = sec%60;
		var time = Math.floor(min) + ":" + sec1;
		 document.getElementById('timeout').innerHTML=time;
		 sec--;
		 if(sec>=0)
			{
				var timer = setTimeout('countdown('+sec+')',995);
			}
		 else{
			 clearTimeout(timer);
			 document.getElementById('timeout').innerHTML="Time Out";
			 alert("Please Save The Exam within 20 Seconds and Logout. Else your test will not be valid.");
			 setTimeout(timeout,3000);
		 }
		}
	function timeout(){
		alert("Working");
	}

function gettime(){
	var t = document.getElementById('time').innerHTML;
	countdown(t*60);
}

function startexam(){
	$("#exam").show();
	$( "#startbutton" ).remove();
	q1();
}
function q1(){
	$("#q1").show();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q20;
	document.getElementById("next").onclick= q2;
}
function q2(){
	$("#q1").hide();
	$("#q2").show();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q1;
	document.getElementById("next").onclick= q3;
}
function q3(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").show();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q2;
	document.getElementById("next").onclick= q4;
}
function q4(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").show();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q3;
	document.getElementById("next").onclick= q5;
}
function q5(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").show();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q4;
	document.getElementById("next").onclick= q6;
}
function q6(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").show();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q5;
	document.getElementById("next").onclick= q7;
}
function q7(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").show();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q6;
	document.getElementById("next").onclick= q8;
}
function q8(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").show();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q7;
	document.getElementById("next").onclick= q9;
}
function q9(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").show();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q8;
	document.getElementById("next").onclick= q10;
}
function q10(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").show();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q9;
	document.getElementById("next").onclick= q11;
}
function q11(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").show();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q10;
	document.getElementById("next").onclick= q12;
}function q12(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").show();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q11;
	document.getElementById("next").onclick= q13;
}
function q13(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").show();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q12;
	document.getElementById("next").onclick= q14;
}
function q14(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").show();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q13;
	document.getElementById("next").onclick= q15;
}
function q15(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").show();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q14;
	document.getElementById("next").onclick= q16;
}
function q16(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").show();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q15;
	document.getElementById("next").onclick= q17;
}
function q17(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").show();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q16;
	document.getElementById("next").onclick= q18;
}
function q18(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").show();
	$("#q19").hide();
	$("#q20").hide();
	document.getElementById("prev").onclick= q17;
	document.getElementById("next").onclick= q19;
}
function q19(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").show();
	$("#q20").hide();
	document.getElementById("prev").onclick= q18;
	document.getElementById("next").onclick= q20;
}
function q20(){
	$("#q1").hide();
	$("#q2").hide();
	$("#q3").hide();
	$("#q4").hide();
	$("#q5").hide();
	$("#q6").hide();
	$("#q7").hide();
	$("#q8").hide();
	$("#q9").hide();
	$("#q10").hide();
	$("#q11").hide();
	$("#q12").hide();
	$("#q13").hide();
	$("#q14").hide();
	$("#q15").hide();
	$("#q16").hide();
	$("#q17").hide();
	$("#q18").hide();
	$("#q19").hide();
	$("#q20").show();
	document.getElementById("prev").onclick= q19;
	document.getElementById("next").onclick= q1;
}