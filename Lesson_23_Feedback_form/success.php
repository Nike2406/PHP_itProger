<?php
session_start();
if($_GET["send"] == 1)
  echo "<h2 style='color: green'>Success email to ". $_SESSION["to"] ."</h2>";
?>