<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <!-- Arctext -->
    <link rel="stylesheet" type="text/css" href="Arctext/css/demo.css" />
    <link rel="stylesheet" type="text/css" href="Arctext/css/style.css" />
    <link href='https://fonts.googleapis.com/css?family=Montserrat|Sail|Concert+One' rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="Arctext/js/jquery.arctext.js"></script>
    <script type="text/javascript" src="//www.google.com/jsapi"></script>
    <title>Football League</title>

</head>
<style>
   a:hover {
    background: white;
    color: red; /* Цвет ссылки */
   }
  </style>
<body>
    <?php include('nav.php');?>
<div id="formLoginDiv" style="padding-top: 200px; padding-bottom: 500px;">
      <form action="authorize.php" id="formLogin" method="post">
        <h3 style="color: white;"><?php echo $_LANG['signin_nav']; ?></h3>
        <label for="name"><?php echo $_LANG['username']; ?></label><br>
        <input type="text" placeholder="Enter username" name = "login" id = "name"><br>
        <label for="password"><?php echo $_LANG['password']; ?></label><br>
        <input type="password" placeholder="Enter password" name = "password" id = "password"><br> <br>
        <button type="submit" name = "done" style="color: white; background: red;">Sign in</button>
        <br><br><a href="sign-up.php"><?php echo $_LANG['in_to_up']; ?></a>
      </form>
    </div>
    <?php include('footer.php');?>
</body>
</html>