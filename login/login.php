<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="/OMAH/img/omah_42.png" alt="Logo">
            <h1>OMAH</h1>
        </div>
        <div class="form-container">
            <div class="tabs">
                <a href="login.php" class="active">Login</a>
                <a href="register.php">Register</a>
            </div>
            <form action="login_process.php" method="POST">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
                <button type="submit">Login</button>
            </form>
        </div>
        <p class="terms">By using OMAH, you are agreeing to our <a href="#">Terms of Service</a></p>
    </div>
</body>
</html>

