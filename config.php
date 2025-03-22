<?php

function connect() 
{
    $host = "localhost";
    $db = "redline_db";
    $user = "root";
    $password = "";
    $dsn = "mysql:host=$host;dbname=$db";

    try
    {
        $conn = new PDO($dsn, $user, $password);
        return $conn;
    }
    catch(PDOException $e) 
    {
        echo "Error: " . $e->getMessage();
		die();
    }
}

// // USER-RELATED FUNCTIONS
// function auth($email)
// {
//     $conn = connect();

//     $query = $conn->prepare("SELECT * FROM `users` WHERE email = :email LIMIT 1");
//     $query->bindParam(':email', $email);
//     $query->execute();
// 	$result = $query->fetch(PDO::FETCH_ASSOC);

// 	return $result;
// }

?>