<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<head>
	<title>	</title>
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
    bottom: 1;
    right: 0;
}
</style>


<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "nishidh";


if (isset($_SESSION['name'])) {

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}echo "<span class='watermark'>Connection to DB Success </span>";



if($_SERVER["REQUEST_METHOD"]=="POST") {


$baladd=$_POST['balance'];
$name=$_SESSION['name'];

$sql = "SELECT * FROM signin WHERE name='$name'";
$result = $conn->query($sql);


if(isset($baladd)){

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {

      $_SESSION["balance"]=$row['balance']; 
      echo " Welcome " .$row['name'] ;
      echo "Your balance ".$row['balance'];
      $bal=$row['balance'];
      
    }
}

$totalbal=$bal+$baladd;

$sql ="UPDATE signin SET balance='$totalbal' WHERE name='$name' ";
if($conn->query($sql) === TRUE) {
	echo "Balance updated sucessfully".$totalbal; 
	$_SESSION['balance']=$totalbal;
} else {
	echo "Error Updating record: " . $conn->error;
}
}
}
?>
<br>
<form action="//localhost/project/balupdate.php" method="POST">
Balance :<input type="text" name="balance" />
<input type="submit" name="submit">
</form>
<?php
}else {
	echo "Login First";
	echo "<br>";
    echo "<a href='http://localhost/project/signup.php'>Login/Signup here</a>";
}

?>






<script>
	
</script>

</body>
</html>