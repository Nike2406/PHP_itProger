<?php 
  print_r($_POST); // print_r() - выводит массив
  echo "<br><hr>";
  // Метод get отображается в адресной строке
  // Метод post не отображается в адресной строке
  if($_POST["name"] == "") 
    echo "Введите имя. <br> <a href='/PHP/Lesson_10/outFile/'>Исправить</a>";
  else
    header("Location: index.php");
?>