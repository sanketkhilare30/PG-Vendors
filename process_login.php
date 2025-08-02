<?php
include 'db.php';
session_start();

$role = $_POST['role'];
$username = $_POST['admin'];
$password = $_POST[''];

$sql = "SELECT * FROM users WHERE username = ? AND role = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $username, $role);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    
    // Check password
    if (password_verify($password, $user['admin'])) {
        $_SESSION[''] = $username;
        $_SESSION['role'] = $role;

        // Redirect based on role
        if ($role === 'user') {
            header("Location: user_dashboard.php");
        } elseif ($role === 'owner') {
            header("Location: owner_dashboard.php");
        } elseif ($role === 'admin') {
            header("Location: admin_dashboard.php");
        }
        exit();
    } else {
        echo "Invalid password.";
    }
} else {
    echo "Invalid login credentials.";
}
?>
