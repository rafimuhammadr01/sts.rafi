<?php
// Hapus sesi dan redirect ke halaman login
session_start();
session_destroy();
header("Location: index.php");
exit;
?>
