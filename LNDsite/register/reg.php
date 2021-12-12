<?php

  $login = filter_var(trim($_POST["login"]), FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
  $password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_STRING);
  $confirmPassword = filter_var(trim($_POST["confirmPassword"]), FILTER_SANITIZE_STRING);
  $signingKey = "Q8uJjPAuRS7UNWVxDK1JGP4B2sTqZq19lHYUFWdCdWCZnRDkkmjvp4lIGfvJINga0mFs3S
                                                        jw7qhLmx9DbdsMxXONEuchZouUbhWt";

  // Check if the sent form data is valid
  if (mb_strlen($login) < 5 || mb_strlen($login) > 90) {
    echo "Wrong login length!";
    exit();
  }
  if (mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    echo "Wrong name length!";
    exit();
  }
  if (mb_strlen($password) < 5 || mb_strlen($password) > 30) {
    echo "Wrong password length!";
    exit();
  }
  if ($password != $confirmPassword) {
    echo "Your password fields differ!";
    exit();
  }

  $password = md5($password . $signingKey);

  $mysql = new mysqli('127.0.0.1', 'lab7user', 'lab7password', "website");

  // Check if user with such login already exists
  $response = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");
  $user = $response->fetch_assoc();
  if(isset($user) && count($user) > 0) {
    echo "Such user already exists! Try another login";
    exit();
  }

  $mysql->query("INSERT INTO `users` (`login`, `name`, `password`) VALUES ('$login', '$name', '$password')");

  $mysql->close();

  setcookie('user', $name, time() + 3600, "/");

  header("Location: ../");
?>
