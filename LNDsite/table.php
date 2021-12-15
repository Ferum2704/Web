<?php
  session_start();
  $sortType = null;
  if(isset($_GET["sort"]) && is_string($_GET["sort"])) {
    $sortType = $_GET["sort"];
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
        header{
                background-color: #942c2c;
        }
        .teams{
            background-image: url("grass1.jpg");
            width: 100%;
            height: 660px;
        }
        .teams-table{
            padding-left: 15%;
            padding-top: 140px;
        }
        a{
            color: #EDD42D;
        }
        a: hover{
            color: black;
        }
        table{
            width: 90%;
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
    </style>
</head>
<body>
    <?php include('nav.php') ?>
    <div class="teams">
        <div class="teams-table">
            <?php
                function connect(&$conn1){
                    if($conn1 == false)
                    {
                        die("Помилка" . mysqli_connect_error());
                    }
                }
                function sql_op(&$sql1, &$conn1){
                    include('chooselang.php');
                        if($result = mysqli_query($conn1, $sql1)){
                            $place = 1;
                            echo "<table><tr><th>" . $_LANG['place'] . "</th><th>" . $_LANG['team-name'] . "</th><th>" . $_LANG['matches'] . "</th><th><a href = \"table.php?sort=wins\" title = \"" . $_LANG['wins'] . "\">" . $_LANG['W'] . "</a></th><th><a href = \"table.php?sort=draws\" title = \"" . $_LANG['draws'] . "\">" . $_LANG['D'] . "</a></th><th><a href = \"table.php?sort=loses\" title = \"" . $_LANG['loses'] . "\">" . $_LANG['L'] . "</a></th><th><a href = \"table.php?sort=points\">" . $_LANG['points'] . "</a></th></tr>";
                            foreach($result as $row){
                                $games = $row["Wins"] + $row["Draws"] + $row["Loses"];
                                $points = 3*$row["Wins"] + 1*$row["Draws"];
                                echo "<tr>";
                                    echo "<td style = \"text-align:center\">" . $place++ . "</td>";
                                    echo "<td style = \"text-align:center\">" . $row["TeamNm"] . "</td>";
                                    echo "<td>" . $games  . "</td>";
                                    echo "<td>" . $row["Wins"] . "</td>";
                                    echo "<td>" . $row["Draws"] . "</td>";
                                    echo "<td>" . $row["Loses"] . "</td>";
                                    echo "<td>" . $points . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_free_result($result);
                        } else{
                            echo "Ошибка: " . mysqli_error($conn1);
                        }
                    mysqli_close($conn1);
                }
                if ($sortType == "wins") {
                    $conn = mysqli_connect("localhost", "lab7user", "lab7password", "website");
                    connect($conn);
                    $sql = "SELECT * FROM `team` ORDER BY Wins DESC";
                    sql_op($sql, $conn);
                }
                else if ($sortType == "draws") {
                    $conn = mysqli_connect("localhost", "lab7user", "lab7password", "website");
                    connect($conn);
                    $sql = "SELECT * FROM `team` ORDER BY Draws DESC";
                    sql_op($sql, $conn);
                }
                else if ($sortType == "loses") {
                    $conn = mysqli_connect("localhost", "lab7user", "lab7password", "website");
                    connect($conn);
                    $sql = "SELECT * FROM `team` ORDER BY Loses DESC";
                    sql_op($sql, $conn);
                }
                else if ($sortType == "points") {
                    $conn = mysqli_connect("localhost", "lab7user", "lab7password", "website");
                    connect($conn);
                    $sql = "SELECT * FROM `team`ORDER BY TeamId";
                    sql_op($sql, $conn);
                }
                else{
                    $conn = mysqli_connect("localhost", "lab7user", "lab7password", "website");
                    connect($conn);
                    $sql = "SELECT * FROM `team`";
                    sql_op($sql, $conn);
                }
            ?>
        </div>
    </div>
    <?php include('footer.php')?>
</body>
</html>
