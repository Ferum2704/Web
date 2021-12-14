<?php
  if(isset($_COOKIE['lang'])){
      $lang = $_COOKIE['lang']; // получем язык сайта из куки
  }else{
      $lang = 'en'; // default значение для языка сайта
  }
  // проверяем, если был передан язык в урле, то записываем его в куку
  if(isset($_GET['lang'])){
      // задаем язык сайту
      $lang = $_GET['lang'];
      setcookie ("lang", $lang, time() + 3600*24*183, "/"); // устанавливаем куку с языком сайта
  }
  include($lang . '.php');
?>