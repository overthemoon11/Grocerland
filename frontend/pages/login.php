<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../assets/styles/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <?php include '../components/header.php'; ?>
    <main>
        <div class="login-container">
            <h1>Login</h1>
            <p>Doesn’t have an account yet? <a href="register.php">Sign Up</a></p>
            <form class="login-form" action="login.php" method="POST">
                <label for="email">Email address</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
                <a href="resetpassword.php" class="forgot-password">Forgot password?</a>
                
                <button type="submit">LOGIN</button>
            </form>
        </div>
    </main>
    <?php include '../components/footer.php'; ?>
</body>
</html>
