
<?php 
	// Функции для работы с массивами

	$array = array(12, 14, 22, 5, 77);

	echo count($array)."<br>"; // Количество эл в массиве

	sort($array); // Сортирует массив по возрастанию
	print_r($array);
	echo "<br>";
	
	rsort($array); // Сортирует массив по убыванию
	print_r($array);
	echo "<br>";

	asort($array); // asort()/arsort() - запоминает индекс элементов
	print_r($array);
	echo "<br>";
	echo "<hr>";

	// Функции для работы с ассоциативными массивами

	$asArr = array("123" => 123, "456" => 456, "234" => 234);
	arsort($asArr); // arsort() - сортировка по значениям
	print_r($asArr);
	echo "<br>";

	$asArr = array("123" => 123, "456" => 456, "234" => 234);
	ksort($asArr); // ksort() - сортировка по ключам
	print_r($asArr);
	echo "<br>";

	shuffle($array); // Перемешивание массива
	print_r($array);
	echo "<br>";
	echo "<hr>";

	echo in_array(12, $array); // Проверяет наличие эл в массиве
	echo "<br>";

	// Сложение массивов
	$arr_1 = array(10, 2);
	$arr_2 = array(4, 5, 6);
	$arr_3 = array_merge($arr_1, $arr_2); // array_merge - складывает массивы
	print_r($arr_3);
	echo "<br>";

	// Удаление элементов массива
	$arrSlice = array (1, 2, 3, 4, 5, 6);
	print_r($arrSlice);
	echo "<br>";
	$arrSlice = array_slice($arrSlice, 1, 2);
	// 1 - где удаляем, 2 - с какого номера, 3 - сколько оставляем
	// 3 - если указать отриц значение, то сколько убрать с конца м
	print_r($arrSlice);
	echo "<br>";
?>