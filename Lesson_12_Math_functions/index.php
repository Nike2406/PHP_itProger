
<?php 
	// Math functions
	echo M_PI."<br>";
	echo M_E."<br>";

	$x = -15;
	echo abs($x)."<br>"; // abs - значение по модулю
	$y = 49.0346274627;
	echo round($y, 3)."<br>"; // округляет, 3 - значение после ,
	echo ceil($y)."<br>"; // округляет к большему
	echo floor($y)."<br>"; // округляет к меньшему

	echo mt_rand(1, 20)."<br>"; // случайное число из диапазона
	echo min(12, 23, 2, 15)."<br>"; // определяет мин значение сред чисел
	echo max(12, 23, 2, 15)."<br>"; // определяет макс значение сред чисел

	$z = 1;
	echo sin($z)."<br>"; // sinus
	echo cos($z)."<br>"; // cosinus
	echo tan($z)."<br>"; // tangens
	echo asin($z)."<br>"; // archsinus
?>
	
	