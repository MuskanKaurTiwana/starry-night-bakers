<?php
session_start();
?>

<html>

  <head>
    <title> Home | STARRY NIGHT BAKERS </title>
    <link rel="icon" href="images/LogoImage.png" type="image/icon type">
  </head>

  <link rel="stylesheet" type = "text/css" href ="css/bootstrap.min.css">

  <link rel="stylesheet" type = "text/css" href ="css/index.css">

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
            <li class="active" ><a href="index.php">Home</a></li>
            <li><a href="aboutus.php">About</a></li>
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
            <li><a href="managerlogin.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span> Admin Login <span class="caret"></span> </a>
                <!-- <ul class="dropdown-menu">
              <li> <a href="customersignup.php"> User Sign-up</a></li>
              <li> <a href="managersignup.php"> Manager Sign-up</a></li>
            
            </ul> -->
            </li>

            <li><a href="customerlogin.php" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-log-in"></span> User Login <span class="caret"></span></a>
              <!-- <ul class="dropdown-menu">
              <li> <a href="customerlogin.php"> User Login</a></li>
              <li> <a href="managerlogin.php"> Manager Login</a></li>
              
            </ul> -->
            </li>
          </ul>

<?php
}
?>
       </div>

      </div>
    </nav>

    <div class="wide">
      
      <div class="tag2" style="border-bottom: 2px solid White; margin-top:12vh;">
      <img src="images/Logo1.png" style="border-bottom: 2px solid White;">
      </div>
      <div class="tag1">
      <p class="tagline">STARRY NIGHT BAKERS</p>
      </div>
    </div>
    <div class="orderblock">
    <h2 style="color:white;font-weight:bolder;">Feeling Hungry?</h2>
    <center><a class="btn btn-lg" href="customerlogin.php" role="button" style="color:black; background-color:#8872b1"> Order Now </a></center>
    </div>

    
  
</body>
</html>