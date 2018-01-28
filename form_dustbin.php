<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  
<?php
$name = $number = $Collector = $tel = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $number = test_input($_POST["number"]);
  $Colector = test_input($_POST["Collector"]);
  $tel = test_input($_POST["tel"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
  Number: <input type="text" name="number">
  <br><br>
  Collector: <input type="text" name="Collector">
  <br><br>
  Telephone: <input type="text" name="tel">
  <br><br>
  <input type="submit" name="submit" value="Submit">  
  <input type="reset" name="reset" value="Reset">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $number;
echo "<br>";
echo $Collector;
echo "<br>";
echo $tel;
?>

<?php
$servername = "localhost";
$username = "root@localhost";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?> 
</body>
</html>
 