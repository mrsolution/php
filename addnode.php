<!DOCTYPE html>
<html>
<head>
<script src="jquery.min.js">
</script>
<script>
$(document).ready(function(){
  $("#chk").change(function(){
    $("#gani").append("<input type='text'>");
  });
});
</script>
</head>
<body>

<div id='addnode'></div>

<input type="checkbox" id="chk" value="chk"> appendd 

<div id="gani"></div>
</body>
</html>