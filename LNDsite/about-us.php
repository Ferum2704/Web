<?php
  include('chooselang.php');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="Arctext/js/jquery.arctext.js"></script>
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <title>Football League</title>
  </head>
  <body>
    <?php include('nav.php');?>


    <div id="secondImage">
      <h1> <strong> <?php echo $_LANG['about1']; ?></strong></h1>
      <br> 
      <p><strong><?php echo $_LANG['about2']; ?></strong>  <?php echo $_LANG['about3']; ?> <i><?php echo $_LANG['about4']; ?></i> <?php echo $_LANG['about5']; ?> </p> <br>
         <br><br> <h2><strong><?php echo $_LANG['history1']; ?></strong> </h2>
    <p></p> 
   <h3><strong><?php echo $_LANG['history2']; ?></strong></h3> 
<p> <?php echo $_LANG['history3']; ?>
</p>
<p> <?php echo $_LANG['history4']; ?>
</p>
<br>
<h3> <strong><?php echo $_LANG['history5']; ?></strong> </h3>
<p> <?php echo $_LANG['history6']; ?>
</p>
<p> <?php echo $_LANG['history7']; ?>
</p>   
</div>
   <?php include('footer.php')?>
  </body>
</html>
  </body>
</html>
