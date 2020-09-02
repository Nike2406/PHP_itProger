<?php 
  // Сессия хранится только на сервере и только 15 минут

  session_start();
  $num = (isset($_SESSION["num"])) ? $_SESSION["num"] : 0;
  $num++;
  $_SESSION["num"] = $num;
  echo "Пользователь обновил страницу $num рза.";

  // session_destroy(); 
  // // удаление сессии
?>