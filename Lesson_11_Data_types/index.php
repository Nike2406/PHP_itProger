
<?php 
	// Функции для работы с типами данных

	// isset(); - Существует ли переменная
	$x = 10;
	echo '$x = 10;<br>';
	if (isset($x)) echo "Переменная существует";
		else echo "Переменная не существует";
	echo "<hr>";
	
	// unset() - берет переменную и полную ее удаляет
	// как правило используется в массивах
	echo 'unset($x);<br>';
	unset($x);

	if (isset($x)) echo "Переменная существует";
		else echo "Переменная не существует";
	echo "<hr>";

	//is_numeric() - проверяет числовую переменную, даже если она записана строкой
	$y = "15.2";
	$bool = false;
	$null;
	echo "Is Numetic = ".is_numeric($y).".<br>";
	echo "Is Integer = ".is_integer($y).".<br>";
	echo "Is Double = ".is_double($y).".<br>";
	echo "Is String = ".is_string($y).".<br>";
	echo "Is Boolean = ".is_bool($bool).".<br>";
	echo "Is Scalar = ".is_scalar($y).".<br>"; 
	// проверяет, является переменная простой (не объектом и не массивом)
	echo "Is Null = ".is_null($null).".<br>";
	// ПУсто ли?
	echo "Is Array = ".is_array($y).".<br>";
	echo "Type = ".gettype($y).".<br>";
	echo "Type = ".gettype($null).".<br>";
	echo "Type = ".gettype($bool).".<br>";
?>
	
	