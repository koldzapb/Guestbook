<?php
require 'database.php';

try{
    // Prepare an insert statement
    $sql = "INSERT INTO test (ime, email, komentar) VALUES (:ime, :email, :komentar)";
    $stmt = $pdo->prepare($sql);
    
    // Bind parameters to statement
    $stmt->bindParam(':ime', $_REQUEST['ime'], PDO::PARAM_STR);
    $stmt->bindParam(':email', $_REQUEST['email'], PDO::PARAM_STR);
    $stmt->bindParam(':komentar', $_REQUEST['komentar'], PDO::PARAM_STR);
    
    // Execute the prepared statement
    $stmt->execute();
	header("refresh:1; url=index.php");

} catch(PDOException $e){
    die("ERROR: Could not prepare/execute query: $sql. " . $e->getMessage());
}


?>