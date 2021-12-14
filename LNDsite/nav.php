<style>
</style>
<div id = "generalHeader">
      <div id="mobileLogo">Luxembourg National Division</div>
      <header>
        <div id="logo">
          <a style="text-decoration: none;" href="index.php" >
            <span> Luxembourg National Division</span>
          </a>
        </div>
        <div id="menu">
          <a href="news.php">News</a>
          <a href="#">Teams</a>
          <a href="#">Tournament table</a>
          <a href="about-us.php">About us</a>
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
