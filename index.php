<?php

echo "<h1>PDO demo!</h1>";
$username = 'mp399';
$password = 'QHfl76ID';
$hostname = 'sql2.njit.edu';

$dsn = "mysql:host=$hostname;dbname=$username";

try {
    $conn = new PDO($dsn, $username, $password);
    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage().'<br>';
}
$conn = null;

$sql = 'SELECT id, email
    	FROM accounts
        ORDER BY id
	LIMIT 5';
$result = mysql_query($sql);
	if ($result->num_rows > 0) 
	{
	echo "<table><tr><th>ID</th><th>Email</th></tr>";
        // output data of each row
	while($row = $result->fetch_assoc()) 
	{
	echo "<tr><td>".$row['id']."</td><td>".$row['email']."</td></tr>";
	}
	echo "</table>";
	} 
	else 
	{
	echo "0 results";
	}
	$conn->close();

/*if ($result->num_rows > 0) 
	{
	echo "<table><tr><th>ID</th><th>Email</th></tr>";
	while($row = $result->fetch_assoc()) 
	{
	echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td></tr>";
	echo "</table>";
	} 
	else 
	{
	echo "0 results";
	}
	$conn->close();*/
?>
