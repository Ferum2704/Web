<?php
  $labNumber = null;
  $contentType = null;
  if(isset($_GET["lab"]) && is_numeric($_GET["lab"]) && $_GET["lab"] > 0 && $_GET["lab"] < 10) {
    $labNumber = $_GET["lab"];
  }
  if(isset($_GET["content"]) && is_string($_GET["content"])) {
    $contentType = $_GET["content"];
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>Reports</title>
  </head>
  <body>
    <div class="wrapper">

      <header>
        <h1>Звіти  з Лабораторних Робіт з дисципліни «ІНТЕРНЕТ-ТЕХНОЛОГІЇ ТА ПРОЕКТУВАННЯ WEB-ЗАСТОСУВАНЬ»</h1>
      </header>
      <div class="authors"><h2>БРИГАДА №8 Cтуденти групи  ІC-03 Штолер, Хоменко, Процишин</h2></div>
      <div class="labsWrapper">
        <div class="laba"><a href = "index.php?lab=1">Лабораторна робота #1</a></div>
        <div class="laba"><a href = "index.php?lab=2">Лабораторна робота #2</a></div>
        <div class="laba"><a href = "index.php?lab=3">Лабораторна робота #3</a></div>
        <div class="laba"><a href = "index.php?lab=4">Лабораторна робота #4</a></div>
        <div class="laba"><a href = "index.php?lab=5">Лабораторна робота #5</a></div>
        <div class="laba"><a href = "index.php?lab=6">Лабораторна робота #6</a></div>
        <div class="laba"><a href = "index.php?lab=7">Лабораторна робота #7</a></div>
        <div class="laba"><a href = "index.php?lab=8">Лабораторна робота #8</a></div>
        <div class="laba"><a href = "index.php?lab=9">Лабораторна робота #9</a></div>
      </div>

      <!-- Заголовок лабораторної роботи -->
      <?php
        if($labNumber > 0) {
          echo "<h1 class = \"labNumber\">Лабораторна робота №". $_GET["lab"] ."</h1>";
          $labNumber = $_GET["lab"];
        }
        else {
          echo "<h1 class = \"labNumber\">Оберіть лабораторну роботу</h1>";
        }
      ?>
      <!-- ============================== -->

      <div class="menu">
        <?php
          if ($labNumber == 1) {
            echo "<a href=\"index.php?lab=$labNumber&content=description\">Опис предметного середовища</a>
                 <a href=\"index.php?lab=$labNumber&content=topic\">Тема Мета Місце розташування лаби №1</a>
                 <a href=\"index.php?lab=$labNumber&content=struct\">Структура документа</a>
                 <a href=\"index.php?lab=$labNumber&content=table\">HTML-код ТАБЛИЦЬ</a>
                 <a href=\"index.php?lab=$labNumber&content=form\">HTML-код ФОРМИ</a>
                 <a href=\"index.php?lab=$labNumber&content=image\">HTML-код ЗОБРАЖЕННЯ</a>
                 <a href=\"index.php?lab=$labNumber&content=conclusion\">Висновки</a>";
          }
          else if($labNumber == 2) {
            echo "<a href=\"index.php?lab=$labNumber&content=task\">Постановка задачі</a>
                 <a href=\"index.php?lab=$labNumber&content=ident\">Ідентифікатори</a>
                 <a href=\"index.php?lab=$labNumber&content=margins\">Відступи</a>
                 <a href=\"index.php?lab=$labNumber&content=colors\">Властивості кольору і фону</a>
                 <a href=\"index.php?lab=$labNumber&content=selectors\">Селектори тега і класу</a>
                 <a href=\"index.php?lab=$labNumber&content=others\">Дочірні селектори</a>
                 <a href=\"index.php?lab=$labNumber&content=susid\">Сусідні селектори</a>
                 <a href=\"index.php?lab=$labNumber&content=grouped\">Групування селекторів</a>
                 <a href=\"index.php?lab=$labNumber&content=visnovok\">Висновок</a>";
          }
          else if($labNumber == 3) {
            echo "<a href=\"index.php?lab=$labNumber&content=task\">Постановка задачі</a>
                 <a href=\"index.php?lab=$labNumber&content=screen\">Cкріншот головної сторінки сайту</a>
                 <a href=\"index.php?lab=$labNumber&content=code\">HTML-програмний код макету</a>
                 <a href=\"index.php?lab=$labNumber&content=analys\">Аналіз макету</a>";
          }
          else if($labNumber == 4) {

          }
          else if($labNumber == 5) {
            echo "<a href=\"index.php?lab=$labNumber&content=task\">Мета</a>
                 <a href=\"index.php?lab=$labNumber&content=task1\">Динамічні елементи (завдання 1)</a>
                 <a href=\"index.php?lab=$labNumber&content=task2\">UniteGallery (gallery)</a>
                 <a href=\"index.php?lab=$labNumber&content=task3\">UniteGallery (photoslider)</a>
                 <a href=\"index.php?lab=$labNumber&content=task4\">UniteGallery (videoslider)</a>
                 <a href=\"index.php?lab=$labNumber&content=task5\">Social Networks</a>
                 <a href=\"index.php?lab=$labNumber&content=task6\">Informers</a>
                 <a href=\"index.php?lab=$labNumber&content=task7\">GifPlayer</a>
                 <a href=\"index.php?lab=$labNumber&content=visnovok\">Висновки</a>";
          }
          else if ($labNumber == 6) {
            echo "<a href=\"index.php?lab=$labNumber&content=meta\">Мета</a>
                  <a href=\"index.php?lab=$labNumber&content=gitLink\">Посилання на GitHub</a>
                  <a href=\"index.php?lab=$labNumber&content=task1\">Динамічні елементи 3 пункту</a>
                  <a href=\"index.php?lab=$labNumber&content=task2\">Установка WEB серверу</a>
                  <a href=\"index.php?lab=$labNumber&content=files\">Файли вузла веб-серверу</a>
                  <a href=\"index.php?lab=$labNumber&content=encoding\">Кодування UTF-8</a>
                  <a href=\"index.php?lab=$labNumber&content=task3\">Налаштування конфігураційного файлу</a>
                  <a href=\"index.php?lab=$labNumber&content=task4\">Форма зворотнього зв'язку</a>
                  <a href=\"index.php?lab=$labNumber&content=visnovok\">Висновки</a>";
          }
          else if ($labNumber == 7) {
            echo "<a href=\"index.php?lab=$labNumber&content=meta\">Мета</a>
                    <a href=\"index.php?lab=$labNumber&content=pb\" class = \"name\">Робота Процишина Богдана</a>
                    <a href=\"index.php?lab=$labNumber&content=pb_bd\" style = \"margin-left: 10%\">База даних</a>
                    <a href=\"index.php?lab=$labNumber&content=pb_search\" style = \"margin-left: 10%\">Пошук даних з бд</a>
                    <a href=\"index.php?lab=$labNumber&content=pb_input\" style = \"margin-left: 10%\">Внесенння даних в бд</a>
                    <a href=\"index.php?lab=$labNumber&content=pb_output\" style = \"margin-left: 10%\">Виведення даних з бд</a>

                    <a href=\"index.php?lab=$labNumber&content=mk\" class = \"name\">Робота Штолера Максима</a>
                    <a href=\"index.php?lab=$labNumber&content=mk_bd\" style = \"margin-left: 10%\">База даних</a>
                    <a href=\"index.php?lab=$labNumber&content=mk_search\" style = \"margin-left: 10%\">Пошук даних з бд</a>
                    <a href=\"index.php?lab=$labNumber&content=mk_input\" style = \"margin-left: 10%\">Внесенння даних в бд</a>
                    <a href=\"index.php?lab=$labNumber&content=mk_output\" style = \"margin-left: 10%\">Виведення даних з бд</a>

                    <a href=\"index.php?lab=$labNumber&content=dh\" class = \"name\">Робота Хоменка Дмитра</a>
                    <a href=\"index.php?lab=$labNumber&content=dh_bd\" style = \"margin-left: 10%\">База даних</a>
                    <a href=\"index.php?lab=$labNumber&content=dh_model\" style = \"margin-left: 10%\">Модель</a>
                    <a href=\"index.php?lab=$labNumber&content=dh_search\" style = \"margin-left: 10%\">Пошук даних з бд</a>
                    <a href=\"index.php?lab=$labNumber&content=dh_input\" style = \"margin-left: 10%\">Внесенння даних в бд</a>
                    <a href=\"index.php?lab=$labNumber&content=dh_output\" style = \"margin-left: 10%\">Виведення даних з бд</a>";
          }
        ?>

      </div>

      <div id="content">
        <!-- Відображення певної інформації в блоці виведення інформації -->
        <?php
          if($labNumber == 1 && $contentType != null) {
            if($contentType == "description")
              echo "<img src=\"lab1/desc.jpg\" />";
            else if ($contentType == "topic")
              echo "<img src=\"lab1/topic.jpg\" /><h4>Місце розташування: <a href = \"../lab/index.html\">Лабораторна робота №1</a></h4>";
            else if ($contentType == "conclusion")
              echo "<img src=\"lab1/conclusion.jpg\" />";
            else if ($contentType == "table")
              echo "<img src=\"lab1/table.jpg\" />";
            else if ($contentType == "form")
              echo "<img src=\"lab1/form.jpg\" />";
            else if ($contentType == "image")
              echo "<img src=\"lab1/image.png\" />";
            else if ($contentType == "struct")
              echo "<h3><a href=\"../lab/index.html\" download>Завантажити</a></h3>";
          }
          else if($labNumber == 2 && $contentType != null) {
            if($contentType == "task") {
              echo "<img src=\"lab2/Task.png\" style = \"height: 100%;\" /><img src=\"lab2/meta.png\" style = \"width: 45%; margin-left: 3%;\" />";
            }
            else if($contentType == "ident") {
              echo "<img src=\"lab2/htmlid.png\" style = \"height: 50%; margin-right: 3%;\" /><img src=\"lab2/formid.png\" />";
            }
            else if($contentType == "margins") {
              echo "<img src=\"lab2/marginscss.png\" style = \"height: 80%; margin-right: 1%;\" /><img src=\"lab2/margins.png\" style = \"width: 50%;\" />";
            }
            else if($contentType == "colors") {
              echo "<img src=\"lab2/colorsCss.png\" style = \"margin-right: 10%;\" /><img src=\"lab2/colors.png\" style = \"height: 60%;\" />";
            }
            else if($contentType == "selectors") {
              echo "<img src=\"lab2/selectors.png\" style = \"height: 100%; width: 49%; margin-right: 1%;\" /><img src=\"lab2/selectorsSite.png\" style = \"width: 50%;\" />";
            }
            else if($contentType == "others") {
              echo "<img src=\"lab2/otherCss.png\" style = \"margin-right: 3%; margin-left: 3%;\" /><img src=\"lab2/other.png\" />";
            }
            else if($contentType == "susid") {
              echo "<img src=\"lab2/susidcss.png\" style = \"margin-right: 3%; margin-left: 10%;\" /><img src=\"lab2/susid.png\" style = \"width: 47%;\" />";
            }
            else if($contentType == "grouped") {
              echo "<img src=\"lab2/groupSelectCss.png\" style = \"margin-right: 3%;\" /><img src=\"lab2/groupSelect.png\" style = \"width: 60%;\" />";
            }
            else if($contentType == "visnovok") {
              echo "<img src=\"lab2/vysn.png\" style = \"margin-left: 10%;\" />";
            }
          }
          else if($labNumber == 3 && $contentType != null) {
            if($contentType == "task") {
              echo "<img src=\"lab3/topic.png\" style = \"width: 45%;\"/><img src=\"lab3/zavd1.png\" style = \"width: 45%; margin-left: 3%;\" />";
            }
            else if($contentType == "screen") {
              echo "<img src=\"lab3/screen.png\" style = \"width: 100%;\"/>";
            }
            else if($contentType == "code") {
              echo "<img src=\"lab3/code1.png\" style = \"height: 100%; margin-left: 2%;\"/>
                    <img src=\"lab3/code2.png\" style = \"height: 100%; margin-left: 2%;\"/>
                    <img src=\"lab3/code3.png\" style = \"height: 100%; margin-left: 2%;\"/>";
            }
            else if($contentType == "analys") {
              echo "<p style = \"font-size: 2em; margin: 1%;\">На <a href = \"http://max.en.net.ua/kpi/site\">нашому сайті</a> комбінований тип макету, бо ми використали різну ширину для різних частин сайту.
               Це не є самостійним типом, тому наслідує переваги та недоліки різних типів - гумового та фіксованого.</p><br>
               <div class = \"clear\"></div>";
            }
          }
          else if($labNumber == 5 && $contentType != null) {
            if($contentType == "task") {
              echo "<img src=\"lab5/1.png\" style = \"margin-left: 15%;\" />";
            }
            else if($contentType == "task1") {
              echo "<img src=\"lab5/2.png\" style = \"margin-left: 15%;\" /><img src=\"lab5/3.png\" style = \"margin-left: 2%;\" />
                    <img src=\"lab5/4.png\" style = \"margin-left: 10%;\" /><img src=\"lab5/5.png\" style = \"margin-left: 2%;\" />
                    <img src=\"lab5/6.png\" style = \"margin-left: 10%;\" /><img src=\"lab5/7.png\" style = \"margin-left: 2%;\" /><img src=\"lab5/8.png\" style = \"margin-left: 2%;\" />
                    <img src=\"lab5/9.png\" style = \"margin-left: 10%;\" />";
            }
            else if($contentType == "task2") {
              echo  "<img src=\"lab5/10.png\" style = \"margin-left: 15%;\" /><img src=\"lab5/11.png\" style = \"margin-left: 2%;\" /><img src=\"lab5/12.png\" style = \"margin-left: 2%;\" />";
            }
            else if($contentType == "task3") {
              echo  "<img src=\"lab5/13.png\" style = \"margin-left: 15%;\" /><img src=\"lab5/14.png\" style = \"margin-left: 2%;\" /><img src=\"lab5/15.png\" style = \"margin-left: 2%;\" />";
            }
            else if($contentType == "task4") {
              echo  "<img src=\"lab5/16.png\" style = \"margin-left: 15%;\" /><img src=\"lab5/17.png\" style = \"margin-left: 2%;\" /><img src=\"lab5/18.png\" style = \"margin-left: 2%;\" />";
            }
            else if($contentType == "task5") {
              echo  "<img src=\"lab5/19.png\" style = \"margin-left: 15%;\" /><img src=\"lab5/20.png\" style = \"margin-left: 2%;\" /><img src=\"lab5/21.png\" style = \"margin-left: 2%;\" />";
            }
            else if($contentType == "task6") {
              echo  "<img src=\"lab5/22.png\" style = \"margin-left: 15%;\" /><img src=\"lab5/23.png\" style = \"margin-left: 2%;\" />";
            }
            else if($contentType == "task7") {
              echo  "<img src=\"lab5/25.png\" style = \"margin-left: 15%;\" /><img src=\"lab5/24.png\" style = \"margin-left: 2%;\" />";
            }
            else if($contentType == "visnovok") {
              echo  "<p style = \"font-size: 2em; margin: 1%;\">На цій лабораторній роботі, ми придбали практичні навички роботи jQuery UI, навчились додавати до сайту  динамічні елементи цієї бібліотеки, плагін галереї UniteGallery, кнопки соціальних мереж, інформери та використали плагін GifPlayer</p><br>
               ";
            }
          }
          else if($labNumber == 6 && $contentType != null) {
            if($contentType == "meta") {
              echo "<img src=\"lab6/1.png\" style = \"margin-left: 15%;\" /><div class = \"clear\"></div>";
            }
            else if($contentType == "task1") {
              echo "<img src=\"lab6/2.png\" style = \"margin-left: 4%;\" /><img src=\"lab6/25.jpg\" style = \"margin-left: 2%;\" /><img src=\"lab6/3.png\" style = \"margin-left: 2%;\" />
                    <img src=\"lab6/4.png\" style = \"margin-left: 2%;\" />";
            }
            else if($contentType == "task2") {
              echo  "<img src=\"lab6/5.png\" style = \"margin-left: 10%;\" /><img src=\"lab6/6.png\" style = \"margin-left: 2%;\" />
                     <img src=\"lab6/7.png\" style = \"margin-left: 2%;\" /><img src=\"lab6/8.png\" style = \"margin-left: 2%;\" />
                     <img src=\"lab6/9.png\" style = \"margin-left: 2%;\" /><img src=\"lab6/10.png\" style = \"width: 700px; margin-left: 2%;\" />";
            }
            else if($contentType == "task3") {
              echo  "<img src=\"lab6/11.png\" style = \"margin-left: 10%;\" /><img src=\"lab6/12.png\" style = \"margin-left: 2%;\" />
                     <img src=\"lab6/13.png\" style = \"margin-left: 2%;\" /><img src=\"lab6/14.png\" style = \"margin-left: 2%;\" />
                     <img src=\"lab6/15.png\" style = \"margin-left: 2%;\" /><img src=\"lab6/16.png\" style = \"width: 700px; margin-left: 2%;\" />
                     <img src=\"lab6/17.png\" style = \"margin-left: 2%;\" /><img src=\"lab6/18.png\" style = \"width: 700px; margin-left: 2%;\" />
                     <img src=\"lab6/19.png\" style = \"width: 700px; margin-left: 2%;\" />";
            }
            else if($contentType == "task4") {
              echo  "<img src=\"lab6/20.png\" style = \"margin-left: 10%;\" /><img src=\"lab6/23.png\" style = \"margin-left: 2%;\" />
                     <img src=\"lab6/21.png\" style = \"margin-left: 2%;\" /><img src=\"lab6/22.png\" style = \"width: 500px; margin-left: 2%;\" />";
            }
            else if($contentType == "gitLink") {
              echo  "<a href = \"https://github.com/Ferum2704/Web\" target = \"_blank\" style = \"margin-left: 30%; font-size: 2em;\">Посилання на GitHub</a>";
            }
            else if($contentType == "encoding") {
              echo  "<img src=\"lab6/24.png\" style = \"margin-left: 25%; width: 50%;\" />";
            }
            else if($contentType == "files") {
              echo  "<img src=\"lab6/26.png\" style = \"margin-left: 25%; width: 50%;\" />";
            }
            else if($contentType == "visnovok") {
              echo  "<p style = \"font-size: 2em; margin: 1%;\">На цій лабораторній роботі, ми придбали практичні навички встановлення та конфігурування WEB-сервера, встановлення та налаштування Apache.
                    Відобразили процес встановлення і налаштування у звіті. Крім цього, повторили jQuery і додали 3 динамічні до нашого сайту.</p><br>
               ";
            }
          }
          else if($labNumber == 7 && $contentType != null) {
            if($contentType == "meta") {
              echo "<img src=\"lab7/lab_meta.png\" style = \"margin-left: 15%;\" /><div class = \"clear\"></div>";
            }
            // Bohdan
            else if($contentType == "pb_bd") {
              echo  "<img src=\"lab7/pb_1.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/pb_2.png\" style = \"margin-left: 2%; width: 50%;\" /> <img src=\"lab7/pb_3.png\" style = \"margin-left: 2%; width: 50%;\" /> <img src=\"lab7/pb_4.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
            else if($contentType == "pb_model") {
              echo  "<img src=\"lab7/pb_model.png\" style = \"margin-left: 10%; width: 50%;\" />";
            }
            else if($contentType == "pb_input") {
              echo  "<img src=\"lab7/pb_7.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/pb_8.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
            else if($contentType == "pb_output") {
              echo  "<img src=\"lab7/pb_9.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/pb_10.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
            else if($contentType == "pb_search") {
              echo  "<img src=\"lab7/pb_5.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/pb_6.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
            // Maksym
            else if($contentType == "mk_bd") {
              echo  "<img src=\"lab7/m1.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/m2.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
            else if($contentType == "mk_search") {
              echo  "<img src=\"lab7/m3.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/m4.png\" style = \"margin-left: 2%; width: 80%;\" />";
            }
            else if($contentType == "mk_input") {
              echo  "<img src=\"lab7/m5.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/m6.png\" style = \"margin-left: 2%; width: 50%;\" />
              <img src=\"lab7/m7.png\" style = \"margin-left: 2%; width: 50%;\" /><img src=\"lab7/m8.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
            else if($contentType == "mk_output") {
              echo  "<img src=\"lab7/m9.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/m10.png\" style = \"margin-left: 2%; width: 50%;\" />
              <img src=\"lab7/m11.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }

            else if($contentType == "dh_bd") {
              echo  "<img src=\"lab7/dh_bd1.png\" style = \"margin-left: 10%; width: 100%;\" /> <img src=\"lab7/dh_bd2.png\" style = \"margin-left: 2%; width: 100%;\" /> <img src=\"lab7/dh_bd3.png\" style = \"margin-left: 2%; width: 100%;\" /> <img src=\"lab7/dh_bd4.png\" style = \"margin-left: 2%; width: 100%;\" />";
            }
            else if($contentType == "dh_model") {
              echo  "<img src=\"lab7/dh_model.png\" style = \"margin-left: 10%; width: 50%;\" />";
            }
            else if($contentType == "dh_input") {
              echo  "<img src=\"lab7/dh_input1.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/dh_input2.png\" style = \"margin-left: 2%; width: 50%;\" /> <img src=\"lab7/dh_input3.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
            else if($contentType == "dh_output") {
              echo  "<img src=\"lab7/dh_output2.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/dh_output1.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
            else if($contentType == "dh_search") {
              echo  "<img src=\"lab7/dh_search2.png\" style = \"margin-left: 10%; width: 50%;\" /> <img src=\"lab7/dh_search1.png\" style = \"margin-left: 2%; width: 50%;\" />";
            }
          }
        ?>
        <!-- ============================== -->
      </div>

    </div>
  </body>
</html>
