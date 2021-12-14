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