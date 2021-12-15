<?php

  $signingKey = "Q8uJjPAuRS7UNWVxDK1JGP4B2sTqZq19lHYUFWdCdWCZnRDkkmjvp4lIGfvJINga0mFs3S
                                                        jw7qhLmx9DbdsMxXONEuchZouUbhWt";
  $login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);

  $password = md5($password . $signingKey);

  $mysql = new mysqli('127.0.0.1', 'root', 'Batuishka123', "football");
  $response = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'
     AND `password` = '$password'");
  $user = $response->fetch_assoc();
  if(!$user || count($user) == 0) {
    echo "Wrong login or password!";
    exit();
  }

  setcookie('user', $user['name'], time() + 3600, "/");
  session_start();
  $_SESSION["name"] = $user['name'];
  $_SESSION["login"] = $user['login'];

  $mysql->close();

  header("Location: index.php");
?>
