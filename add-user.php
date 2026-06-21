<?php
require_once './crud/dbcall.php';

if (isset($_POST['opslaan'])) {

$sql = $conn->prepare("INSERT INTO User (Username, Password, Role) VALUES (:Username, :Password, :Role)");

$sql->bindparam(':Username', $_POST['Username']);
$sql->bindparam(':Password', $_POST['Password']);
$sql->bindparam(':Role', $_POST['Role']);

$sql->execute();

echo "User toegevoegd";
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin – Vluchten</title>
    <link rel="stylesheet" href="assets/css/admin.css">

</head>

<body>

<headers>
    <h1>Admin </h1>
</headers>

<h1>Nieuw User toevoegen</h1>

<form method="post">

    <label>Username</label>
    <input type="text" name="Username" required>

    <label>Password</label>
    <textarea name="Password" required></textarea>

    <label>Role</label>
    <textarea name="Role" required></textarea>

    <button type="submit" name="opslaan">Opslaan</button>

</form>

</body>
</html>

