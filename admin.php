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

$sql = $conn->prepare("SELECT * FROM User");
$sql->execute();
$User = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="assets/css/admin.css">

</head>

<body>

<header>
    <h1>Admin </h1>
</header>

<div class="sidebar">
        <ul>
                <h1>Menu</h1>
            <li>
                <a href="index.php">
                    <spawn class="icon"><i class="fa-solid fa-house"></i></spawn>
                    <spawn class="text">Home</spawn>
                </a>
            <li>
            <li>
                <a href="admin.php#accomodations">
                    <spawn class="icon"><i class="fa-solid fa-admin"></i></spawn>
                    <spawn class="text">Accomodations</spawn>
                </a>
            <li>
            <li>
                <a href="admin.php#flights">
                    <spawn class="icon"><i class="fa-solid fa-about-us"></i></spawn>
                    <spawn class="text">Flights</spawn>
                </a>
            <li>
            <li>
                <a href="admin.php#trips">
                    <spawn class="icon"><i class="fa-solid fa-house"></i></spawn>
                    <spawn class="text">Trips</spawn>
                </a>
            <li>
            <li>
                <a href="admin.php#Users">
                    <spawn class="icon"><i class="fa-solid fa-house"></i></spawn>
                    <spawn class="text">Users</spawn>
                </a>
            <li>
        <ul>
    </div>


    <h1 class="titel" id="accomodations" >Beheer Accomodations</h1>
    <a class="add-btn" href="add-accomodation.php">Add Accomodation</a>

    <?php foreach ($Accomodations as $a): ?>

    <div class="all-accomodations">
        Accomodation ID: <?= $a['AccomodationID'] ?><br>
        Type: <?= $a['Type'] ?><br>
        Stars: <?= $a['Stars'] ?><br>
        Lodging: <?= $a['Lodging'] ?><br>
        RentalCar: <?= $a['RentalCar'] ?><br>
        Persons: <?= $a['Persons'] ?><br>
    </div>

    <div class="buttons">
       <a class="edit-btn" href="edit-accomodation.php?id=<?= $a['AccomodationID'] ?>">🛠️ Bewerken</a>
       <a class="delete-btn" href="delete.php?id=<?= $a['AccomodationID'] ?>">🗑️ Delete</a>
    </div>

    <?php endforeach; ?>


    <h1 class="titel" id="flights">Beheer Flights</h1>
    <a class="add-btn" href="add-flight.php">Add Flight</a>

    <?php foreach ($flights as $f): ?>

    <div class="all-flights">
    Vlucht ID: <?= $f['FlightID'] ?><br>
    Nummer: <?= $f['FlightNumber'] ?><br>
    Transfers: <?= $f['Transfers'] ?><br>
    Duur: <?= $f['Duration'] ?> uur<br>
    </div>
    <div class="buttons">
      <a class="edit-btn" href="edit-flight.php?id=<?= $f['FlightID'] ?>">🛠️ Bewerken</a>
      <a class="delete-btn" href="delete.php?id=<?= $f['FlightID'] ?>">🗑️ Delete</a>
    </div>

    <?php endforeach; ?>


    <h1 class="titel" id="trips">Beheer Trips</h1>
    <a class="add-btn" href="add-trip.php">Add Trip</a>

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
    <div class="buttons">
       <a class="edit-btn" href="edit-trip.php?id=<?= $t['TripID'] ?>">🛠️ Bewerken</a>
       <a class="delete-btn" href="delete.php?id=<?= $t['TripID'] ?>">🗑️ Delete</a>
    </div>

    <?php endforeach; ?>


    <h1 class="titel" id="Users">Beheer Users</h1>
    <a class="add-btn" href="add-user.php">Add User</a>

     <?php foreach ($User as $u): ?>

    <div class="all-trips">
        User ID: <?= $u['UserID'] ?><br>
        Username: <?= $u['Username'] ?><br>
        Password: <?= $u['Password'] ?><br>
        Role: <?= $u['Role'] ?><br>
    </div>
    <div class="buttons">
        <a class="edit-btn" href="edit-user.php?id=<?= $u['UserID'] ?>">🛠️ Bewerken</a>
        <a class="delete-btn" href="delete.php?id=<?= $u['UserID'] ?>">🗑️ Delete</a>
    </div>

    <?php endforeach; ?>

</body>
</html>