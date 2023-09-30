<?php
session_start();

// Data pengguna yang sudah ditentukan
$users = [
    'rafs@gmail.com' => '123',
    'admin@gmail.com' => '456',
    // Tambahkan lebih banyak pengguna jika diperlukan
];

// Ambil data dari formulir login
$username = $_POST['email'];
$password = $_POST['password'];

// Periksa apakah pengguna ada dalam daftar dan password cocok
if (isset($users[$username]) && $users[$username] == $password) {
    // Simpan sesi pengguna
    $_SESSION['username'] = $username;
    // Redirect ke halaman dashboard
    header("Location: dashboard.php");
    exit;
} else {
    // Jika login gagal, arahkan kembali ke halaman login dengan pesan gagal
    echo "<h1>Login gagal Silakan coba lagi<h1>";
    exit;
}
