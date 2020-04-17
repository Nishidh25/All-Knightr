<!DOCTYPE html>
<html>
<?php session_start(); ?>
<title>All Knightr</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<link href="style.css" type="text/css" rel="stylesheet" />
<style>
html, body, h1, h2, h3, h4, h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.mySlides {display:none}
.watermark {
    opacity: 0.45;
    color: BLACK;
    position: fixed;
    bottom: 1;
    right: 0;
}

dropdn {
  float: left;
}

.textw {
  color: #ffffff;
}

.textb {
  color: #000000;
}

dropdn a, .dropbtn {
  display: inline-block;
  color: white;
  text-align: left;
  padding: 0px 0px;
  text-decoration: none;
}

dropdn a:hover, .dropdown:hover .dropbtn {
  background-color: #fffff;
}

dropdn.dropdown {
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 130px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  right : 0;
}

.dropdown-content a:hover {background-color: #f1f1f1;}

.dropdown:hover .dropdown-content {
  display: block;
}

.error{
 color:red;

}


footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}


.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: Poppins;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  background-color: #ffff;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}



body {
background: #4a148c;
  
  background-attachment: fixed; 
  background-size: cover;
  }

#container{
  box-shadow: 0 15px 30px 1px rgba(128, 128, 128, 0.31);
  background: rgba(255, 255, 255, 0.90);
  text-align: center;
  border-radius: 5px;
  overflow: hidden;
  margin: 5em auto;
  height: 650px;
  width: 1100px;
  
}



/*  Product details  */
.product-details {
  position: relative;
  text-align: left;
  overflow: hidden;
  padding: 30px;
  height: 100%;
  float: left;
  width: 50%;

}

/*  Product Name */
#container .product-details h1{
  font-family: 'Poppins', sans-serif;
  display: inline-block;
  position: relative;
  font-size: 34px;
  color: #344055;
  margin: 0;
  
}


/*Product Rating  */
.hint-star {
  display: inline-block;
  margin-left: 0.5em;
  color: gold;
  width: 50%;
}


/* The most important information about the product */
#container .product-details > p {
  font-family: 'Poppins', cursive;
  text-align: center;
  font-size: 20px;
  color: #7d7d7d;
  
}

/* control */

.control{
  position: relative;
  bottom: 0%;
  left: 35%;
  
}
/* the Button */
.btn {
  transform: translateY(0px);
  transition: 0.3s linear;
  background: #49C608;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  outline: none;
  border: none;
  color: #eee;
  padding: 0;
  margin: 0;
  
}

.btn:hover{transform: translateY(-4px);}

.btn span {
  font-family: 'Farsan', cursive;
  transition: transform 0.3s;
  display: inline-block;
  padding: 10px 10px;
  font-size: 1.2em;
  margin:0;
  
}
/* shopping cart icon */
.btn .price, .shopping-cart{
  background: #333;
  border: 0;
  margin: 0;
  color: #ffffff;
}

.btn .price {
  transform: translateX(-10%); padding-right: 15px;
}

/* the Icon */
.btn .shopping-cart {
  transform: translateX(-110%);
  position: absolute;
  background: #333;
  z-index: 1;
  left: 0;
  top: 0;
}

/* buy */
.btn .buy {z-index: 3;}

.btn:hover .price {transform: translateX(-110%);}

.btn:hover .shopping-cart {transform: translateX(0%);}



/* product image  */
.product-image {
  transition: all 0.3s ease-out;
  display: inline-block;
  position: relative;
  overflow: hidden;
  height: 100%;
  float: right;
  width: 45%;
  display: inline-block;
}

#container img {width: 100%;height: 100%;}

.info {
    background: rgba(27, 26, 26, 0.9);
    font-family: 'Farsan', cursive;
    transition: all 0.3s ease-out;
    transform: translateX(-100%);
    position: absolute;
    line-height: 1.9;
    text-align: left;
    font-size: 120%;
    cursor: no-drop;
    color: #FFFFFF;
    height: 100%;
    width: 100%;
    left: 0;
    top: 0;
}
.info h2 {text-align: center}
.product-image:hover .info{transform: translateX(0);}
.info ul li{transition: 0.3s ease;}
.info ul li:hover{transform: translateX(50px) scale(1.3);}
.product-image:hover img {transition: all 0.3s ease-out;}
.product-image:hover img {transform: scale(1.2, 1.2);}
body{
color: #ffffff;
}


#snackbar {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 45px;
  font-size: 17px;
}


#snackbar1 {
  visibility: hidden;
  min-width: 250px;
  margin-left: -125px;
  background-color: #333;
  color: #fff;
  text-align: center;
  border-radius: 2px;
  padding: 16px;
  position: fixed;
  z-index: 1;
  left: 50%;
  bottom: 45px;
  font-size: 17px;
}

