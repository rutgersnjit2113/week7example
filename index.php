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

$query = 'SELECT id, email
          FROM accounts
	  WHERE id = 5'
$statement = $db->prepare($query);
$statement->bindValue(':category_id', $category_id);
$statement->execute();
$products = $statement->fetchAll();
$statement->closeCursor();


?>
