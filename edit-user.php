<?php
require_once './crud/dbcall.php';

$id = $_GET['id'];

$sql = $conn->prepare("SELECT * FROM User WHERE UserID = :id");
$sql->execute(['id' => $id]);
$User = $sql->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['opslaan'])) {

    $update = $conn->prepare("
        UPDATE User
        SET Username	 = :Username	,
            Password = :Password,
            Role = :Role
        WHERE UserID = :id
    ");

    $update->execute([
            'Username'      => $_POST['Username'],
            'Password'     => $_POST['Password'],
            'Role'   => $_POST['Role'],
            'id'        => $id
    ]);

    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<headers>
<h1>User bewerken</h1>
</headers>

<form method="post">
    Username:
    <input type="text" name="Type" placeholder="Username" value="<?= $User['Username'] ?>"><p>
    Password:
    <input type="number" name="Stars" placeholder="Password" value="<?= $User['Password'] ?>"><p>
    Role:
    <input type="text" name="Lodging" placeholder="Role" value="<?= $User['Role'] ?>"><p>

    <button type="submit" name="opslaan">Opslaan</button>

</form>

</body>
</html>