#snackbar1.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}


#snackbar.show {
  visibility: visible;
  -webkit-animation: fadein 0.5s, fadeout 0.5s 2.5s;
  animation: fadein 0.5s, fadeout 0.5s 2.5s;
}

@-webkit-keyframes fadein {
  from {bottom: 0; opacity: 0;} 
  to {bottom: 45px; opacity: 1;}
}

@keyframes fadein {
  from {bottom: 0; opacity: 0;}
  to {bottom: 45px; opacity: 1;}
}

@-webkit-keyframes fadeout {
  from {bottom: 30px; opacity: 1;} 
  to {bottom: 0; opacity: 0;}
}

@keyframes fadeout {
  from {bottom: 30px; opacity: 1;}
  to {bottom: 0; opacity: 0;}
}


.imageshow{

  margin: 80px auto;
  position: relative;
  max-width: 77%;
  height: 85%;
  padding: 5px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4)
}


.imagesize{

  width: 1150px;
  height: 650px;
  }

.mySlides {
  display:none;
  border:2px;
}
</style>
<body>











<?php 
if(isset($_SESSION['name'])) {
    $session1="Welcome ".$_SESSION['name'];
} else $session1="Account";
if(isset($_SESSION['name'])) {
    $session2="Your membership status ".$_SESSION['memb'];
} else $session2="";
if(isset($_SESSION['balance'])) {
    $sessionbal="Account balance ".$_SESSION['balance'];
} else $sessionbal="Login to see your balance";

?>

<?php
require_once("dbcontroller.php");
$db_handle = new DBController();
if(!empty($_GET["action"])) {
switch($_GET["action"]) {
  case "add":
    if(!empty($_POST["quantity"])) {
      $productByCode = $db_handle->runQuery("SELECT * FROM tblproduct WHERE code='" . $_GET["code"] . "'");
      $itemArray = array($productByCode[0]["code"]=>array('name'=>$productByCode[0]["name"], 'code'=>$productByCode[0]["code"], 'quantity'=>$_POST["quantity"], 'price'=>$productByCode[0]["price"], 'image'=>$productByCode[0]["image"],'desc'=>$productByCode[0]["desc"]));
      
      if(!empty($_SESSION["cart_item"])) {
        if(in_array($productByCode[0]["code"],array_keys($_SESSION["cart_item"]))) {
          foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode[0]["code"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
          }
        } else {
          $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
        }
      } else {
        $_SESSION["cart_item"] = $itemArray;
      }
    }
  break;
  case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
          if($_GET["code"] == $k)
            unset($_SESSION["cart_item"][$k]);        
          if(empty($_SESSION["cart_item"]))
            unset($_SESSION["cart_item"]);
      }
    }
  break;
  case "empty":
    unset($_SESSION["cart_item"]);
  break;  
}
}
?>








<div class="watermark"><?php echo $session1; ?></div>






<div class="w3-sidebar w3-bar-block w3-card w3-blue" style="width:300px">
  <h3 class="w3-bar-item w3-animate-opacity"><b>All Knightr</b></h4>
  <br class="w3-bar-item">
  <button class="w3-bar-item w3-button tablink w3-animate-top testbtn" onclick="openCity(event ,'Home')">  Home </button>
  <button class="w3-bar-item w3-button tablink w3-animate-top " onclick="openCity(event ,'games')">  Games</button>
  <button class="w3-bar-item w3-button tablink w3-animate-top " onclick="openCity(event ,'Cart')">  Cart</button>
  <button class="w3-bar-item w3-button tablink w3-animate-top " onclick="openCity(event ,'membership')">  Membership</button>
  <button class="w3-bar-item w3-button tablink w3-animate-top " onclick="openCity(event ,'credits')">  About Us</button>
  <button class="w3-bar-item w3-button tablink w3-animate-top" onclick="signin()"><?php echo $session1;?></button>
</div>


<div style="margin-left:300px">


<div id="Home" class="w3-container city w3-animate-left">
  
  <div class="w3-padding" align="left">
 <!-- <img src="images/.jpg" width="75" height="75" align="right">-->
  <div class="w3-container" style="margin-top:30px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Welcome.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
