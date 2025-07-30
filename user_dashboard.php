<?php
session_start();

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// Optional: Include DB if needed
include 'db.php';

// Example: Get username or name from session
$username = $_SESSION['username'] ?? 'User';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Dashboard - PG Hostel Finder</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background-color: #f4f7fa;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #4e73df;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .dashboard {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .dashboard h2 {
            margin-bottom: 20px;
        }

        .search-form input[type="text"] {
            padding: 10px;
            width: 70%;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .search-form button {
            padding: 10px 16px;
            border: none;
            background-color: #4e73df;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-left: 10px;
        }

        .logout {
            text-align: right;
            margin-top: -50px;
            margin-bottom: 20px;
        }

        .logout a {
            color: white;
            text-decoration: none;
            background-color: #e74c3c;
            padding: 8px 14px;
            border-radius: 6px;
        }

        .logout a:hover {
            background-color: #c0392b;
        }
    </style>
</head>
<body>

<header>
    <h1>Welcome, <?php echo htmlspecialchars($username); ?>!</h1>
    <div class="logout">
        <a href="logout.php">Logout</a>
    </div>
</header>

<div class="dashboard">
    <h2>Find Nearby PG Hostels</h2>
    <form class="search-form" action="search.php" method="GET">
        <input type="text" name="location" placeholder="Enter location (e.g., city or area)" required>
        <button type="submit">Search</button>
    </form>

    <!-- Optional: Show PG list from database -->
    <!-- Example: You can fetch from pg_hostels table if available -->
</div>

</body>
</html>
