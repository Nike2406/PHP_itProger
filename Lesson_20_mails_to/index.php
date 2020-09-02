<?php 
  $message = "Message to smn";
  $to = "1231@mail.com";
  $from = "4124@mail.com";
  $subgect = "Message title";
  $subgect = "=?utf-8?B?".base64_encode($subject)."?="; 
  // специальная кодировка для mail.ru
  $headers = "Froom: $from\r\nReply-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
  // plain - обычный текст, html - теги
  mail($to, $subgect, $message, $headers);
?>