<?php
error_reporting(0);
$error = array();

if (!empty($_POST)) {
	$name = isset($_POST['name']) ? trim($_POST['name']) : null;

	$score = isset($_POST['score']) ? trim($_POST['score']) : null;

	if (empty($name)) {
		$error[$name] = " Введите ФИО";
	}
	else {
		$arr = explode(" ", $name);
		if (count($arr) < 3)
			$error['name'] = " Введите полное ФИО!";
	}

	if (empty($score)) {
		$error['score'] = " Введите оценки студента!";
	}
	else {
		$arr = explode(" ", $score);
		for ($i = 0; $i < count($arr); $i++)
			if ($arr[$i] > 5 || !is_numeric($arr[$i]))
				$error['score'] = " Введены невозможные оценки!";
	}

	if (empty($error)) {

		$content = $name . "\n";
		file_put_contents("Data/Data.txt", $content, FILE_APPEND);		

		$content = $score . "\n";
		file_put_contents("Data/Score.txt", $content, FILE_APPEND);
		header('Location: index.php');

		exit;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Добавление</title>
</head>
<body>
	<form action="<?= $_SERVER['REQUEST_URI'];?>" method="POST">

		<p><input placeholder="Введите ФИО студента" name="name" value="<?= isset($_POST['name']) ? $_POST['name']:''?>" required><?php echo $error['name'] ?></p>

		<p><input placeholder="Введите оценки через пробел" name="score" value="<?= isset($_POST['score']) ? $_POST['score']:''?>" required><?php echo $error['score'] ?></p>

		<p><input type="submit" value="Добавить"></p>

	</form>
</body>
</html>