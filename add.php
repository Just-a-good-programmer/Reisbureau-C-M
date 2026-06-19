<?php
require_once './crud/dbcall.php';

if (isset($_POST['opslaan'])) {

    $sql = $conn->prepare("
        INSERT INTO Accomodations (Type, Stars, Lodging, RentalCar, Persons)
        VALUES (:Type, :Stars, :Lodging, :RentalCar, :Persons)
    ");
    $sql->execute([
            'Type'    => $_POST['Type'],
            'Stars'     => $_POST['Stars'],
            'Lodging'     => $_POST['Lodging'],
            'RentalCar'     => $_POST['RentalCar'],
            'Persons'     => $_POST['Persons']
    ]);
    header("Location: admin.php");
        exit;

     $sql = $conn->prepare("
                INSERT INTO Flights (FlightNumber, Transfers, Duration)
                VALUES (:FlightNumber, :Transfers, :Duration)
            ");
    $sql->execute([
                'FlightNumber'    => $_POST['FlightNumber'],
                'Transfers'     => $_POST['Transfers'],
                'Duration'     => $_POST['Duration']
        ]);

    header("Location: admin.php");
    exit;
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

