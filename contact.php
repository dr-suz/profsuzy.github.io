<!DOCTYPE HTML>
<html>

<head>
  <title>Suzanne's website</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
    <header>
      <div id="logo"><h1>S.Thornton</h1></div>
      <nav>
        <ul class="lavaLampWithImage" id="lava_menu">
          <li><a href="index.html">home</a></li>
          <li><a href="about.html">about me</a></li>
          <li><a href="portfolio.html">my portfolio</a></li>
          <li><a href="fun.html">just for fun</a></li> 
          <li class="current"><a href="contact.php">contact</a></li>
        </ul>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div> <!-- id="gallery"> -->
          <ul class="images">
            <li class="show"> <!--<img width="450" height="450" src="images/1.jpg" alt="photo_one" /></li>
            <li><img width="450" height="450" src="images/2.jpg" alt="photo_two" /></li> -->
            <li><img width="450" height="450" src="images/3.jpg" alt="photo_three" /></li>
            <!-- <li><img width="450" height="450" src="images/4.jpg" alt="photo_four" /></li>
            <li><img width="450" height="450" src="images/5.jpg" alt="photo_five" /></li> -->
          </ul>
        </div>
      </div>
      <div id="content">
        <h1>Contact</h1>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <form action="submit.php" method="POST">
              <p>Name</p> <input type="text" name="name" class="input">
              <p>Email</p> <input type="email" name="email" class="input">
              <p>Message</p><textarea name="message" rows="6" cols="25" class="input"></textarea><br />
              <input type="submit" value="Send">
            </form>
          </div>
        </form>
      </div>
    </div>
    <footer>
      <p><a href="index.html">home</a> | <a href="about.html">about me</a> | <a href="portfolio.html">my portfolio</a> | <a href="fun.html">just for fun</a> --> | <a href="contact.php">contact</a></p>
      <p>&copy; 2012 my portfolio two. All Rights Reserved. | <a href="http://www.css3templates.co.uk">design from css3templates.co.uk</a></p>
    </footer>
  </div>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/jquery.easing.min.js"></script>
  <script type="text/javascript" src="js/jquery.lavalamp.min.js"></script>
  <!-- <script type="text/javascript" src="js/image_fade.js"></script> -->
  <script type="text/javascript">
    $(function() {
      $("#lava_menu").lavaLamp({
        fx: "backout",
        speed: 700
      });
    });
  </script>
</body>
</html>

