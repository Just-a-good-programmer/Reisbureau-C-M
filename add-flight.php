<?php
require_once './crud/dbcall.php';

if (isset($_POST['opslaan'])) {

$sql = $conn->prepare("INSERT INTO Flights (FlightNumber, Transfers, Duration) VALUES (:FlightNumber, :Transfers, :Duration)");

$sql->bindparam(':FlightNumber', $_POST['FlightNumber']);
$sql->bindparam(':Transfers', $_POST['Transfers']);
$sql->bindparam(':Duration', $_POST['Duration']);

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

<headers>
    <h1>Admin </h1>
</headers>

<h1>Nieuw vlucht toevoegen</h1>

<form method="post">

    <label>Type</label>
    <input type="text" name="FlightNumber" required>

    <label>Transfers</label>
    <textarea name="Transfers" required></textarea>

    <label>Duration</label>
    <textarea name="Duration" required></textarea>

    <button type="submit" name="opslaan">Opslaan</button>

</form>

</body>
</html>

