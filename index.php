<?php

echo "<h1>PDO demo!</h1>";
$hostname = 'sql2.njit.edu';
$username = 'mp399';
$password = 'QHfl76ID';
$dbname = 'mp399';

try {
    $conn = new mysqli($hostname, $username, $password, $dbname);
    echo "Connected successfully<br>";
    } 
    catch(PDOException $e) 
    {
    echo "Connection failed: " . $e->getMessage().'<br>';
    }
$sql = "SELECT id, email  FROM accounts LIMIT 5";
$result = $conn->query($sql);
$num_rows = mysqli_num_rows($result);
echo "Results: ".$num_rows."<br>";

if ($result->num_rows > 0) 
    {
    echo "<table border = 1><tr><th>ID</th><th>Email</th></tr>";
    while($row = $result->fetch_assoc()) 
    {
    echo "<tr><td>".$row["id"]."</td><td>".$row["email"]."</td></tr>";
    }
    echo "</table>";
    } 
else 
    {
    echo "0 results";
    }
    $conn->close();

?>
