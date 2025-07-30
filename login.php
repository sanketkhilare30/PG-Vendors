<?php
session_start();

// Dummy users database (replace with real DB later)
$users = [
    'user' => ['username' => 'user1', 'password' => 'user123'],
    'pg-owner' => ['username' => 'owner1', 'password' => 'owner123'],
    'admin' => ['username' => 'admin1', 'password' => 'admin123']
];

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $role = $_POST['role'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (
        isset($users[$role]) &&
        $users[$role]['username'] === $username &&
        $users[$role]['password'] === $password
    ) {
        $_SESSION['role'] = $role;
        $_SESSION['username'] = $username;

        switch ($role) {
            case 'user':
                header("Location: dashboard_user.php");
                break;
            case 'pg-owner':
                header("Location: dashboard_pgowner.php");
                break;
            case 'admin':
                header("Location: dashboard_admin.php");
                break;
        }
        exit;
    } else {
        $error = "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
</head>
<body>
    <h2>Login</h2>
    <?php if ($error) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label>Role:</label>
        <select name="role">
            <option value="user">User</option>
            <option value="pg-owner">PG Owner</option>
            <option value="admin">Admin</option>
        </select><br><br>

        <label>Username:</label>
        <input type="text" name="username" required><br><br>

        <label>Password:</label>
        <input type="password" name="password" required><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>
