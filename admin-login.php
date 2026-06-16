<?php
// ----------------------
// LOGIN VERWERKING
// ----------------------
if (isset($_POST['inloggen'])) {
    if ($_POST['username'] === "admin" && $_POST['password'] === "admin") {
        header("Location: /admin");
        exit;
    } else {
        $error = "Foutieve inloggegevens";
    }

    if (isset($_POST['inloggen'])) {
        $user = $_POST['username'];
        $pass = $_POST['password'];

        // hier check je of het klopt
    }
}
?>

<!DOCTYPE html>
<body lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<header>
    <h1>Admin Login</h1>
</header>

<form method="POST" class="admin-login-box" id="login-box">
    <input class="admin-input" type="text" name="username" placeholder="Username" >
    <input class="admin-input" type="password" name="password" placeholder="Password">
    <a class="admin-btn" href="admin.php">Login</a>
</form>

</body>

</html>

