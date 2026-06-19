<?php
require_once './crud/dbcall.php';

if (!isset($_GET['id'])) {
    die("Geen ID meegegeven");
}

$id = $_GET['id'];

$sql = $conn->prepare("DELETE FROM Trip WHERE TripID = :id");
$sql->execute(['id' => $id]);
$sql = $conn->prepare("DELETE FROM Flights WHERE FlightID = :id");
$sql->execute(['id' => $id]);
$sql = $conn->prepare("DELETE FROM Accomodations WHERE AccomodationID = :id");
$sql->execute(['id' => $id]);

header("Location: admin.php");
exit;
?>
