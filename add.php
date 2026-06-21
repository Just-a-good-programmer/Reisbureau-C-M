<?php
require_once './crud/dbcall.php';

if (isset($_POST['opslaan'])) {

$sql = $conn->prepare("INSERT INTO Accomodations (Type, Stars, Lodging, RentalCar, Persons) VALUES (:Type, :Stars, :Lodging, :RentalCar, :Persons)");

$sql->bindparam(':Type', $_POST['Type']);
$sql->bindparam(':Stars', $_POST['Stars']);
$sql->bindparam(':Lodging', $_POST['Lodging']);
$sql->bindparam(':RentalCar', $_POST['RentalCar']);
$sql->bindparam(':Persons', $_POST['Persons']);

$sql->execute();

echo "Accomodation toegevoegd";
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

<header>
    <h1>Admin </h1>
</header>

<h1>Nieuw vlucht toevoegen</h1>

<form method="post">

    <label>Type</label>
    <input type="text" name="Type" required>

    <label>Stars</label>
    <textarea name="Stars" required></textarea>

    <label>Lodging</label>
    <textarea name="Lodging" required></textarea>

    <label>RentalCar</label>
    <input type="text" name="RentalCar" required>

    <label>Persons</label>
    <input type="text" name="Persons" required>

    <button type="submit" name="opslaan">Opslaan</button>

</form>

</body>
</html>

