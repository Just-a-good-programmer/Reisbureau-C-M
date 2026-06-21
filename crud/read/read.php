<?php
require_once './crud/dbcall.php';
$stmt = $conn->prepare("SELECT t.Location, t.Image, t.SaleOption, t.AccomodationID, t.Transport, t.Price, a.Lodging, a.Type, a.Stars, a.RentalCarOption, f.Duration, f.Transfers, r.ReviewScore
FROM Trip t 
LEFT JOIN Accomodations a on t.AccomodationID = a.AccomodationID
LEFT JOIN Flights f on t.FlightID = f.FlightID
LEFT JOIN Review r on t.ReviewID = r.ReviewID
WHERE t.SaleOption LIKE :saleOption AND a.Stars LIKE :stars AND r.ReviewScore >= :reviewScore AND a.Lodging LIKE :lodging AND t.Transport LIKE :transport AND a.RentalCarOption LIKE :rentalOption");

$stmt->bindParam(':saleOption', $saleOption);
$stmt->bindParam(':stars', $stars);
$stmt->bindParam(':reviewScore', $reviewScore);
$stmt->bindParam(':lodging', $lodging);
$stmt->bindParam(':transport', $transport);
$stmt->bindParam(':rentalOption', $rentalOption);

if (isset($_GET['korting-keuze'])) {
    $saleOption = '%'. $_GET['korting-keuze'] . '%';
} else {
    $saleOption = '%';
}

if (isset($_GET['sterren-keuze'])) {
    $stars = '%'. $_GET['sterren-keuze'] . '%';
} else {
    $stars = '%';
}

    
if (isset($_GET['beoordeling-keuze'])) {
    $reviewScore = $_GET['beoordeling-keuze'];
} else {
    $reviewScore = 0;
}

if (isset($_GET['verzorging-keuze'])) {
    $lodging = '%'. $_GET['verzorging-keuze'] . '%';
} else {
    $lodging = '%';
}


if (isset($_GET['vervoer-keuze'])) {
    $transport = '%'. $_GET['vervoer-keuze'] . '%';
} else {
    $transport = '%';
}


if (isset($_GET['huurauto-keuze'])) {
    $rentalOption = '%'. $_GET['huurauto-keuze'] . '%';
} else {
    $rentalOption = '%';
}

$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);


