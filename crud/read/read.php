<?php
require_once './crud/dbcall.php';
$stmt = $conn->prepare("SELECT t.Location, t.AccomodationID, t.Transport, t.Price, a.Lodging, a.Type, a.Stars, f.Duration, f.Transfers   
FROM Trip t 
INNER JOIN Accomodations a on t.AccomodationID = a.AccomodationID
INNER JOIN Flights f on t.FlightID = f.FlightID;");

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);