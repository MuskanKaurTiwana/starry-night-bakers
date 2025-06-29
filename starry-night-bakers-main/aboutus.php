<?php
session_start();
?>

<html>

  <head>
    <title> About | STARRY NIGHT BAKERS </title>
    <link rel="icon" href="images/LogoImage.png" type="image/icon type">
    <style>
      h3   {color: white;text-align:center;font-weight:bolder;}
      p    {color: white;text-align:center;}
    </style>
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/aboutus.css">
  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>

  <body>

  
    <button onclick="topFunction()" id="myBtn" title="Go to top">
      <span class="glyphicon glyphicon-chevron-up"></span>
    </button>
  
    <script type="text/javascript">
      window.onscroll = function()
      {
        scrollFunction()
      };

      function scrollFunction(){
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>

    <nav class="navbar navbar-inverse navbar-fixed-top navigation-clean-search" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">STARRY NIGHT BAKERS</a>
        </div>

        <div class="collapse navbar-collapse " id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li class="active"><a href="aboutus.php">About</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
          </ul>

<?php
if(isset($_SESSION['login_user1'])){

?>


          <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user1']; ?> </a></li>
            <li><a href="myrestaurant.php">MANAGER CONTROL PANEL</a></li>
            <li><a href="logout_m.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
<?php
}
else if (isset($_SESSION['login_user2'])) {
  ?>
           <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['login_user2']; ?> </a></li>
            <li><a href="foodlist.php"><span class="glyphicon glyphicon-cutlery"></span> Food Zone </a></li>
            <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span> Cart 
            (<?php
              if(isset($_SESSION["cart"])){
              $count = count($_SESSION["cart"]); 
              echo "$count"; 
            }
              else
                echo "0";
              ?>)
            </a></li>
            <li><a href="logout_u.php"><span class="glyphicon glyphicon-log-out"></span> Log Out </a></li>
          </ul>
  <?php        
}
else {

  ?>

<ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Sign Up <span class="caret"></span> </a>
                <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
          
            </ul>
            </li>

            <li><a href="#" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> Login <span class="caret"></span></a>
              <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>

            </ul>
            </li>
          </ul>

<?php
}
?>
        </div>
      </div>
    </nav>

    <div class="wide">
        
        <div class="tagline">It's not our <font color="#bd96e7"><strong>work life</strong></font>, it's our <font color="#bd96e7"><strong><em>life's work</em>.</strong></font></div>
        <h3 style="color: white;text-align:center;font-weight:bolder;">About the food culture in STARRY NIGHT BAKERS</h3>
        <br>
        
<h3 style="color:white;">Welcome to STARRY NIGHT BAKERS!</h3>
<h3 style="color:white;">About Starry Night Bakers</h3>
<p>
Welcome to Starry Night Bakers, where we believe every bite should be a delicious adventure under the twinkling light of creativity! We're not your average bakery; we craft savory sensations that are the talk of the town.
</p>
<h3 style="color:white;">Our Story</h3>
<p>
Starry Night Bakers started as a dream, a dream of creating a haven for those who crave extraordinary flavor experiences.  Our founders, Ananya and Muskan, embarked on a journey to transform fresh, high-quality ingredients into irresistible savory masterpieces.
From humble beginnings, we've grown into a local favorite, but our core values remain the same: using the finest ingredients, following time-tested techniques, and injecting a sprinkle of creativity into everything we bake.
</p>
<h3 style="color:white;">Our Mission</h3>
<p>
We are dedicated to exceeding your expectations. We strive to bake not just pastries, but memories. Whether you're looking for the perfect midday pick-me-up, a show-stopping centerpiece for your next gathering, or a delectable gift for a loved one, Starry Night Bakers is your one-stop shop for handcrafted savory delights.
</p><br>
<h3 style="color:white;">Our Commitment</h3>
<p>
We are committed to using only the freshest, locally sourced ingredients whenever possible. We believe in supporting our community and in offering the best possible flavor experience to our customers.
Come visit us and experience the Starry Night Bakers difference!
We are the stars of savory, and we can't wait to share our creations with you!
        </p>
        <div class="map">
          <div class="ifr">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6860.986991146954!2d76.76711663603781!3d30.704524083511032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fec5bb9717a3d%3A0xa8e966997bd81666!2sGoswami%20Ganesh%20Dutta%20Sanatan%20Dharma%20College!5e0!3m2!1sen!2sin!4v1709365131152!5m2!1sen!2sin" width="200" height="150" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> 
          </div>
          <div class="ifr2">
            <p><a href="https://ggdsd.ac.in/">
            Address: 221-B BAKERS STREET, MOHALI, EARTH</a>
            </p>
          </div>
        

        </div>
        
    </div>

    
         </body>
</html>