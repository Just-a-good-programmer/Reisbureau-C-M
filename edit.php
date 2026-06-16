<?php
require_once './crud/dbcall.php';

if (isset($_POST['FlightNumber'])) {

    $sql =  $conn->prepare("
        UPDATE Flights
        SET FlightNumber = :FlightNumber,
            Transfers = :Transfers,
            Duration = :Duration
        WHERE FlightID = :id
    ");

    $sql->execute([
        'FlightID'     => $_POST['FlightID'],
        'FlightNumber' => $_POST['FlightNumber'],
        'Transfers'    => $_POST['Transfers'],
        'Duration'     => $_POST['Duration']
    ]);

    header("Location: admin.php");
    exit;
}

// -----------------------------
// 2. Huidige vlucht ophalen
// -----------------------------
$sql = $conn->prepare("SELECT * FROM Flights WHERE FlightID = :id");
$sql->execute(['id' => $_GET['id']]);
$flight = $sql->fetch();
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Vlucht bewerken</title>
</head>
<body>

<h1>Vlucht bewerken</h1>

<form method="post">

    <input type="hidden" name="id" value="<?php echo $flight['FlightID']; ?>">

    <label>Vlucht Nummer</label>
    <input type="number" name="FlightNumber" value="<?php echo $flight['FlightNumber']; ?>">

    <label>Transfers</label>
    <input type="number" name="Transfers" value="<?php echo $flight['Transfers']; ?>">

    <label>Duur (uren)</label>
    <input type="number" name="Duration" value="<?php echo $flight['Duration']; ?>">

    <button type="submit" name="opslaan">Opslaan</button>

</form>

</body>
</html>
