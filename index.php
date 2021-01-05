<?php
function pdo_connect_mysql() {
  $DATABASE_HOST = 'localhost';
  $DATABASE_USER = 'root';
  $DATABASE_PASS = '';
  $DATABASE_NAME = 'reclamation';
  try {
    return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
  } catch (PDOException $exception) {
    // If there is an error with the connection, stop the script and display the error.
    exit('Failed to connect to database!');
  }
}
$pdo = pdo_connect_mysql();
$msg = '';

if (!empty($_POST)) {
   
    $id = isset($_POST['id']) && !empty($_POST['id']) && $_POST['id'] != 'auto' ? $_POST['id'] : NULL;
    
    $titre = isset($_POST['titre']) ? $_POST['titre'] : '';
    
    $description = isset($_POST['description']) ? $_POST['description'] : '';
    $role = isset($_POST['role']) ? $_POST['role'] : '';
    $created = isset($_POST['created']) ? $_POST['created'] : date('Y-m-d H:i:s');

    $stmt = $pdo->prepare('INSERT INTO reclamation VALUES ( ?,?, ?, ?, ?)');
    $stmt->execute([$id ,$titre, $description, $role, $created]);

    $msg = 'Created Successfully!';
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Classic Style a Ecommerce Online Shopping Category Flat Bootstrap Responsive Website Template | Single :: w3layouts</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Style Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery.min.js"></script>
<!-- //js -->
<!-- cart -->
<script src="js/simpleCart.min.js"></script>
<!-- cart -->
<!-- for bootstrap working -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
<!-- //for bootstrap working -->
<!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,500,600,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,300,700,900' rel='stylesheet' type='text/css'></head>
  
<body>
<!-- header -->
  <div class="header">
      <div class="header-grid">
          <div class="container">
        <div class="header-left animated wow fadeInLeft" data-wow-delay=".5s">
          <ul>
          <li><i class="glyphicon glyphicon-headphones"></i><a href="#">24x7 live support</a></li>
            <li><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">@example.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 892</li>
            
          </ul>
        </div>
        <div class="header-right animated wow fadeInRight" data-wow-delay=".5s">
        <div class="header-right1 ">
          <ul>
    
               <li><i class="glyphicon glyphicon-log-in" ></i><a href="../Logout.php">Logout</a></li>
          </ul>
        </div>
        <div class="header-right2">
          <div class="cart box_1">
            <a href="checkout.html">
              <h3> <div class="total">
                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                <img src="images/cart.png" alt="" />
              </h3>
            </a>
            <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
            <div class="clearfix"> </div>
          </div>  
        </div>
        <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
      </div>
      </div>
      <div class="container">
      <div class="logo-nav">
        
          <nav class="navbar navbar-default">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header nav_2">
            <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
             <div class="navbar-brand logo-nav-left wow fadeInLeft animated" data-wow-delay=".5s">
              <h1 class="animated wow pulse" data-wow-delay=".5s"><a href="index.html">Classic<span>Style</span></a></h1>
            </div>

          </div> 
          <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
            <ul class="nav navbar-nav">
              <li ><a href="index.html" class="act">Home</a></li> 
              <!-- Mega Menu -->
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women <b class="caret"></b></a>
                <ul class="dropdown-menu multi">
                  <div class="row">
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Submenu1</h6>
                        
                        <li><a href="products.html">Accessories</a></li>
                        <li><a href="products.html">Bags</a></li>
                        <li><a href="products.html">Caps & Hats</a></li>
                        <li><a href="products.html">Hoodies & Sweatshirts</a></li>
                    
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Submenu2</h6>
                        <li><a href="products.html">Jackets & Coats</a></li>
                        <li><a href="products.html">Jeans</a></li>
                        <li><a href="products.html">Jewellery</a></li>
                        <li><a href="products.html">Jumpers & Cardigans</a></li>
                        <li><a href="products.html">Leather Jackets</a></li>
                        <li><a href="products.html">Long Sleeve T-Shirts</a></li>

                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Submenu3</h6>
                        <li><a href="products.html">Shirts</a></li>
                        <li><a href="products.html">Shoes, Boots & Trainers</a></li>
                        <li><a href="products.html">Sunglasses</a></li>
                        <li><a href="products.html">Sweatpants</a></li>
                        <li><a href="products.html">Swimwear</a></li>
                        <li><a href="products.html">Trousers & Chinos</a></li>

                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="row-top">
                    <div class="col-sm-6 row1">
                      <a href="products.html"><img src="images/me.jpg" alt="" class="img-responsive"></a>
                    </div>
                    <div class=" col-sm-6 row2">
                      <a href="products.html"><img src="images/me1.jpg" alt="" class="img-responsive"></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </ul>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                <ul class="dropdown-menu multi multi1">
                  <div class="row">
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Submenu1</h6>
                        
                        <li><a href="products1.html">Accessories</a></li>
                        <li><a href="products1.html">Bags</a></li>
                        <li><a href="products1.html">Caps & Hats</a></li>
                        <li><a href="products1.html">Hoodies & Sweatshirts</a></li>
                    
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Submenu2</h6>
                        <li><a href="products1.html">Jackets & Coats</a></li>
                        <li><a href="products1.html">Jeans</a></li>
                        <li><a href="products1.html">Jewellery</a></li>
                        <li><a href="products1.html">Jumpers & Cardigans</a></li>
                        <li><a href="products1.html">Leather Jackets</a></li>
                        <li><a href="products1.html">Long Sleeve T-Shirts</a></li>

                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="multi-column-dropdown">
                        <h6>Submenu3</h6>
                        <li><a href="products1.html">Shirts</a></li>
                        <li><a href="products1.html">Shoes, Boots & Trainers</a></li>
                        <li><a href="products1.html">Sunglasses</a></li>
                        <li><a href="products1.html">Sweatpants</a></li>
                        <li><a href="products1.html">Swimwear</a></li>
                        <li><a href="products1.html">Trousers & Chinos</a></li>

                      </ul>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="row-top">
                    <div class="col-sm-6 row1">
                      <a href="products1.html"><img src="images/me2.jpg" alt="" class="img-responsive"></a>
                    </div>
                    <div class=" col-sm-6 row2">
                      <a href="products1.html"><img src="images/me3.jpg" alt="" class="img-responsive"></a>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </ul>
              </li>
              
                 <li ><a href="index.php">index</a></li>
                         <li ><a href="indexGest.php">indexGest</a></li>
            </ul>
          </div>
          </nav>
        </div>
        
    </div>
  </div>
<!-- //header -->
<!--banner-->
<div class="banner-top">
  <div class="container">
    <h2 class="animated wow fadeInLeft" data-wow-delay=".5s">Single</h2>
    <h3 class="animated wow fadeInRight" data-wow-delay=".5s"><a href="index.html">Home</a><label>/</label>Single</h3>
    <div class="clearfix"> </div>
  </div>
</div>
  <!--content-->
   <div class="container">
          <h3 class="title">Basic Elements</h3>

          <div id="inputs">
      
            <p class="category">Creer Reclamation</p>
            <div class="col-md-6">
            <form action="index.php" method="post">
              <div >
                <div class="form-group has-successform-group has-success">
                  <input type="text"  name="titre" placeholder="titre reclamation" class="form-control" required />
                </div>
              </div>
              <div >
                <div class="form-group has-success">
                  <input type="text" name="description" placeholder="description reclamation" class="form-control form-control-success" required />
                </div>
              </div>
              <div >
                <div class="form-group has-success">
                  <input type="hidden"  name="role" value="host"  />
                      </div>
              </div>
        
                <div class="input-group">
                  <div class="input-group-prepend has-success">
                    <span class="input-group-text"><i class="fa fa-user-circle"></i></span>
                  </div>
                  <input type="datetime-local" name="created"  value="<?=date('Y-m-d\TH:i')?>"  class="form-control" placeholder="Left Font Awesome Icon" required>
                </div>
                <br>
             <div class="input-group">
                 <button class="btn btn-success" type="submit">valider</button>
           
           <button class="btn btn-danger" type ="reset">annuler </button>
 
              
                <a href='consulterRecHost.php' class='btn btn-premiere'>consulter mes reclamations</a>
          
                </div>
            
            </div>
              
          
           </form>
           <?php if ($msg): ?>
           <p><?=$msg?></p>
            <?php endif; ?>
          </div>
       
      </div>
 
    </div>
        <!--//products-->
<div class="social animated wow fadeInUp" data-wow-delay=".1s">
  <div class="container">
    <div class="col-sm-3 social-ic">
      <a href="#">FACEBOOK</a>
    </div>
    <div class="col-sm-3 social-ic">
      <a href="#">TWITTER</a>
    </div>
    <div class="col-sm-3 social-ic">
      <a href="#">GOOGLE+</a>
    </div>
    <div class="col-sm-3 social-ic">
      <a href="#">PINTEREST</a>
    </div>
  <div class="clearfix"></div>
  </div>
</div>

<!-- footer -->
  <div class="footer">
    <div class="container">
    <div class="footer-top">
    <div class="col-md-9 footer-top1">
    <h4>Duis aute irure dolor in reprehenderit in voluptate </h4>
    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.Excepteur sint occaecat cupidatat 
            non proident Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
    </div>
    <div class="col-md-3 footer-top2">
    <a href="contact.html">Contact Us</a>
    </div>
    <div class="clearfix"> </div>
    </div>
      <div class="footer-grids">
        <div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".5s">
          <h3>About Us</h3>
          <p>Duis aute irure dolor in reprehenderit in voluptate velit esse.<span>Excepteur sint occaecat cupidatat 
            non proident, sunt in culpa qui officia deserunt mollit.</span></p>
        </div>
        <div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".6s">
          <h3>Contact Info</h3>
          <ul>
            <li><i class="glyphicon glyphicon-map-marker" ></i>1234k Avenue, 4th block, <span>New York City.</span></li>
            <li class="foot-mid"><i class="glyphicon glyphicon-envelope" ></i><a href="mailto:info@example.com">info@example.com</a></li>
            <li><i class="glyphicon glyphicon-earphone" ></i>+1234 567 567</li>
          </ul>
        </div>
        <div class="col-md-4 footer-grid animated wow fadeInLeft" data-wow-delay=".7s">
        <h3>Sign up for newsletter </h3>
        <form>
          <input type="text" placeholder="Email"  required="">
          <input type="submit" value="Submit">
        </form>
      
        </div>
      
        <div class="clearfix"> </div>
      </div>
      
      <div class="copy-right animated wow fadeInUp" data-wow-delay=".5s">
        <p>&copy 2016 Classic Style. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
      </div>
    </div>
  </div>
<!-- //footer -->
<script src="js/imagezoom.js"></script>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script defer src="js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>


</body>
</html>