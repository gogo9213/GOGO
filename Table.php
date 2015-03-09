<!DOCTYPE html>
<html>
	<head lang="eng">
		<title>Unnamed</title>
		<meta charset="UTF-8" />
	</head>
	<body>
		<form action= "<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
			Въведете редове:<input type="text" name="rows" size="10" /><br />
			Въведете колони:<input type="text" name="cells" size="10" /><br />
						    <input type="submit" name="send" value="OK" /><br />
		</form>
			<?php	
				if(isset ($_SERVER['send'])){
					$rows=$_GET['rows'];
					$cells=$_GET['cells'];
					if(is_numeric($rows) && is_numeric($cells)){
						echo '<table border="1">';
						for($i=1;$i<=$rows;$i++){
							echo '<tr>';
							for($j=1;$j<=$cells;$j++){
								echo '<td>'.$cells.'</td>';
							}
							echo '</tr>';
						}
						echo '</table>';
					}
					else{
						echo  "Некоректно въведени стойности, моля въведете числена стойност в полетата!";
					}
				}
			?>
	</bo
