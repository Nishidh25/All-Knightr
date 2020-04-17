<!DOCTYPE html>
<?php session_start(); ?>
<html>
<head>
  <title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
html, body, h1, h2, h3, h4, h5 ,i{font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
.mySlides {display:none}
.watermark {
    opacity: 0.45;
    color: white;
    position: fixed;
    bottom: 0;
    right: 0;
}
.watermark1 {
    opacity: 0.85;
    color: RED;
    position: fixed;
    bottom: 0;
    right: -1;
}


.error{
 color:red;
}



body{

  background-color: #4a148c;
}



.centered {
  top: 50%;
  left: 2.5%;
}


button1 {
  border-radius: 20px;
  border: 1px solid #FF4B2B;
  background-color: #FF4B2B;
  color: #FFFFFF;
  font-size: 12px;
  font-weight: bold;
  padding: 12px 45px;
  letter-spacing: 1px;
  text-transform: uppercase;
  transition: transform 80ms ease-in;
}

button1:active {
  transform: scale(0.95);
}

button1:focus {
  outline: none;
}

button1.ghost {
  background-color: transparent;
  border-color: #FFFFFF;
}

form {
  background-color: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 50px;
  height: 100%;
  text-align: center;
}

input {
  background-color: #eee;
  border: none;
  padding: 12px 15px;
  margin: 8px 0;
  width: 100%;
}

.container {
  background-color: #fff;
  border-radius: 10px;
    box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
      0 10px 10px rgba(0,0,0,0.22);
  position: relative;
  overflow: hidden;
  width: 1900px;
  max-width: 95%;
  min-height: 750px;
}

.form-container {
  position: absolute;
  top: 0;
  height: 100%;
  transition: all 0.6s ease-in-out;
}

.sign-in-container {
  left: 0;
  width: 50%;
  z-index: 2;
}

.container.right-panel-active .sign-in-container {
  transform: translateX(100%);
}

.sign-up-container {
  left: 0;
  width: 50%;
  opacity: 0;
  z-index: 1;
}

.container.right-panel-active .sign-up-container {
  transform: translateX(100%);
  opacity: 1;
  z-index: 5;
  animation: show 0.6s;
}

@keyframes show {
  0%, 49.99% {
    opacity: 0;
    z-index: 1;
  }
  
  50%, 100% {
    opacity: 1;
    z-index: 5;
  }
}

.overlay-container {
  position: absolute;
  top: 0;
  left: 50%;
  width: 50%;
  height: 100%;
  overflow: hidden;
  transition: transform 0.6s ease-in-out;
  z-index: 100;
}

.container.right-panel-active .overlay-container{
  transform: translateX(-100%);
}

.overlay {
  background: #FF416C;
  background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
  background: linear-gradient(to right, #FF4B2B, #FF416C);
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 0 0;
  color: #FFFFFF;
  position: relative;
  left: -100%;
  height: 100%;
  width: 200%;
    transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
    transform: translateX(50%);
}

.overlay-panel {
  position: absolute;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  padding: 0 40px;
  text-align: center;
  top: 0;
  height: 100%;
  width: 50%;
  transform: translateX(0);
  transition: transform 0.6s ease-in-out;
}

.overlay-left {
  transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
  transform: translateX(0);
}

.overlay-right {
  right: 0;
  transform: translateX(0);
}

.container.right-panel-active .overlay-right {
  transform: translateX(20%);
}

.social-container {
  margin: 20px 0;
}

.social-container a {
  border: 1px solid #DDDDDD;
  border-radius: 50%;
  display: inline-flex;
  justify-content: center;
  align-items: center;
  margin: 0 5px;
  height: 40px;
  width: 40px;
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

.home
{
   float: left;
   bottom: 0;
}


.float{
  position:fixed;
  width:110px;
  height:60px;
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
</head>
<body>


<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nishidh";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}echo "<span class='watermark'>Connection to DB Success </span>";

$nameErr = $emailErr ="";
$name = $email = "";
$password = $PassErr="";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


if (empty($_POST["name"])) {
  $nameErr="cannot be empty";
}else{
    if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
       $nameErr="contains only letters";
    }else $name=$_POST["name"];

}

if(empty($_POST["email"])){
  $emailErr="cannot be empty";
}else {
   if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
    $emailErr="is invalid";
    }else $email=$_POST["email"];
}


if (empty($_POST["password"])) {
  $PassErr="cannot be empty";
}else $password=$_POST["password"];




if($_POST["Submit"]=="SignUp" && $email!="" && $name!="" && $password!=""){ 
$sql = "INSERT INTO signin VALUES ('$name', '$email', '$password','NONE','10000')";

if ($conn->query($sql) === TRUE) {
    echo "<span class='watermark1'>New record created successfully </span>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}




if($_POST["Submit"]=="SignIn" && $email!="" && $password!=""){ 
$sql = "SELECT * FROM signin WHERE password='$password' and email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo "<span class='watermark1'>Login Sucessfull</span>";
      $_SESSION["name"]=$row['name'];
      $_SESSION["memb"]=$row['membership'];
      $_SESSION["balance"]=$row['balance'];
      $_SESSION["email"]=$row['email']; 
      echo " Welcome " .$_SESSION["name"] ;
      echo "<meta http-equiv = 'refresh' content = '0.9; url = //localhost/project/tabs.php' />";
    }
}else echo "<span class='watermark1'>Database Empty</span>";
}elseif($_POST["Submit"]=="SignIn") echo "<span class='watermark1'>Invalid email/password combination </span>";



}
?>


<span class="w3-animate-top centered">

    <h1 class="w3-xxxlarge w3-text-red" style="margin-top:30px"><b>Account.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">

<div class="container" id="container">
  <div class="form-container sign-up-container">
    <form action="//localhost/project/signup.php" method="POST">
      <h1>Create Account</h1>
      <span>Use your email for registration</span>
      <input type="text" placeholder="<?php echo "Name ".$nameErr;?>" name="name" />
      <input type="text" placeholder="<?php echo "Email ".$emailErr;?>" name="email"/>      
    <input type="password" placeholder="<?php echo "Password ".$PassErr;?>" name="password" />
    <input class="button1" type="submit" name="Submit" value="SignUp">
    </form>
  </div>
  <div class="form-container sign-in-container">
    <form action="//localhost/project/signup.php" method="POST">
      <h1>Sign in</h1>

      <span>Use your account</span>
      <input type="text" placeholder="<?php echo "Email ".$emailErr;?>" name="email"/>
      <input type="password" placeholder="<?php echo "Password ".$PassErr;?>" name="password" />
          <input class="button1" type="submit" name="Submit" value="SignIn">
    </form>
  </div>
  <div class="overlay-container">
    <div class="overlay">
      <div class="overlay-panel overlay-left">
        <h1>Welcome Back!</h1>
        <p>To keep your data stored with us please login with your personal info</p>
        <button1 class="ghost" id="signIn" >Sign In</button1>
      </div>
      <div class="overlay-panel overlay-right">
        <h1>Hello!</h1>
        <p>Enter your personal details to create a fresh account</p>
        <button1 class="ghost" id="signUp">Sign Up</button1>
      </div>
    </div>
  </div>
</span>

<a href="//localhost/project/tabs.php" class="float">
<i class="fa my-float">Home</i>
</a>

<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
  container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
  container.classList.remove("right-panel-active");
});



function loggedin(){

  window.location = "//localhost/project/tabs.php"
}
</script>
</body>
</html>