<div><h3>The best offers, new games and AAA titles. Buy best selling video games for cheaper prices, the best deals on the planet.</h3></div>
<br>
<br>
<br>
<div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel"  data-interval="2500">

    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>


    <div class="carousel-inner">

      <div class="item active">
        <img src="/images/cp.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Cyberpunk 2077</h3>
          <p>Pre-order now</p>
        </div>
      </div>

      <div class="item">
        <img src="/images/sw.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Star Wars Jedi: Fallen Order</h3>
          <p>Releases 15 November 2019</p>
        </div>
      </div>
    
      <div class="item">
        <img src="/images/anth.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Anthem</h3>
          <p>15% off</p>
        </div>
      </div>

      <div class="item">
        <img src="/images/nfsh.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Need for Speed: Heat</h3>
          <p>BURN ALL LIMITS</p>
        </div>
      </div>

      <div class="item">
        <img src="/images/bdl.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Borderlands 3</h3>
          <p>MAKE SOME MAYHEM</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

</div>
</div>

</div>














<div id="games" class="w3-container city w3-animate-left" style="display:none">

  <div class="w3-container" id="packages" style="margin-top:30px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Games.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
<?php 
  $product_array = $db_handle->runQuery("SELECT * FROM tblproduct ORDER BY id ASC");
  if (!empty($product_array)) { 
    foreach($product_array as $key=>$value){
  ?>


<div id="container">  
    <form method="post" action="tabs.php?action=add&code=<?php echo $product_array[$key]["code"];  ?>">

  <div class="product-details">
  <h1><?php echo $product_array[$key]["name"];?></h1>
  <hr style="width:50px;border:5px solid skyblue" class="w3-round">

  <p class="information"><?php echo $product_array[$key]["desc"];?></p>
 

<div class="control">
  <button class="btn" value="Add to Cart" type="submit" onclick="Alert();">
   <span class="price"><?php echo "  ₹".$product_array[$key]["price"]; ?></span>
   <span class="shopping-cart"><i class="fa fa-shopping-cart " aria-hidden="true"></i></span>
   <span class="buy">Add to cart</span>
 </button>

</div>
<br>    
<input type="hidden" class="product-quantity" name="quantity" value="1" size="2" />
<!-- <input type="text" class="product-quantity" name="quantity" value="1" size="2" />  -->
</div>  
    

  
<div class="product-image">
  <img src="<?php echo $product_array[$key]["image"]; ?>">
<div class="info">
  <br>
  <h2>Details</h2>
  <br>
  <ul>
    <li><strong>Developer: </strong><?php echo $product_array[$key]["dev"]; ?></li>
    <li><strong>Release Date: </strong><?php echo $product_array[$key]["date"]; ?></li>
    <li><strong>Platform: </strong><?php echo $product_array[$key]["platform"]; ?></li>
    <li><strong>IGN Rating: </strong><?php echo $product_array[$key]["rating"]; ?></li>
    <li><strong>Size: </strong><?php echo $product_array[$key]["size"]; ?></li>
  </ul>
</div>
</div>
  </form>
</div>
  <?php
    }
  }
  ?>
</div>
</div>










<div id="Cart" class="w3-container city w3-animate-left" style="display:none">
<div id="shopping-cart">
    <h1 class="w3-xxxlarge w3-text-red"><b>Shopping Cart.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

