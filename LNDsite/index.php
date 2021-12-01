<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
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
  <body>
    <div id = "generalHeader">
      <div id="mobileLogo">FootballLeague</div>
      <header>
        <div id="logo"><span>FootballLeague</span></div>
        <div id="menu">
          <a href="#">Новини</a>
          <a href="#">Команди</a>
          <a href="#">Турнірна таблиця</a>
          <a href="#">Про нас</a>
        </div>
        <div id="login">
          <a href="#">Увійти</a>
          <a href="#">Зареєструватися</a>
        </div>
      </header>
   </div>

    <div id="firstImage">        
        <div id="arc-wrapper" class="arc-wrapper">
          <h3>Luxembourg National Division</h3>
        </div>
      <h1>Веб-сайт</h1>
      <h3>ліги з футболу</h3>
       <p id="note"></p>
    </div>

    <div id="secondImage">
      <h2>Про нас</h2>
      <p align = "justify">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque dignissim orci eget consequat placerat.
     Cras vehicula, quam et efficitur rhoncus, magna nisl convallis massa, sed semper tortor nunc sit amet ex. Integer
     vehicula viverra sem id egestas. Quisque risus libero, bibendum ac leo sed, pellentesque mattis mi.
     Duis congue ipsum eu urna fermentum, ut porttitor quam volutpat.
     Donec vel dolor et tellus mollis lacinia. Quisque commodo nec mauris id sollicitudin.
     Maecenas placerat nunc vitae justo egestas mollis. Nam eu vulputate quam.
     Morbi porttitor pulvinar risus, blandit efficitur lacus efficitur in.
     In consectetur interdum lacus, non efficitur nulla sagittis ac. Aenean mollis risus eget porttitor maximus.
      </p>
      <div id="inMoreDetailsButton"><a href = "#">Детальніше</a></div>
    </div>

    <div id="formLoginDiv">
      <form action="" id="formLogin" method="post">
        <h3>Авторизація</h3>
        <label for="name">Ім'я користувача</label><br>
        <input type="text" placeholder="Введіть ім'я користувача" name = "name" id = "name"><br>
        <label for="password">Пароль</label><br>
        <input type="password" placeholder="Введіть пароль" name = "password" id = "password"><br>
        <div id="progressbar"></div><span id='per'>0</span>%
        <button type="submit" name = "done">Увійти</button>
      </form>
    </div>

    <footer>
      Brigada8, IS-03 production &copy 2021
    </footer>

    <script>
      // Fixed header while scrolling
      window.onscroll = function showHeader() {
        var header = document.querySelector("#generalHeader");
        if(window.pageYOffset > 0) {
          header.classList.add("headerFixed");
        }
        else {
          header.classList.remove("headerFixed");
        }
      }

      // Scroll top after tapping logo button
      const logo = document.querySelector("#logo");
      logo.onclick = function scrollTop() {
        window.scrollTo(0, 0);
      }
      const mobileLogo = document.querySelector("#mobileLogo");
      mobileLogo.onclick = function scrollTop() {
        window.scrollTo(0, 0);
      }
    </script>

    <script type="text/javascript">
    
      var $word1    = $('#arc-wrapper').find('h3').hide();
      
      google.load('webfont','1');
      
      google.setOnLoadCallback(function() {
        WebFont.load({
          google    : {
            families  : ['Montserrat','Concert One']
          },
          fontactive  : function(fontFamily, fontDescription) {
            init();
          },
          fontinactive  : function(fontFamily, fontDescription) {
            init();
          }
        });
      });
      
      function init() {
      
        $word1.show().arctext({radius: 150});
      
      };
    </script>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Complexify -->
    <script src="jquery.complexify.js/jquery.complexify.banlist.js" type="text/javascript"></script>
    <script src="jquery.complexify.js/jquery.complexify.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function(){
     // Initialize Progressbar
     $("#progressbar").progressbar({value: 0});

     // Initialize complexify
     $("#password").complexify({}, 
      function (valid, complexity) { //show de password level
       // Show percentage
       $('#per').text(Math.round(complexity));
       // Initialize Progressbar
       $( "#progressbar" ).progressbar({
        value: complexity
       });
      }
     );
    });
    </script>

    <script src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script src="assets/countdown/jquery.countdown.js"></script>
    <script src="assets/js/script.js"></script>
  </body>
</html>
