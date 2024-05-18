<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css\register_driver.css">
</head>
<body>
    <div class="container">
        <h2>Form Pendaftaran Driver</h2>
        <form action="../process_register.php" method="POST" enctype="multipart/form-data">
            <label for="name">Nama Sesuai KTM</label>
            <input type="text" id="name" name="name" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="example@email.com" required>

            <label for="email">Gender</label>
            <input type="email" id="email" name="email" placeholder="L/P" required>
            
            <label for="phone">No. Telpon</label>
            <div class="phone-input">
                <span>+62</span>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{11}" placeholder="2345xxxxxx" required>
            </div>
            
            <label for="dob">Tanggal Lahir</label>
            <input type="date" id="dob" name="dob" required>
            
            <label for="ktm">Upload foto KTM</label>
            <input type="file" id="ktm" name="ktm" accept="image/*" required>
            
            <button type="submit" formaction="../afterreg.php">Submit</button>
        </form>
    </div>
</body>
</html>
