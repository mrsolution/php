<html>
<head>

<script>

setInterval(function(){myTimer()},1000);
var inter;
var totaltime;
var h = 0;
var m = 0;
var s = 0;

function myTimer()
{
	var d = new Date();
  	document.getElementById("time").innerHTML = d.toLocaleTimeString();
}
function starttimer()
{

	inter = setInterval(function(){Timer()},1000);

	function Timer()
	{
		s = s +1;
		if (s == 60)
		{
			s = 0;
			m = m+1;
		}
		if (m == 60)
		{
			h = h + 1;
			s = 0;
			m = 0;
		}
		totaltime = h+":"+m+":"+s;
	  	document.getElementById("timer").innerHTML = h+":"+m+":"+s;
	}
}
function stoptimer()
{
  	document.getElementById("totaltime").innerHTML = "Total Time " + totaltime;
	clearInterval(inter);
}


</script>

</head>
<body>
<h1></h1>
<p id="time"></p>
<h2 id="timer"></h2>
<p id="totaltime"></p>
<input type="button" value="start timer" onclick="starttimer();">
<input type="button" value="stop timer" onclick="stoptimer();">
</body>
</html>
