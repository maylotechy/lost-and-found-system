<?php
session_start();
global $conn;
include "db-connect.php";

try{
    $username = $_POST["username"];
    $password = $_POST["password"];

    $stmt = $conn->prepare("SELECT user_id, password, role, is_banned 
                            FROM users 
                            WHERE username = :username ");

    $stmt->bindParam(":username", $username);


    if ($stmt->execute()) {
        if ($stmt->rowCount() > 0) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $hashed_password = $row['password'];
            // Verify the password using password_verify()
            if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['role'] = $row['role'];
            $_SESSION['is_banned'] = $row['is_banned'];
            if ($_SESSION['is_banned'] == 1) {
                echo json_encode(array("response" => "error", "message" => "Your account has been banned."));
            } else {
                echo json_encode(array("response" => "success", "message" => "Successfully logged in"));
            }
        } else {
                echo json_encode(array("response" => "error", "message" => "Invalid username or password"));
            }
        } else {
            echo json_encode(array("response" => "error", "message" => "Invalid username or password"));
        }
}}
catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}



