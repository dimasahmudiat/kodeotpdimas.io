<?php
session_start();

// Validasi OTP
if (isset($_POST['otp']) && $_POST['otp'] == $_SESSION['otp']) {
    echo "OTP valid! Anda berhasil login.";
    unset($_SESSION['otp']); // Hapus OTP dari sesi
} else {
    echo "OTP salah! Silakan coba lagi.";
}
?>
