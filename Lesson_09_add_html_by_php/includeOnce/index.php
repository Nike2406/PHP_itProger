<?php 
// Подключение файлов
  $title = "Заголовок страницы";
  include_once "header.php"; // require исп для подключения документов
  echo "Тело документа";
  include_once "footer.php";

  // В require при отсутствии файлов выдается ошибка
  // В include при отсутствии файлов страница продолжает загружаться
  include_once "page.php";
  // При подключении нескольких похожих документов код дублируется 
  // в include & require, для избежания этого исп include_once

?>