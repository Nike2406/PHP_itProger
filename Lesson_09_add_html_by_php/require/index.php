<?php 
// Подключение файлов
  $title = "Заголовок страницы";
  require "header.php"; // require исп для подключения документов
  echo "Тело документа";
  require "footer.php";

  // В require при отсутствии файлов выдается ошибка
  // В include при отсутствии файлов страница продолжает загружаться

?>