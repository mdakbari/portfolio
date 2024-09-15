<?php
 


$host = host_name; 
$dbname = database_name;
$username = user_name; 
$password = password; 


try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

$conn = new mysqli($host, $username, $password, $dbname);
$sql = "SELECT * FROM pro   jects";
$stmt = $pdo->query($sql);
$projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>