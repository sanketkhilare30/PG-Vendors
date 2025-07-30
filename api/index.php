<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PG Hostel Finder - Login</title>
    <link rel="stylesheet" href="css/style.css">
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

        .login-wrapper {
            width: 100%;
            max-width: 400px;
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

        select, input[type="text"], input[type="password"], button {
            width: 100%;
            padding: 12px;
            margin-bottom: 15px;
            font-size: 1rem;
            border-radius: 6px;
            border: 1px solid #ccc;
            transition: 0.2s;
        }

        select:focus, input:focus {
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

        .register-link {
            text-align: center;
            margin-top: 10px;
        }

        .register-link a {
            color: #4e73df;
            text-decoration: none;
        }

        .register-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <h2>Login to Your Account</h2>
        <form action="process_login.php" method="POST">
            <!-- <label for="role">Select Role:</label> -->
            <select name="role" id="role" required>
                <option value="" disabled selected>Choose your role</option>
                <option value="user">User</option>
                <option value="owner">PG Owner</option>
                <option value="admin">Admin</option>
            </select>

            <!-- <label for="username">Username:</label> -->
            <input type="text" name="username" id="username" placeholder="Enter username" required>

            <!-- <label for="password">Password:</label> -->
            <input type="password" name="password" id="password" placeholder="Enter password" required>

            <button type="submit">Login</button>
        </form>

        <div class="register-link">
            Not registered yet? <a id="registerLink" href="register.php">Register here</a>
        </div>
    </div>

    <script>
        const roleSelect = document.getElementById('role');
        const registerLink = document.getElementById('registerLink');

        roleSelect.addEventListener('change', function () {
            const role = this.value;
            if (role === 'user') {
                registerLink.href = 'user_register.php';
            } else if (role === 'owner') {
                registerLink.href = 'owner_register.php';
            } else {
                registerLink.href = '#';
                registerLink.innerText = 'Admin cannot register';
                registerLink.style.color = '#999';
                registerLink.style.pointerEvents = 'none';
            }
        });
    </script>

</body>
</html>
