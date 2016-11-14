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
	document.getElementById('exam').style.display="block";
	var x = document.getElementById('startbutton');
	x.style.display="none";
	$( "#startbutton" ).remove();
}