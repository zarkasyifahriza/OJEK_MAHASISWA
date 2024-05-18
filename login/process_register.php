<?php
require 'koneksi.php'; // Memasukkan file koneksi database

// Kode untuk proses registrasi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Menggunakan password_hash untuk keamanan
    $role = $_POST['role'];

    // Query untuk memasukkan data ke database
    $sql = "INSERT INTO users (username, email, password, role) VALUES (?, ?, ?, ?)";

    // Mempersiapkan statement untuk keamanan dari SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $username, $email, $password, $role);

    if ($stmt->execute()) {
        // Redirect ke halaman after registration
        header("Location: afterreg.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>