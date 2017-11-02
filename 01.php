<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>

	<div id="zz">aa</div>
</body>
<script src="../jquery-1.12.4.js"></script>
<script>

	$("#zz").click(function(){
		$("#zz").load('aa.txt')
	})
	


</script>
</html>