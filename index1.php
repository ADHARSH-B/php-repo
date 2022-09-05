<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php 

$host = 'adharsh-mysql'; // host_name
$user = 'root'; // user_name
$pass = $_ENV["MYSQL_ROOT_PASSWORD"]; // get data from env

$conn = new mysqli($host, $user, $pass); // set up db connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected to MySQL successfully!";
?>



