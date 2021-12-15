<?php
  session_start();
  setcookie('user', $user['name'], time() - 3600, "/");
  session_unset();
  header("Location: ../");
?>
