<?php
$dbServername = 'localhost';
$dbUsername = 'root';
$dbPass = 'Wind'; //if not see just leave it blank ""
$dbName = 'loginsystem';
// my sqli php function
$conn =  mysqli_connect ($dbServername,$dbUsername,$dbPass,$dbName);
<body>
<?php
$sql = "SELECT * FROM users;";
$result = mysqli_query($conn, $sql);

?>
</body>
<html></html>