<a id="btnEmpty" href="tabs.php?action=empty">Empty Cart</a>
<?php
if(isset($_SESSION["cart_item"])){
    $total_quantity = 0;
    $total_price = 0;
    $_SESSION["total_price"]= $total_price;
?>  

<table class="tbl-cart textb" cellpadding="10" cellspacing="5">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">Code</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:right;" width="10%">Price</th>
<th style="text-align:center;" width="5%">Remove</th>
</tr> 
<?php   
    foreach ($_SESSION["cart_item"] as $item){
        $item_price = $item["quantity"]*$item["price"];
    ?>
        <tr>
        <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
        <td><?php echo $item["code"]; ?></td>
        <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
        <td  style="text-align:right;"><?php echo "Rs.".$item["price"]; ?></td>
        <td  style="text-align:right;"><?php echo "Rs". number_format($item_price,2); ?></td>
        <td style="text-align:center;"><a href="tabs.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
        </tr>
        <?php
        $total_quantity += $item["quantity"];
        $total_price += ($item["price"]*$item["quantity"]);
        $_SESSION["total_price"]=$total_price;
    }
    ?>

<tr>
<td colspan="2" align="right">Total:</td>
<td align="right"><?php echo $total_quantity; ?></td>
<td align="right" colspan="2"><strong><?php echo "Rs.".number_format($total_price, 2); ?></strong></td>
<td></td>
</tr>
</tbody>
</table>    
  <?php
} else {
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
<?php  
if (isset($total_price)) {
?>  
  <a id='btnEmpty' onclick="<?php if(!isset($_SESSION['name'])){ echo 'snackbar1();'; }else echo 'confirm1();'; ?>" >Proceed to payment</a>

<div id="snackbar1">Login first</div>

<?php
}
?>
</div>  
</div>








<div id="membership" class="w3-container city w3-animate-left" style="display:none">
  <div class="w3-container" style="margin-top:30px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Membership.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Gaming subscription. There are two tiers of membership, Basic and Premium</p>
  </div>

<?php
function setsess($var1){
$_SESSION['amt']=$var1;
$_SESSION['memb']='Premium';
}
?>
  <div class="w3-row-padding">
    <div class="w3-half w3-margin-bottom">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-dark-grey w3-xlarge w3-padding-32">Basic</li>
        <li class="w3-padding-16">-</li>
        <li class="w3-padding-16">Early access to upcoming games</li>
        <li class="w3-padding-16">10-hour trial</li>
        <li class="w3-padding-16">5% off on purchases</li>
        <li class="w3-padding-16">
          <h2>Rs.399.00</h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-white w3-padding-large w3-hover-black" onclick="<?php if(!isset($_SESSION['name'])){ echo 'snackbar();'; }else{  setsess(399); echo'memb();';}?>">Sign Up</button>
        </li>
      </ul>
    </div>
        
    <div class="w3-half">
      <ul class="w3-ul w3-light-grey w3-center">
        <li class="w3-red w3-xlarge w3-padding-32">Premium</li>
        <li class="w3-padding-16">Extra content included with new games</li>
        <li class="w3-padding-16">Early access to upcoming games</li>
        <li class="w3-padding-16">Full game</li>
        <li class="w3-padding-16">15% off on purchases</li>
        <li class="w3-padding-16">
          <h2>Rs.999.00 </h2>
          <span class="w3-opacity">per month</span>
        </li>
        <li class="w3-light-grey w3-padding-24">
          <button class="w3-button w3-red w3-padding-large w3-hover-black" onclick="<?php if(!isset($_SESSION['name'])){ echo 'snackbar();'; }else{setsess(999);echo 'memb();';}?>">Sign Up</button>
        </li>
      </ul>
    </div>
  </div>
<div id="snackbar">Login first</div>


</div>

















<!-- footer -->
<footer>
  <p>
    <a target="_blank" href="//localhost/project/balupdate.php"><?php echo $session2 ." ". $sessionbal;?></a>
  </p>
</footer>






<div id="credits" class="w3-container city w3-animate-left" style="display:none">
  <div class="w3-container" id="packages" style="margin-top:30px">
    <h1 class="w3-xxxlarge w3-text-red"><b>About Us.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

      <div class="w3-card w3-round w3-white" style="width: 600px">
        <div class="w3-container">
         <h4 class="w3-center">Profile</h4>

         <hr>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i>Nishidh
          <i class="fa fa-pencil fa-fw w3-margin-left w3-text-theme"></i> Prashansa  
         <i class="fa fa-pencil fa-fw w3-margin-left w3-text-theme"></i> Agrima
         <i class="fa fa-pencil fa-fw w3-margin-left w3-text-theme"></i> Hardik
         </p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> I050
         <i class="fa fa-home fa-fw w3-margin-left w3-text-theme"></i> I067
         <i class="fa fa-home fa-fw w3-margin-left w3-text-theme"></i> I054 
         <i class="fa fa-home fa-fw w3-margin-left w3-text-theme"></i> I056
         </p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> Nov 25,2000
         <i class="fa fa-birthday-cake fa-fw w3-margin-left w3-text-theme"></i> Oct 23,2000
         <i class="fa fa-birthday-cake fa-fw w3-margin-left w3-text-theme"></i> Nov 14,2000
         <i class="fa fa-birthday-cake fa-fw w3-margin-left w3-text-theme"></i> Feb 18,2000
         </p>
        </div>
      </div>
      <br>
  </div>
</div>

</div>



<script>
function openCity(evt , cityName) {   //tabs
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-white ", ""); 
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " w3-white ";
}
</script>

<script>
var mybtn = document.getElementsByClassName("testbtn")[0];
mybtn.click();
</script>

<script>
function signin(){

  window.location = "//localhost/project/handler.php"
}
</script>


<script>
function Alert() {
  alert("Game added to cart!\nProceed to the cart page to complete checkout or add more games to cart.");
}
</script>




<script>
function snackbar() {
  var x = document.getElementById("snackbar");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>

<script>
function snackbar1() {
  var x = document.getElementById("snackbar1");
  x.className = "show";
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}
</script>



<script>

function confirm1() {
  
  var r = confirm("Complete Payment");
  if (r == true) {
    window.location = "//localhost/project/payment.php";
  } else {

  }
}

</script>



<script>
function memb(){

  window.location = "//localhost/project/memb.php"
}
</script>
<script>
function setsesss(value){

memb();
}  
</script>

</body>
</html>