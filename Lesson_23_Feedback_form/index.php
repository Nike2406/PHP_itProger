<?php 
session_start();
  if(isset($_POST["send"])) {
    $from = htmlspecialchars ($_POST["from"]);
    $to = htmlspecialchars ($_POST["to"]);
    $subject = htmlspecialchars ($_POST["subject"]);
    $message = htmlspecialchars ($_POST["message"]);

    $_SESSION["from"] = $from;
    $_SESSION["to"] = $to;
    $_SESSION["subject"] = $subject;
    $_SESSION["message"] = $message;

    $error_from = "";
    $error_to = "";
    $error_subject = "";
    $error_message = "";
    $error = false;

    if($from == "" || !preg_match("/@/", $from)) {
      $error_from = "Введите корректный email";
      $error = true;
    }
    if($to == "" || !preg_match("/@/", $to)) {
      $error_to = "Введите корректный email";
      $error = true;
    }
    if(strlen($subject) == 0) {
      $error_subject = "Введите тему сообщения";
      $error = true;
    }
    if(strlen($message) == 0) {
      $error_message = "Введите сообщение";
      $error = true;
    }

    if(!$error) {
      $subject = "=?utf-8?B?".base64_encode($subject)."?=";
      $headers = "From: $from\r\nRely-to: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
      mail($to, $subject, $message, $headers);
      header("Location: success.php?send=1");
      exit;
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
</head>
<body>
  <h4>Форма обратной связи</h4>
  <form action="" name="feedback" method="post">
    <label for="form_from">От кого:</label><br>
    <input id="form_from" type="text" name="from" value="<?= $_SESSION["from"] ?>">
    <span style="color:red"><?= $error_from?></span>
    <br>

    <label for="form_to">Кому:</label><br>
    <input id="form_to" type="text" name="to" value="<?= $_SESSION["to"] ?>">
    <span style="color:red"><?= $error_to?></span>
    <br>

    <label for="form_subject">Тема:</label><br>
    <input id="form_subject" type="text" name="subject" value="<?= $_SESSION["subject"] ?>">
    <span style="color:red"><?= $error_subject?></span>
    <br>

    <label for="form_message">Сообщение:</label><br>
    <textarea id="form_message" name="message" cols="22" rows="10" placeholder="Ваше сообщение"><?= $_SESSION["message"] ?></textarea>
    <span style="color:red"><?= $error_message?></span>
    <br>

    <input type="submit" name="send" value="Отправить">
  </form>
</body>
</html>
