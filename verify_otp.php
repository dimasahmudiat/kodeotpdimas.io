<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
</head>
<body>
    <h2>Masukkan OTP</h2>
    <form method="POST" action="validate_otp.php">
        <label for="otp">OTP:</label><br>
        <input type="text" id="otp" name="otp" required><br><br>
        <button type="submit">Verify OTP</button>
    </form>
</body>
</html>
