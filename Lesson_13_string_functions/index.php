
<?php 
	$string = "This is example!";

	echo strlen($string)."<br>"; // strlen() - длина строки
	echo strpos($string, "is", 4)."<br>"; // strpos() - ищет символы в строке c номера

	if (strpos($string, "T") === false) echo "T not found.<br>";
		else echo "T found.<br>";
		// При эквивалентонсти == переменная не будет найдена, тк false==""

	echo substr($string, 3)."<br>"; // Обрезка строки до символа
	echo substr($string, 3, 7)."<br>"; // Обрезка строки до символа и с символа
	echo substr($string, 3, -2)."<br>"; // -2 символа с конца строки
	
	echo str_replace(array("is","ple"), array("abc", "123"), $string)."<br>"; 
	// 1 - что заменить, 2 - на что заменить, 3 - где заменить

	$str = "<b>Жирный шрифт</b>";
	echo htmlspecialchars ($str)."<br>";
	// Обрабатывает код (см. сайт)

	echo strtolower($string)."<br>"; // В нижний регистр
	echo strtoupper($string)."<br>"; // В верхний регистр

	echo md5 ("123")."<br>"; // Перекодирует текст (например пароль)

	echo trim("    string    dsf   sd  ")."<br>"; // удаляет пробелы
?>
	