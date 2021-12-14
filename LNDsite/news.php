<!DOCTYPE html>
<html lang="en">
<head>
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
</head>
<style>
    .main{
    width: 100%;
    background-image: url("img0.jpg");
    background-size: cover;
    background-blend-mode: multiply;
    background-color: #36714d;
    font-family: Verdana;
    background-attachment: fixed;
    padding-top: 10%;
    padding-bottom: 10%;}
    section, article{
        padding-left: 10%;
        padding-right: 10%;
        margin: auto;
        color: white;
        text-align:center;
    }
    article{

        margin:5%;
        padding:10%;
        background: white;
        color: black;
        border-radius: 40px;
    }
    article>a{
        color: blue;

    }
    .moreNews{
        display: inline;
        background: red;
        padding:10px;
        border-radius: 4px;
        width: 60px;
    }

</style>
<body>
    <?php include('nav.php') ?>
<div class="main">
    <section><h1>NEWS</h1>
    <article>
        <h2>Progres outclassed by Dudelange</h2>
        <p>After long period of time without wins Dudelange outclassed the leader of the season. </p> <a href="#">Read more... </a>
    </article>
    <article>
        <h2>Sad times</h2> <p>All luxembouirgish clubs end up playing in European tournaments</p> <a href="#">Read more... </a>
    </article>
    <article>
        <h2>Historical achievement for Luxembourg national team</h2> <p></p> <a href="#">Read more... </a>
    </article>
    <article>
    <h2>"Wiltz 91" won the first match from the begining of the season</h2> <p></p> <a href="#">Read more... </a>
    </article>
    <div class="moreNews" ><a href="#">More</a></div>
</section>
    
</div>
    <?php include('footer.php')?>
</body>
</html>