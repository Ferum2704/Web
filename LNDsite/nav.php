<?php include('chooselang.php')?>

<div id = "generalHeader">
      <div id="mobileLogo"><?php $_LANG['moblnd_nav'] ?></div>
      <header>
        <div id="logo">
          <a style="text-decoration: none;" href="index.php" >
            <span> Luxembourg National Division</span>
          </a>
        </div>
        <div id="menu">
          <a href="news.php"><?php echo $_LANG['news_nav']; ?></a>
          <a href="teams.php"><?php echo $_LANG['teams_nav']; ?></a>
          <a href="table.php"><?php echo $_LANG['table_nav']; ?></a>
          <a href="about-us.php"><?php echo $_LANG['about_nav']; ?></a>
        </div>
        <div id="login">
          <?php if(!isset($_SESSION['name'])): ?>
            <a href="sign-in.php">Sign in</a>
            <a href="sign-up.php">Sign up</a>

          <?php else: ?>
            <a href = "#" style="color: #000;"><?=  $_SESSION['name'] ?></a>
            <a href="./logout">Log out</a>

          <?php endif ?>
        </div>
      </header>
</div>