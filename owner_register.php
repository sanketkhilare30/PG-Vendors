<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG Owner Registration - PG Hostel Finder</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f0f2f5;
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-wrapper {
            width: 100%;
            max-width: 450px;
            background: #fff;
            padding: 40px 30px;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 6px;
            font-weight: 500;
            color: #555;
        }

        input[type="text"], input[type="email"], input[type="password"], button {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            font-size: 1rem;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: 0.2s;
        }

        input:focus {
            border-color: #4e73df;
            outline: none;
        }

        button {
            background-color: #4e73df;
            color: white;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #2e59d9;
        }

        .login-link {
            text-align: center;
            margin-top: 10px;
        }

        .login-link a {
            color: #4e73df;
            text-decoration: none;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="register-wrapper">
        <h2>PG Owner Registration</h2>
        <form action="process_owner_register.php" method="POST">
            <label for="owner_name">Owner Name:</label>
            <input type="text" name="owner_name" id="owner_name" required>

            <label for="pg_name">PG Name:</label>
            <input type="text" name="pg_name" id="pg_name" required>

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="username">Username:</label>
            <input type="text" name="username" id="username" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Register</button>
        </form>

        <div class="login-link">
            Already registered? <a href="login.php">Login here</a>
        </div>
    </div>

</body>
</html>
