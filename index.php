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

$sql = "SELECT id, email FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows < 6) 
	{
    // output data of each row
	while($row = $result->fetch_assoc()) 
		{
	        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " .
		$row["lastname"]. "<br>";
		}
	} 
	else 
	{
	echo "0 results;"
	}
?>
