<?php
require_once './crud/dbcall.php';

if (isset($_POST['opslaan'])) {

$sql = $conn->prepare("INSERT INTO Accomodations (Location, AccomodationID, FlightID, ReviewID, Transport, Price) VALUES (:Location, :AccomodationID, :FlightID, :ReviewID, :Transport,:Price)");

$sql->bindparam(':Location', $_POST['Location']);
$sql->bindparam(':AccomodationID', $_POST['AccomodationID']);
$sql->bindparam(':FlightID', $_POST['FlightID']);
$sql->bindparam(':ReviewID', $_POST['ReviewID']);
$sql->bindparam(':Transport', $_POST['Transport']);
$sql->bindparam(':Price', $_POST['Price']);

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

    <label>Location</label>
    <input type="text" name="Location" required>

    <label>AccomodationID</label>
    <textarea name="AccomodationID" required></textarea>

    <label>FlightID</label>
    <textarea name="FlightID" required></textarea>

    <label>ReviewID</label>
    <input type="text" name="ReviewID" required>

    <label>Transport</label>
    <input type="text" name="Transport" required>

    <label>Price</label>
    <input type="text" name="Price" required>

    <button type="submit" name="opslaan">Opslaan</button>

</form>

</body>
</html>

