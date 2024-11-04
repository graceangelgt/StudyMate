<?php
// signup_process.php

// Periksa apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm-password'];

    // Periksa apakah password dan confirm password cocok
    if ($password !== $confirmPassword) {
        echo "Passwords do not match!";
        exit;
    }

    // Hash password untuk keamanan
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Contoh koneksi ke database (sesuaikan detailnya)
    $servername = "localhost";
    $username = "username";
    $dbpassword = "password";
    $dbname = "database_name";

    // Buat koneksi
    $conn = new mysqli($servername, $username, $dbpassword, $dbname);

    // Cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Siapkan SQL untuk menyimpan data
    $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $name, $email, $hashedPassword);

    // Eksekusi query
    if ($stmt->execute()) {
        echo "Registration successful!";
        // Redirect atau tampilkan pesan sukses sesuai kebutuhan
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Tutup koneksi
    $stmt->close();
    $conn->close();
}
?>
