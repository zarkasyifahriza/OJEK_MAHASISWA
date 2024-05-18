<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/register.css">
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="/OMAH/img/omah_42.png" alt="Logo">
            <h1>OMAH</h1>
        </div>
        <div class="form-container">
            <div class="tabs">
                <a href="../index.php" class="active">Login</a>
                
                <a href="register.php" class="active">Register</a>
            </div>
            <form action="../process_register.php" method="POST" enctype="multipart/form-data">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                
                <label for="retype_password">Retype Password</label>
                <input type="password" id="retype_password" name="retype_password" required>
                
                <button type="submit" formaction="../afterreg.php">Submit</button>
                <span>Already have an account ?
                        <a href="../index.php"class="text-blue-600 hover:text-blue-800 hover:underline">Login</a></span><br>
                    <span> Are you interested in becoming a driver
                        <a href="../driver/register_driver.php"class="text-blue-600 hover:text-blue-800 hover:underline">Join Now</a></span>
            </form>
        </div>
        <p class="terms">By using OMAH, you are agreeing to our <a href="#">Terms of Service</a></p>
    </div>
</body>
</html>

