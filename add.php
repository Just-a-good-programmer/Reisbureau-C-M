<header>
    <a class="terug-btn" href="admin.php" > < </a>
    <h1>Nieuw toevoegen</h1>
</header>

<div class="add-page">
<div class="accomodation">
<?php
require_once './crud/dbcall.php';

if (isset($_POST['opslaan'])) {

    $sql = $conn->prepare("
        INSERT INTO Accomodations (AccomodationID, Type, Stars, Lodging, RentalCar, Persons)
        VALUES (:AccomodationID, :Type, :Stars, :Lodging, :RentalCar, :Persons)
    ");

    $sql->execute([
            'AccomodationID' => $_POST['AccomodationID'],
            'Type'    => $_POST['Type'],
            'Stars'     => $_POST['Stars'],
            'Lodging'     => $_POST['Lodging'],
            'RentalCar'     => $_POST['RentalCar'],
            'Persons'     => $_POST['Persons']
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
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>


<h1>Add Accomodation</h1>

<form method="post" action="add.php">

    <p>Accomodation Number:</p>
    <input type="number" name="AccomodationID" placeholder="Accomodation ID">

    <p>Type:</p>
    <input type="text" name="Type" placeholder="Type">

    <p>Stars:</p>
    <input type="number" name="Stars" placeholder="Stars">

    <p>Lodging:</p>
    <input type="text" name="Lodging" placeholder="Lodging">

    <p>RentalCar:</p>
    <input type="number" name="RentalCar" placeholder="RentalCar">

    <p>Persons:</p>
    <input type="number" name="Persons" placeholder="Persons">

</form>
    <button class="opslaan-btn" type="submit" name="opslaan">Opslaan</button>
</body>
</html>
</div>

<div class="flight">
<?php
require_once './crud/dbcall.php';

if (isset($_POST['opslaan'])) {

$sql = $conn->prepare("
        INSERT INTO Flights (FlightNumber, Transfers, Duration)
        VALUES (:FlightNumber, :Transfers, :Duration)
    ");

$sql->execute([
    'FlightNumber' => $_POST['FlightNumber'],
    'Transfers'    => $_POST['Transfers'],
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
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>

<h1>Add Flight</h1>

<form method="post" action="add.php">

    <p>Vlucht Number:</p>
    <input type="number" name="FlightNumber" placeholder="Vlucht ID">

    <p>Transfers:</p>
    <input type="number" name="Transfers" placeholder="Transfers">

    <p>Duration(Hours):</p>
    <input type="number" name="Duration" placeholder="Uren">

</form>
    <button class="opslaan-btn" type="submit" name="opslaan">Opslaan</button>
</body>
</html>
</div>

<div class="trip">
<?php
require_once './crud/dbcall.php';

if (isset($_POST['opslaan'])) {

    $sql = $conn->prepare("
        INSERT INTO Trip (TripID, Location, AccomodationID, FlightID, ReviewID, Transport, Price)
        VALUES (:TripID, :Location, :AccomodationID, :FlightID, :ReviewID, :Transport, :Price)
    ");

    $sql->execute([
            'TripID' => $_POST['TripID'],
            'Location' => $_POST['Location'],
            'AccomodationID'    => $_POST['AccomodationID'],
            'FlightID'     => $_POST['FlightID'],
            'ReviewID'     => $_POST['ReviewID'],
            'Transport'     => $_POST['Transport'],
            'Price'     => $_POST['Price'],
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
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/admin.css">
</head>

<body>

<h1>Add Trip</h1>

<form method="post" action="add.php">

    <p>Trip ID:</p>
    <input type="number" name="Trip ID" placeholder="Trip ID">

    <p>Location:</p>
    <input type="text" name="Location" placeholder="Location">

    <p>AccomodationID:</p>
    <input type="number" name="AccomodationID" placeholder="AccomodationID">

    <p>FlightID:</p>
    <input type="number" name="FlightID" placeholder="FlightID">

    <p>ReviewID:</p>
    <input type="number" name="ReviewID" placeholder="ReviewID">

    <p>Transport:</p>
    <input type="text" name="Transport" placeholder="Transport">

    <p>Price:</p>
    <input type="number" name="Price" placeholder="Price">

</form>
    <button class="opslaan-btn" type="submit" name="opslaan">Opslaan</button>
</body>
</html>
</div>

</div>
