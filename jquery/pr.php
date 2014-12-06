<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style>
.container{
    width: 300px;
    border: 1px solid #ddd;
    border-radius: 5px; 
    overflow: hidden;
    display:inline-block;
    margin:0px 10px 5px 5px;
    vertical-align:top;
	}
	.progressbar {
    color: #fff;
    text-align: right;
    height: 25px;
    width: 0;
    background-color: #0ba1b5; 
    border-radius: 3px; 
}


</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js">
function setProgress(progress)
{           
    var progressBarWidth =progress*$(".container").width()/ 100;  
    $(".progressbar").width(progressBarWidth).html(progress + "% ");
}
</script>
<div class="container">
</div>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
