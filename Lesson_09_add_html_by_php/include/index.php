<?php 
// Подключение файлов
  $title = "Заголовок страницы";
  include "header.php"; // require исп для подключения документов
  echo "Тело документа";
  include "footer.php";

  // В require при отсутствии файлов выдается ошибка
  // В include при отсутствии файлов страница продолжает загружаться

?>