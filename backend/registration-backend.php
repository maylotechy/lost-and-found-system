<?php
global $conn;
include "db-connect.php";
session_start();
try{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $firstname = $_POST['firstname'];
    $lastname= $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $contact_number = $_POST['contact_number'];
    $created_at = $_POST['created_at'];
    // Check if the email already exists
        $checkStmt = $conn->prepare("SELECT email_add FROM users WHERE email_add = :email");
        $checkStmt->bindParam(':email', $email);
        $checkStmt->execute();
        if ($checkStmt->rowCount() > 0) {
            // Email already exists
            echo json_encode(array("response" => "error", "message" => "Email already exists"));
        } else {
            // Hash the password (using bcrypt)
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Prepare and execute the insert statement
            $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, username, email_add,password, contact_number, created_at,  is_banned, role) 
                VALUES (:firstname, :lastname, :username, :email_add, :hashed_password, :contact_number, :created_at, 2, 2)");

            // Bind all parameters
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':firstname', $firstname);
            $stmt->bindParam(':lastname', $lastname);
            $stmt->bindParam(':email_add', $email);
            $stmt->bindParam(':contact_number', $contact_number);
            $stmt->bindParam(':created_at', $created_at);
            $stmt->bindParam(':hashed_password', $hashed_password);

            if ($stmt->execute()) {
                $user_id = $conn->lastInsertId();
                $selectStmt = $conn->prepare("SELECT role, is_banned FROM users WHERE user_id = :user_id");
                $selectStmt->bindParam(':user_id', $user_id);
                $selectStmt->execute();
                $row = $selectStmt->fetch(PDO::FETCH_ASSOC);

                // Store user_id, role_id, and is_banned in the session
                $_SESSION['user_id'] = $user_id;
                $_SESSION['role'] = $row['role'];
                $_SESSION['is_banned'] = $row['is_banned'];
                echo json_encode(array("response" => "success", "message" => "Account Created Successfully"));
            } else {
                echo json_encode(array("response" => "error", "message" => "Something went wrong"));
            }
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
