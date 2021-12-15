<?php
  session_start();
  $contentType = null;
  if(isset($_GET["content"]) && is_string($_GET["content"])) {
    $contentType = $_GET["content"];
  }
  include('chooselang.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <style type="text/css">
      .teams{
         background-image: url("grass1.jpg");
         width: 100%;
         height: 660px;
      }
      .team p{
         font-weight: bold;
         font-size: 25px;
         color: #D8D8D8;
      }
      .team{
         padding-left: 50px;
      }
      .content table{
         width: 100%;
         height: 100%;
         font-size: 30px;
         color: white;
         border-collapse: collapse;
      }
      th{
         color: #EDD42D;
         font-size: 30px;
      }
      td{
         font-weight: bold;
         color: white;
         font-size: 25px;
      }
      td, th{
         padding: 5px;
         border: 2px solid #53E314;
      }
      header{
         background-color: #942c2c;
      }

      .content{
         text-align: center;
         margin-top: 135px;
         float: left;
         width: 70%;
         /*border: 4px double black;*/
      }
      a:hover{
         color: #EDD42D;
         font-weight: bold;
      }
      .team-menu{
         font-weight: bold;
         padding-left: 25px;
      }
      .team-list{
         display: flex;
         flex-direction: column;
         justify-content: space-around;
         margin-top: 135px;
         float: left;
         height: 500px;
         width: 25%;
         /*border: 4px double black;*/
      }
      .info-team{
         width: 80%;
         height: 500px;
      }
   </style>
</head>
<body>
    <?php include('nav.php') ?>
      <div class="teams">
        <div class="team-list">
            <div class="team">
               <p><?php echo $_LANG['dud_name']; ?></p>
               <div class="team-menu" id ="dud">
               </div>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['prog_name']; ?></p>
               <div class="team-menu" id ="prog">
               </div>>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['una_name']; ?></p>
               <div class="team-menu" id ="una">
               </div>>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['rac_name']; ?></p>
               <div class="team-menu" id ="rac">
               </div>>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['fola_name']; ?></p>
               <div class="team-menu" id ="fola">
               </div>>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['swift_name']; ?></p>
               <div class="team-menu" id ="swift">
               </div>>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['vic_name']; ?></p>
               <div class="team-menu" id ="vic">
               </div>>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['diff_name']; ?></p>
               <div class="team-menu" id ="diff">
               </div>>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['ut_name']; ?></p>
               <div class="team-menu" id ="ut">
               </div>>              
            </div>
            <div class="team">
               <p><?php echo $_LANG['jeun_name']; ?></p>
               <div class="team-menu" id ="jeun">
               </div>>              
            </div>
        </div>
        <div class="content">
            <?php
               if ($contentType == "info_dud") {
                  echo "<iframe src=\"" . $_LANG['dud'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_prog") {
                  echo "<iframe src=\"" . $_LANG['prog'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_una") {
                  echo "<iframe src=\"" . $_LANG['una'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_rac") {
                  echo "<iframe src=\"" . $_LANG['rac'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_fola") {
                  echo "<iframe src=\"" . $_LANG['fola'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_swift") {
                  echo "<iframe src=\"" . $_LANG['swift'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_vic") {
                  echo "<iframe src=\"" . $_LANG['vic'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_diff") {
                  echo "<iframe src=\"" . $_LANG['diff'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_ut") {
                  echo "<iframe src=\"" . $_LANG['ut'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               else if ($contentType == "info_jeun") {
                  echo "<iframe src=\"" . $_LANG['jeun'] . "\" class = \"info-team\" title=\"Iframe Example\"></iframe>";
               }
               function connect(&$conn1){
                  if($conn1 == false)
                  {
                     die("Помилка" . mysqli_connect_error());
                  }
               }
               function sql_op(&$sql1, &$conn1){
                    include('chooselang.php');
                     if($result = mysqli_query($conn1, $sql1)){
                         echo "<table><tr><th>" . $_LANG['name'] . "</th><th>" . $_LANG['surname'] . "</th><th>" . $_LANG['goals'] . "</th><th>" . $_LANG['assists'] . "</th></tr>";
                         foreach($result as $row){
                             echo "<tr>";
                                 echo "<td>" . $row["PlayerNm"] . "</td>";
                                 echo "<td>" . $row["PlayerSn"] . "</td>";
                                 echo "<td>" . $row["Goals"] . "</td>";
                                 echo "<td>" . $row["Assists"] . "</td>";
                             echo "</tr>";
                         }
                         echo "</table>";
                         mysqli_free_result($result);
                     } else{
                         echo "Ошибка: " . mysqli_error($conn1);
                     }
                  mysqli_close($conn1);
               }
               if ($contentType == "stats_dud") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'F91 DUDELANGE') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_prog") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'Progrès Niederkorn') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_una") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'UNA Strassen') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_rac") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamId = 6) ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_fola") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'Fola Esch') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_swift") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'Swift Hesperange') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_vic") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'Victoria Rosport') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_diff") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'Differdange 03') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_ut") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'UT Pétange') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
               else if ($contentType == "stats_jeun") {
                  $conn = mysqli_connect("localhost", "root", "Batuishka123", "football");
                     connect($conn);
                     $sql = "SELECT * FROM `player` WHERE TeamId = (SELECT TeamId FROM team WHERE TeamNm = 'Jeunesse d\'Esch') ORDER BY Goals DESC";
                     sql_op($sql, $conn);
               }
            ?>
        </div>
      </div>
    <?php include('footer.php')?>
    <script type="text/javascript">
        var el = document.getElementsByClassName('team');
        for(var i=0; i<el.length; i++) {
        el[i].addEventListener("mouseenter", showSub, false);
        el[i].addEventListener("mouseleave", hideSub, false);
        };
        function showSub(e) {
            var child1 = this.children[1];
            var text = '<li><a href="teams.php?content=info_' + child1.id + '" id = "info-ref" target = "_self" class = "info" style = "font-size: 1.5em"><?php echo $_LANG['info']; ?></a></li><li><a href="teams.php?content=stats_' + child1.id + '" target = "_self" "class = "stats" style = "font-size: 1.5em"><?php echo $_LANG['stats']; ?></a></li>';
            var child = this.children[1];
            child.innerHTML = text;
        };
        function hideSub(e) {
                var child = this.children[1];
                child.innerHTML = "";
        };
    </script>
</body>
</html>