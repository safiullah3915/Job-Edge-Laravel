<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
        }

        form {
            margin: 10px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .signin-link {
            display: block;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <!-- Sign Up Form -->
    <form action="signup.php" method="POST">
        <h2>Sign Up</h2>
        <label for="signup-email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="signup-password"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <label for="signup-confirm-password"><b>Confirm Password</b></label>
        <input type="password" placeholder="Confirm Password" name="confirm-password" required>

        <button type="submit">Sign Up</button>
        <a href="sign-in.html" class="signin-link">Sign In</a>

    </form>

    <!-- Script to show alert upon successful registration -->
    <script>
        // Check if URL parameter 'registered' is present
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('registered')) {
            alert('User registered successfully.');
        }
    </script>
</body>

</html>