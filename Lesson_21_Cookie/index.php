<?php 
  // setcookie("num", 10, time() + 7);
  // // 1 - навзвание, 2 - значение, 3 - время хранения cookie
  // // cookie удаляется при завершении сессии
  // echo $_COOKIE["num"]."<br>";
  // // $_COOKIE["num"] - Ассоциативный массив (array) значений, 
  // // переданных скрипту через HTTP Cookies. 
  // if (isset($_COOKIE["num"])) 
  // // isset() - отлична ли переменная от NULL
  //   echo "Has cookie.<br>";
  // else  
  //   echo "No cookie.<br>";

  $num = (isset($_COOKIE["num"])) ? $_COOKIE["num"] : 0;
  $num++;
  setcookie("num", $num, time() + 2);
  echo "Пользователь обновил страницу $num рза."
?>