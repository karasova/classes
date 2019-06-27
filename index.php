<?php
error_reporting(0);
include "getData.php";
$students = [];
$students = getData($students);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Classes</title>
</head>

<body>
	<form action="addstud.php">
		<table border="1">
			<thead>
				 <td><b>ФИО студента</b></td>
				 <td><b>Средняя оценка</b></td>
			</thead>
			<tbody>
				<?php for($i = 0; $i < count($students)-1; $i += 1) {?>
					<tr>
						<td><?php echo $students[$i]->fullname() ?></td>
						<td><?php echo $students[$i]->averageScore() ?></td>
					</tr>				
				<?php }?>
			</tbody>
		</table>
		<p><input type="submit" value="Добавить студента">	
	</form>
</body>
</html>