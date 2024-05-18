<?php
require 'koneksi.php'; // Memasukkan file koneksi database

// Kode untuk proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query untuk memeriksa data di database
    $sql = "SELECT id, password FROM users WHERE email = ?";
    
    // Mempersiapkan statement untuk keamanan dari SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();
        
        // Debugging: Tampilkan password yang di-hash dan password yang diinput
        // echo "Hashed Password: " . $hashed_password . "<br>";
        // echo "Input Password: " . $password . "<br>";

        // Verifikasi password
        if (password_verify($password, $hashed_password)) {
            // Redirect ke halaman utama
            header("Location: halamanUtama.php");
            exit();
        } else {
            echo "Password salah";
        }
    } else {
        echo "Email tidak ditemukan";
    }

    $stmt->close();
    $conn->close();
}
?>