<?php 
// Двумерные массивы

$array = array (array (12, 4, 25, true), array ("loft", true, 3.65));
// ДМ - вложенные массивы

// Вызов элемента

 echo '$array = '.$array[0][2]."<hr>"; 
 //[0] - 1й эл в 1м м, [2] - 3й эл во 2м м 

 // Перебор

 for ($i = 0; $i < count($array); $i++) {
	 for ($j = 0; $j < count ($array[$i]); $j++) {
		echo $array[$i][$j]." | ";
	 }
	 echo "<br>";
 }
?>