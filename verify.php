<?php
session_start();
require_once("db.php");

if (isset($_GET['token']) && isset($_GET['email'])) {
    $token = mysqli_real_escape_string($conn, $_GET['token']);
    $email = mysqli_real_escape_string($conn, $_GET['email']);
    
    // Check if token and email exist in the database
    $sql = "SELECT * FROM users WHERE email='$email' AND hash='$token'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Token and email are valid
        // Update the user to mark email as verified (e.g., adding a 'verified' column)
        $updateSql = "UPDATE users SET verified = 1 WHERE email='$email'";
        if ($conn->query($updateSql) === TRUE) {
            $_SESSION['verified'] = true;
            header("Location: login-candidates.php");
            exit();
        }
    } else {
        $_SESSION['error'] = "Invalid or expired verification link.";
        header("Location: register-candidates.php");
        exit();
    }
} else {
    // Invalid request
    $_SESSION['error'] = "Invalid verification request.";
    header("Location: register-candidates.php");
    exit();
}
?>
