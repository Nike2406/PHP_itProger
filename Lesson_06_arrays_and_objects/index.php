<?php 
// Массивы

	$array = array (1, 3.24, "String", true); // array - объявление массива
	// echo $array[];
	$array[0]; // Индекс элемента в []
	echo $array[0] . "<br>"; // "." - присоединение строк
	$array[1] = -4.25;
	echo $array[1] . "<br>";
	$array[] = "New Element";
	echo $array[4]."<br><hr>";

	for ($i = 0; $i < count($array); $i++) { // count - считает эл-ты массива
		echo "Элемент массива с индексом $i = " . $array[$i] . ".<br>";
	}
	echo "<hr>";

//Ассоциативные массивы

//foraech используется только для ам

	$list = array ("age" => 12, "name" => "Alex", "schoolBoy" => true);
	$list["age"] = 10;

	echo "<hr><br>" . getAverage (array("first" => 12, "sec" => 45, "third" => 23, "fourth" => 55));

	function getAverage($array) {
		$summa = 0;
		foreach($array as $key => $value) {
			$summa += $value;
			echo $key . "<br>";
			echo $summa . "<br>";
		}
		return $summa / count($array);
	}

	// Функция сначала выводит перебор, а потом выводит f getAverage
?>