<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>php basic</title>
</head>
<body>
	
	<?php 
		$khairul='bosunia';
		
		$sity = array('rongpur' , 'kurigram' , 'dhaka' , 'lalmonihat');
	?>
	
	<?php 
	if($khairul=='bosunia'){
		echo '<h1>my name is khairul islam bosunia</h1>';
	}
	else{
		echo '<h3>my name is  babu bosunia</h3>';
	}
	?>
	
	
	
	<?php 
		if($sity[2]=='lalmonihat'){
			echo 'bangladeshe rajdani dhaka';
		}
		
		else{
			echo 'amar bari kurigram';
		}
	?>
	
</body>
</html>