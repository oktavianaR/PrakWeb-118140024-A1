  
<!DOCTYPE html>
<html>
<head>
	<title>Latihan 3 Mencari Bilangan Prima</title>
</head>
<body>
<?php
	for($i=0;$i<50;$i++){
		$bil=0;
		for($j=0;$j<$i;$j++){
			if($i%$j == 0){
				$bil++;
			}
		}
		if($bil == 2){
			echo $i;
			echo '<br>';
		}
	}
	?>
</body>
</html>