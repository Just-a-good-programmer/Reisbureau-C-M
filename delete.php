<?php
require_once './crud/dbcall.php';

$id = $_GET['id'];

$sql = $conn->prepare("DELETE FROM Flights WHERE FlightID = :id");
$sql->execute(['id' => $id]);

header("Location: admin.php");
exit;
?>


