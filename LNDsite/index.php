
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Sail|Concert+One' rel='stylesheet' type='text/css' />

    <title>Football League</title>
  </head>
  <body>
    <?php include('nav.php');?>
    <?php
      if(isset($_GET['lang'])){
          echo "<script type=\"text/javascript\">
            window.onload = function(){
            alert(\"Вибрана мова:" . $_GET['lang'] . "\")};
          </script>";
      }
    ?>
    <div id="firstImage">
    </div>
   <?php include('footer.php')?>
  </body>
</html>
