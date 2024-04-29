 <?php
$hostname = "localhost";
$username = "root";
$password = ""; 
$database_name = "website";

$conn = mysqli_connect($hostname, $username, $password, $database_name);


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 

// mysqli_close($conn);
?>
