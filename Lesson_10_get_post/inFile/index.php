
<?php 
if(isset($_POST["done"])) { // isset() - узнает нажата ли кнопка
  if($_POST["name"] == "") 
    echo "Введите имя. <br> <a href='/PHP/Lesson_10_get_post/inFile/'>Исправить</a>";
  else
		header("Location: index.php");
}
?>
	
	<!-- Обработка форм -->
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Обработка форм</title>
	</head>
	<body>
	<h2>Форма</h2>
		<form action="check.php" name="test" method="post">
			<label for="form-name">Имя: </label>
			<input type="text" name="name" placeholder="Имя" id="form-name"><br>
			<label for="form-mail">e-mail: </label>
			<input type="mail" name="e-mail" placeholder="Почта" id="form-email"><br>
			<label for="form-message">Сообщение: </label><br>
			<textarea name="message" id="form-message" cols="20" rows="10"></textarea><br>
			<input type="submit" name="done" value="Готово">
		</form>
	</body>
	</html>
