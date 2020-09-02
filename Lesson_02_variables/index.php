<?php 
  // Для записи перменной используется знак "$"
  $myNumber = 45; // integer
  $float = -3.25; // С плавающей точной
  $string = "Hello world!"; // String
  $boolTrue = true; // boolean 1
  $boolFalse = false; // boolean ""

  echo "Переменная myNubber = $myNumber <br>";
  echo "Переменная float = $float <br>";
  echo "Переменная string = $string <br> <br>";

  echo "Тип boolean Выводится как 1 или пустая строка:<br>";
  echo "Переменная boolTrue = $boolTrue <br>";
  echo "Переменная boolFalse = $boolFalse <br> <br>";

  echo 'В одинарных ковычках выводится просто текст <br>';
  echo 'Переменная myNubber = $myNumber <br> <br>';
  
  echo 'Переменные изменчивы: <br>';
  $myNumber = 10;
  echo "Теперь переменная myNubber = $myNumber <br> <br>";

  echo 'Запись константы: define("PI", 3.14); <br>';
  echo 'Вывод константы без $ : echo PI; <br>';
  
  define("PI", 3.14);
  echo PI;
?>