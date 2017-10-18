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

$sql = "SELECT id LIMIT 5, email FROM accounts";
$result = $conn->query($sql);
echo "Results: " $result;

?>
