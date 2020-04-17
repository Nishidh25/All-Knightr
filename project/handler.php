<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<head>
	<title></title>
</head>
<body>
<style>
html, body, h1, h2, h3, h4, h5,i {font-family: "Poppins", sans-serif}	
body {
background: #4a148c;
  text-align: center;
  background-attachment: fixed; 
  background-size: cover;
  color: #ffffff;
}

button{
  background: #49C608;
  border-radius: 5px;
  position: relative;
  overflow: hidden;
  cursor: pointer;
  outline: none;
  border: none;
  height: 50px;
  width: 100px;
  color: #000000;
  padding: 0;
  margin: 0;
}


.float{
  position:fixed;
  top:40px;
  right:40px;
  background-color:#49C608;
  color:#000000;
  border-radius:5px;
  text-align:center;
  box-shadow: 2px 2px 3px #000000;
}

.my-float{
  margin-top:22px;
}

</style>

<?php
session_start();
if(isset($_SESSION['name'])) {
?>

<div class="w3-container w3-animate-left">
 <h1 class="w3-xxxlarge w3-text-red"><b>Account Details.</b></h1>
 <center><hr style="width:50px;border:5px solid red" class="w3-round"></center>

<h3>Name:<?php echo " ".$_SESSION["name"];?></h3>
<br>
<h3>Email:<?php echo " ".$_SESSION["email"];?></h3>
<br>
<h3>Membership Type:<?php echo " ".$_SESSION["memb"];?></h3>
<br>
<h3>Account balance:<?php echo " ".$_SESSION["balance"];?></h3>


<br>
<button class="float" onclick="home()">Home</button> 


<?php
echo "<button onclick='end11()'>Sign out</button>";
} else echo "<meta http-equiv = 'refresh' content = '0; url = //localhost/project/signup.php' />"; 
echo "</div>";
?>

<script>
function end11(){
window.location = "//localhost/project/end.php"
}

</script>

<script>
function home(){
window.location = "//localhost/project/tabs.php"
}
</script>
</body>
</html>