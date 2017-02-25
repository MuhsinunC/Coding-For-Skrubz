<html>
<head>
  <!-- Load jQuery -->
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
  <!-- Materialize-CSS -->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
  <!-- Import Google Icon Font -->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Load Custom.css -->
    <link href="./res/css/custom.css" rel="stylesheet">
  <!-- Load Parallax Script -->
    <script>
      $(document).ready(function(){
        $('.parallax').parallax();
      });
    </script>
</head>

<body>
  <div class="row" style="margin-bottom: auto;">
    <nav>
      <div class="nav-wrapper orange darken-2">
        <div class="col s12">
          <a href="#" class="brand-logo">Coding For Skrubz</a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="#">About</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <div class="parallax-container">
    <div class="parallax"><img src="./res/img/parallax1.jpg"></div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col s12">
        <center><h2>Services</h2></center>
          <div class="col s4">
            <div class="center promo">
              <i class="material-icons">computer</i>
              <p class="promo-caption">Always online</p>
              <p class="light center">Our servers have a 99.9% uptime... SIKE!!!</p>
            </div>
          </div>
          <div class="col s4">
            <div class="center promo">
              <i class="material-icons">group</i>
              <p class="promo-caption">Excellent staff</p>
              <p class="light center">Our staff are extremely friendly and helpful... but online if you give them a chip or two...</p>
            </div>
          </div>
          <div class="col s4">
            <div class="center promo">
              <i class="material-icons">create</i>
              <p class="promo-caption">Quality content</p>
              <p class="light center">We only offer the best content to our viewers.</p>
            </div>
          </div>
      </div>
    </div>
  </div> <!-- /Container -->

  <div class="parallax-container">
    <div class="parallax"><img src="./res/img/parallax2.jpg"></div>
  </div>

  <footer class="page-footer orange">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">Coding For Skrubz</h5>
          <p class="grey-text text-lighten-4">This website was made completely during the <a href="https://www.youtube.com/watch?v=r8ZhNJU6xt0&list=PL9qZcf9EMev0ybg2FFBUFwcoc9eL5teM0&index=1" target="_blank">Coding For Skrubz tutorial series</a>!</p>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
      © 2017 Copyright <a href="http://muhsinunc.ml/" target="_blank">MuhsinunC</a>
      </div>
    </div>
  </footer>
</body>
</html>
