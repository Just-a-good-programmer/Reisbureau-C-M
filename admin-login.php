<?php
// ----------------------
// LOGIN VERWERKING
// ----------------------
if (isset($_POST['inloggen'])) {

    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user === "admin" && $pass === "admin") {
        header("Location: /admin.php");
        exit;
    } else {
        $error = "Foutieve inloggegevens";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
<header>
    <h1>Admin Login</h1>
</header>

<form method="POST" class="admin-login-box" id="login-box">
    <input class="admin-input" type="text" name="username" placeholder="Username" required>
    <input class="admin-input" type="password" name="password" placeholder="Password" required>

    <button class="admin-btn" type="submit" name="inloggen">Login</button>

    <?php if (isset($error)) echo "<p style='color:rgb(255 0 89 / 0);'>$error</p>"; ?>
</form>

</body>
</html>
