<?php
require_once './crud/dbcall.php';

$id = $_GET['id'];

$sql = $conn->prepare("SELECT * FROM Trip WHERE TripID = :id");
$sql->execute(['id' => $id]);
$Trip = $sql->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['opslaan'])) {

    $update = $conn->prepare("
        UPDATE Trip
        SET Location	 = :Location	,
            AccomodationID = :AccomodationID,
            FlightID = :FlightID,
            ReviewID = :ReviewID,
            Transport = :Transport,
            Price = :Price
        WHERE TripID = :id
    ");

    $update->execute([
            'Location	'      => $_POST['Location'],
            'AccomodationID	'      => $_POST['AccomodationID'],
            'FlightID'     => $_POST['FlightID'],
            'ReviewID'   => $_POST['ReviewID'],
            'Transport'   => $_POST['Transport'],
            'Price'   => $_POST['Price'],
            'id'        => $id
    ]);

    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Trip bewerken</h1>

<form method="post">
    Location:
    <input type="text" name="Type" placeholder="Location" value="<?= $Flights['Location'] ?>"><p>
    AccomodationID:
    <input type="number" name="Stars" placeholder="AccomodationID" value="<?= $Flights['AccomodationID'] ?>"><p>
    FlightID:
    <input type="text" name="Lodging" placeholder="FlightID" value="<?= $Flights['FlightID'] ?>"><p>
    ReviewID:
    <input type="text" name="Lodging" placeholder="ReviewID" value="<?= $Flights['ReviewID'] ?>"><p>
    Transport:
    <input type="text" name="Lodging" placeholder="Transport" value="<?= $Flights['Transport'] ?>"><p>
    Price:
    <input type="text" name="Lodging" placeholder="Price" value="<?= $Flights['Price'] ?>"><p>

    <button type="submit" name="opslaan">Opslaan</button>

</form>

</body>
</html>

