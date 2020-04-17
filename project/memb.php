<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<head>
  <title> </title>
</head>
<body>

<style>
html, body, h1, h2, h3, h4, h5,i {font-family: "Poppins", sans-serif} 
body {
background: #4a148c;

  background-attachment: fixed; 
  background-size: cover;
  color: #ffffff;
}

.watermark {
    opacity: 0.45;
    color: balck;
    position: fixed;
    bottom: 0;
    right: 0;
}




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

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nishidh";




$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}echo "<span class='watermark'>Connection to DB Success </span>";



$name=$_SESSION['name'];


?>

<div class="w3-container w3-animate-left">
 <h1 class="w3-xxxlarge w3-text-red"><b>Payment Gateway</b></h1>
 <center><hr style="width:50px;border:5px solid red" class="w3-round"></center>

<?php

$sql = "SELECT * FROM signin WHERE name='$name'";
$result = $conn->query($sql);
echo $_SESSION["amt"];
$amt=$_SESSION["amt"];


$memb=$_SESSION['memb'];
if($amt<$_SESSION["balance"]){
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {

      $_SESSION["balance"]=$row['balance']; 
      echo " Account : " .$row['name'] ."<br> <br>";
      echo "Your balance ".$row['balance'] ."<br> <br>";
      $bal=$row['balance'];
      
    }

}
$totalbal=$bal-$amt;
if ($totalbal>1) {
$sql ="UPDATE signin SET balance='$totalbal',membership='$memb' WHERE name='$name' ";
if($conn->query($sql) === TRUE) {echo "Payment sucessfull! <br> <br>"."<button class='testbtn' onclick='loggedin();'>Home</button>"; }
}
}else {echo "Insufficient Balance";}
echo "</div>";
?>


<script>
function Alert() {
  alert("Membership Updated! \n");
  window.location = "//localhost/project/tabs.php"
}
</script>

<script>
function loggedin(){

  window.location = "//localhost/project/tabs.php"
}
</script>

<script>
var mybtn = document.getElementsByClassName("testbtn")[0];
Thread.sleep(500);
mybtn.click();
</script>

</body>
</html>