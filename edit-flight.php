<?php
require_once './crud/dbcall.php';

$id = $_GET['id'];

$sql = $conn->prepare("SELECT * FROM Flights WHERE FlightID = :id");
$sql->execute(['id' => $id]);
$Flights = $sql->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['opslaan'])) {

    $update = $conn->prepare("
        UPDATE Flights
        SET FlightNumber	 = :FlightNumber	,
            Transfers = :Transfers,
            Duration = :Duration
        WHERE FlightID = :id
    ");

    $update->execute([
            'FlightNumber'      => $_POST['FlightNumber'],
            'Transfers'     => $_POST['Transfers'],
            'Duration'   => $_POST['Duration'],
            'id'        => $id
    ]);

    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<headers>
<h1>Flight bewerken</h1>
</headers>

<form method="post">
    FlightNumber:
    <input type="text" name="Type" placeholder="FlightNumber" value="<?= $Flights['FlightNumber'] ?>"><p>
    Transfers:
    <input type="number" name="Stars" placeholder="Transfers" value="<?= $Flights['Transfers'] ?>"><p>
    Duration:
    <input type="text" name="Lodging" placeholder="Duration" value="<?= $Flights['Duration'] ?>"><p>

    <button type="submit" name="opslaan">Opslaan</button>

</form>

</body>
</html>

