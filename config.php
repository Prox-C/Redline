<?php

function connect() // DATABASE CONNECTION
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

function register_user($role, $email,$password, $fname, $lname, $birthdate, $sex, $pfp)
{
    $conn = connect();

    // Check if the email already exists
    $check_query = $conn->prepare("SELECT COUNT(*) FROM `users` WHERE email = :email");
    $check_query->bindParam(':email', $email);
    $check_query->execute();
    $username_exists = $check_query->fetchColumn();

    if ($username_exists) {
        $conn = null;
        return "email_exists";
    }

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = $conn->prepare("INSERT INTO `users` (role, email, password, fname, lname, birthdate, sex, profile_pic) VALUES (:role, :email, :password, :fname, :lname, :birthdate, :sex, :profile_pic)");

    $query->bindParam(':role', $role);
    $query->bindParam(':email', $email);
    $query->bindParam(':password', $hashed_password);
    $query->bindParam(':fname', $fname);
    $query->bindParam(':lname', $lname);
    $query->bindParam(':birthdate', $birthdate);
    $query->bindParam(':sex', $sex);
    $query->bindParam(':profile_pic', $pfp);

    $response = $query->execute();

    if ($response) {
        $id = $conn->lastInsertId();
        $conn = null;
        return $id;
    } else {
        $conn = null;
        return FALSE;
    }
}

function fetch_users(){
    $conn = connect();

    $query = $conn->prepare("SELECT user_id, email, profile_pic, fname, lname, birthdate, sex  FROM `users` WHERE role = 3");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    $conn = null;
    return $result;
}

function update_user($user_id, $email, $password, $fname, $lname, $birthdate, $sex){
    $conn = connect();

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $query = $conn->prepare("
    UPDATE `users` SET 
    email = :email, 
    password = :password,
    fname = :fname,
    lname = :lname,
    birthdate = :birthdate,
    sex = :sex
    WHERE user_id = :user_id;"
    ); 

    $query->bindParam(':email', $email);
    $query->bindParam(':password', $hashed_password);
    $query->bindParam(':fname', $fname);
    $query->bindParam(':lname', $lname);
    $query->bindParam(':birthdate', $birthdate);
    $query->bindParam(':sex', $sex);
    $query->bindParam(':user_id', $user_id);

    $response = $query->execute();

    if ($response) {
        $id = $conn->lastInsertId();
        $conn = null;
        return $id;
    } else {
        $conn = null;
        return FALSE;
    }
}

function delete_user($user_id){
    $conn = connect();

    $query = $conn->prepare("DELETE FROM `users` WHERE user_id = :user_id");
    $query->bindParam(':user_id', $user_id);
    
    $result = $query->execute();

    $conn = null;
    return $result;
}

?>