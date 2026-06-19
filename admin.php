<?php
require_once './crud/dbcall.php';

$sql = $conn->prepare("SELECT * FROM Flights");
$sql->execute();
$flights = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $conn->prepare("SELECT * FROM Accomodations");
$sql->execute();
$Accomodations = $sql->fetchAll(PDO::FETCH_ASSOC);

$sql = $conn->prepare("SELECT * FROM Trip");
$sql->execute();
$Trip = $sql->fetchAll(PDO::FETCH_ASSOC);

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

    <h2>Beheer Accomodations</h2>
    <a class="add-btn" href="add.php">✈️ Add Accomodations</a>

<?php foreach ($Accomodations as $a): ?>

    <div class="all-accomodations">
        Accomodation ID: <?= $a['AccomodationID'] ?><br>
        Type: <?= $a['Type'] ?><br>
        Stars: <?= $a['Stars'] ?><br>
        Lodging: <?= $a['Lodging'] ?><br>
        RentalCar: <?= $a['RentalCar'] ?><br>
        Persons: <?= $a['Persons'] ?><br>
    </div>

    <a class="edit-btn" href="edit-accomodation.php?id=<?= $a['AccomodationID'] ?>">🛠️ Bewerken</a>
    <a class="delete-btn" href="delete.php?delete=<?= $a['AccomodationID'] ?>">🗑️ Delete</a>

<?php endforeach; ?>


    <h2>Beheer Vluchten</h2>
    <a class="add-btn" href="add.php">✈️ Add Flight</a>

<?php foreach ($flights as $f): ?>

    <div class="all-flights">
    Vlucht ID: <?= $f['FlightID'] ?><br>
    Nummer: <?= $f['FlightNumber'] ?><br>
    Transfers: <?= $f['Transfers'] ?><br>
    Duur: <?= $f['Duration'] ?> uur<br>
    </div>

   <a class="edit-btn" href="edit-flight.php?id=<?= $f['FlightID'] ?>">🛠️ Bewerken</a>
   <a class="delete-btn" href="delete.php?id=<?= $f['FlightID'] ?>">🗑️ Delete</a>

<?php endforeach; ?>

    <h2>Beheer Trip</h2>
    <a class="add-btn" href="add.php">✈️ Add Trips</a>

<?php foreach ($Trip as $t): ?>

    <div class="all-trips">
        Trip ID: <?= $t['TripID'] ?><br>
        Location: <?= $t['Location'] ?><br>
        AccomodationID: <?= $t['AccomodationID'] ?><br>
        FlightID: <?= $t['FlightID'] ?><br>
        ReviewID: <?= $t['ReviewID'] ?><br>
        Transport: <?= $t['Transport'] ?><br>
        Price: <?= $t['Price'] ?><br>
    </div>

    <a class="edit-btn" href="edit-trip.php?id=<?= $t['TripID'] ?>">🛠️ Bewerken</a>
    <a class="delete-btn" href="delete.php?id=<?= $t['TripID'] ?>">🗑️ Delete</a>

<?php endforeach; ?>

</body>
</html>
