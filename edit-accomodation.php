<?php
require_once './crud/dbcall.php';

$id = $_GET['id'];

$sql = $conn->prepare("SELECT * FROM Accomodations WHERE AccomodationID = :id");
$sql->execute(['id' => $id]);
$Accomodations = $sql->fetchAll(PDO::FETCH_ASSOC);

if (isset($_POST['opslaan'])) {

    $update = $conn->prepare("
        UPDATE Accomodations
        SET Type = :Type,
            Stars = :Stars,
            Lodging = :Lodging,
            RentalCar = :RentalCar,
            Persons = :Persons
        WHERE AccomodationID = :id
    ");

    $update->execute([
            'Type'      => $_POST['Type'],
            'Stars'     => $_POST['Stars'],
            'Lodging'   => $_POST['Lodging'],
            'RentalCar' => $_POST['RentalCar'],
            'Persons'   => $_POST['Persons'],
            'id'        => $id
    ]);

    header("Location: admin.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<body>

<h1>Accomodation bewerken</h1>

<div class="edit">
    <form method="post">
     Type:
      <input type="text" name="Type" placeholder="Type" value="<?= $Accomodations['Type'] ?>"><p>
     Stars:
     <input type="number" name="Stars" placeholder="Stars" value="<?= $Accomodations['Stars'] ?>"><p>
     Lodging:
     <input type="text" name="Lodging" placeholder="Lodging" value="<?= $Accomodations['Lodging'] ?>"><p>
     RentalCar:
     <input type="text" name="RentalCar" placeholder="RentalCar" value="<?= $Accomodations['RentalCar'] ?>"><p>
     Persons:
     <input type="number" name="Persons" placeholder="Persons" value="<?= $Accomodations['Persons'] ?>"><p>

      <button type="submit" name="opslaan">Opslaan</button>

    </form>
</div>

</body>
</html>
