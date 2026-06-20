<?php
$conn = new PDO('mysql:host=db;dbname=carmitchreizen', 'user', 'password');
$sql = $conn->prepare("SELECT * FROM Trip");
$sql->execute();
$result = $sql->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdpagina</title>
    <link rel="stylesheet" href="assets/css/index.css">
    <script src="functions/js/index.js"></script>


</head>
<body>
<header>

    <div id="mySidepanel" class="sidepanel">
        <div class="titel-panel">
            <img src="assets/img/tropical_palm_2.png" alt="Logo">
            <h1>Carmitch Reizen</h1>
        </div>

        <form method="get" class="form-main" action="">
            <div class="form-box">
                <label for="search">Zoek</label><input class="form-text" type="text" id="search" name="search"
                                                       placeholder="search..">
            </div>
            <input class="form-button" name="submit" type="submit" value="Submit">
        </form>
        <?php
        if (isset($_GET['submit'])) {
            $sql = $conn->prepare("SELECT * FROM Trip WHERE Location LIKE :search OR Transport LIKE :search");
            $sql->bindValue(':search', '%' . $_GET['search'] . '%');
            $sql->execute();
            $result = $sql->fetchAll();
        } else {
            $sql = $conn->prepare("SELECT * FROM Trip");
            $sql->execute();
            $result = $sql->fetchAll();
        }

        ?>

        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="functions/over-ons.php">Over Ons</a>
        <a href="#">Services</a>
        <a href="#">Clients</a>
        <a href="#">Contact</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰</button>


    <div class="titel">
        <img src="assets/img/tropical_palm_2.png" alt="Logo">
        <hi>Carmitch Reizen</hi>
    </div>

</header>
<main class="flexbox-setting">
    <div class="box">
        <div class="box-title">
            Vakanties
        </div>
        <form class="searchbox" action="" method="get">
            <div class="column">
                <label>Vakantietype</label>
                <select class="input-box">
                    <option selected>geen voorkeur</option>
                    <option value="Vliegreis">Vliegreis</option>
                    <option value="Treinreis">Treinreis</option>
                    <option value="Autoreis">Autoreis</option>
                </select>
            </div>
            <div class="column">
                <label>Bestemming</label>
                <input class="input-box" type="text" placeholder="bestemming">
            </div>
            <div class="column">
                <label>Vertrekdatum</label>
                <input class="input-box" type="date" placeholder="datum">
            </div>
            <div class="column">
                <label>Hoeveel personen</label>
                <input class="input-box" placeholder="Hoeveel personen?" type="number" name="personen">
            </div>
            <input class="searchbutton" type="submit" value="Zoeken">
        </form>
    </div>
    <div class="promo">
        <div class="promo-2">
            <div class=" img-box">
                <div class="tekst-img"> Top 10 budget vakanties</div>
                <img class="img-settings" src="assets/img/vakantietips-MV-shutterstock.jpg" alt="">
            </div>
            <div class="img-box">
                <div class="tekst-img"> 5 tips voor jou vakantie</div>
                <img class="img-settings" src="assets/img/familie-vakantie.jpg" alt=""
            </div>
        </div>
    </div>
    <div>
        <div class="img-box">
            <div class="tekst-img">GROTE deals voor een GROTE vakantie</div>
            <img class="img-settings" src="assets/img/Spanje-Mallorca.jpg" alt="">
        </div>
    </div>
    </div>

    <? foreach ($result as $tripItem) { ?>
        <h3> <?php
            echo $tripItem['Location'];
            ?>
        </h3>
        <h3> <?php
            echo $tripItem['Transport'];
            ?>
        </h3>
    <? } ?>

</main>


<footer>

</footer>
</body>
</html>