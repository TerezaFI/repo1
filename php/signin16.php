<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');

  $email = trim(mb_strtolower($_POST["email"]));
  $pass = trim($_POST["pass"]);

  echo "<div>Почта: $email</div><div>Пароль: $pass</div>"
?>