<?php
session_start();

// Hardcoded username dan password
define('USERNAME', 'Dimas1120');
define('PASSWORD', 'dimasahm');

// Validasi login
if ($_POST['username'] === USERNAME && $_POST['password'] === PASSWORD) {
    // Generate OTP 6 digit
    $otp = rand(100000, 999999);
    $_SESSION['otp'] = $otp;

    // Kirim OTP ke Telegram
    $bot_token = "7830738691:AAFnE2LYDi6pXndwcIvJlYOKKvlQfuMOUBU";
    $chat_id = "7181955748"; // Ganti dengan chat ID Telegram Anda
    $message = "Hi " . USERNAME . ", OTP Anda adalah: " . $otp;

    $url = "https://api.telegram.org/bot$bot_token/sendMessage?chat_id=$chat_id&text=" . urlencode($message);
    file_get_contents($url);

    // Redirect ke form OTP
    header("Location: verify_otp.php");
    exit();
} else {
    echo "Username atau password salah!";
}
?>
