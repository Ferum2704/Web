<?php include('chooselang.php')?>
<div id = "generalHeader">
      <div id="mobileLogo"><?php $_LANG['moblnd_nav'] ?>
</div>
      <header>
        <div id="logo"><a style="text-decoration: none;" href="index.php" ><span> <?php echo $_LANG['lnd_nav'] ?>
</span></a> </div>
        <div id="menu">
          <a href="news.php"><?php echo $_LANG['news_nav']; ?></a>
          <a href="teams.php"><?php echo $_LANG['teams_nav']; ?></a>
          <a href="table.php"><?php echo $_LANG['table_nav']; ?></a>
          <a href="about-us.php"><?php echo $_LANG['about_nav']; ?></a>
        </div>
        <div id="login">
          <?php if(!isset($_SESSION['name'])): ?>
          <a href="sign-in.php"><?php echo $_LANG['signin_nav']; ?></a>
          <a href="sign-up.php"><?php echo $_LANG['signup_nav']; ?></a>
          <?php else: ?>
            <a href = "#" style="color: #000;"><?=  $_SESSION['name'] ?></a>
            <a href="./logout">Log out</a>
          <?php endif ?>
        </div>
      </header>
   </div>