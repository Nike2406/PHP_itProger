
<?php 
//Создание файла
  // $file = fopen("a.txt", "a+t");
  // // fopen() - открывает файл и позволяет им манипулировать
  // // 1 - название файла, 2 - ключ
  // // r - только для чтения, указатель в начале файла
  // // r|w|a+ - для чтения и записи
  // // w - только для записи, указатель в начале файла
  // // а - только для записи, указатель в конце файла
  // // t - наличие в файле исполняемых символов типа /n /t adj (fopen("a.txt", "r+t");)
  // // b - отсутствие в файле исполняемых символов типа /n /t adj
  // // источник - https://www.php.net/manual/ru/function.fopen.php

  // fwrite($file, "Example\nText\nNext");
  // // fwrite() - запись в файл
  // // 1 - куда записывать, 2 - что записывать
  // fclose($file);
  // // fclose() - закрытие файла

  // Чтение файла
  $file = fopen("a.txt", "r+t");
  while (!feof($file)) {
    // feof() - проверяет файл на сколько он уже считан
    echo fread ($file, 2)."<br>";
    // fread() - считывает файл
    // 1 - что считывает, 2 - сколько символов считывать
  }  

  fseek ($file, 0);
  // fseek() - перемещение курсора
  // 1 - что считывает, 2 - куда переместить курсор
  echo fread ($file, 1)."<br>";

  fclose($file);
  echo "<hr>";

  // Упращенные функции
  file_put_contents("c.txt", "TEST test test");
  // file_put_contents() - автоматически открывает и закрывает файл
  echo file_get_contents("c.txt")."<br>";
  // file_get_contents() - читает файл
  echo file_exists("c.txt")."<br>";
  // file_exists() - существует ли файл
  echo filesize("a.txt")."<br>";
  // filesize() - размер файла в байтах

  rename ("c.txt", "b.txt");
  // rename() - переименовывет файлы 1=>2

  // unlink("b.txt"); // удаляет файл
?>