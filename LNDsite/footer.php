<style>
.language{
  width: 40px; height: 30px;
  
}
.footer-list li{
    list-style-type: none;
    display: inline;
}
ul.footer-list{
  padding-right: 20px;
  text-align: right;
}

</style>
<footer>
      Brigada8, IS-03 production &copy 2021
      
      <ul class="footer-list">
        <li class="footer-item-lang-en" > <a href="index.php?lang=en"><img class="language" src="flags/gbflag.png" alt="en"></a> </li>
        <li class="footer-item-lang-ua"><a href="index.php?lang=ua"><img class="language" src="flags/uaflag.svg" alt="ua"></a></li>
        <li class="footer-item-lang-ru"> <a href="index.php?lang=ru"><img class="language" src="flags/ruflag.png" alt="ru"></a> </li>
      </ul>
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
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!-- jQuery UI -->
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    
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