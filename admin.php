<?php
require_once './crud/dbcall.php';

$sql = $conn->prepare("SELECT * FROM Flights");
$sql->execute();
$flights = $sql->fetchAll(PDO::FETCH_ASSOC);

?>


<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin – Vluchten</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        body {
            font-family: Arial, sans-serif;
            background: ;
            margin: 0;
            padding: 0;
        }

        header {
            background: #6c3baa;
            color: white;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 900px;
            margin: 40px auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            margin-top: 0;
        }

        .btn-box {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .toevoegen-btn {
            flex: 1;
            padding: 15px;
            text-align: center;
            background: #6c3baa;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            transition: 0.2s;
        }

        .bewerken-btn {
            flex: 1;
            padding: 15px;
            text-align: center;
            background: #6c3baa;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            transition: 0.2s;
        }

        .verwijderen-btn {
            flex: 1;
            padding: 15px;
            text-align: center;
            background: #6c3baa;
            color: white;
            text-decoration: none;
            border-radius: 8px;
            font-size: 18px;
            transition: 0.2s;
        }
    </style>
</head>

<body>

<header>
    <h1>Admin </h1>
</header>

<div class="beheerder-btn">
    <h2>Beheer Vluchten</h2>

        <a class="add-btn" href="add.php">✈️ Add Flight</a>
</div>

<?php foreach ($flights as $f): ?>

    <div class="all-flights">
    Vlucht ID: <?= $f['FlightID'] ?><br>
    Nummer: <?= $f['FlightNumber'] ?><br>
    Transfers: <?= $f['Transfers'] ?><br>
    Duur: <?= $f['Duration'] ?> uur<br>
    </div>
    <a class="edit-btn" href="edit.php">🛠️ Vlucht bewerken</a>
    <a class="delete-btn" href="delete.php">🗑️ Vlucht verwijderen</a>


<?php endforeach; ?>s

</body>
</html>
