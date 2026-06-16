<?php
require_once 'crud/read/read.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
    <link rel="stylesheet" href="assets/css/overzicht.css">
</head>

<body>
    <header>

    </header>

    <main class="main-content">
        <section id="filter">
            <form action="" method="get">
                <div class="filter-header">
                    <h2>Korting</h2>
                </div>
                <div class="">
                <input type="checkbox" id="scherp-geprijsd" name="korting-keuze" value="Scherp geprijsd">
                <label for="scherp-geprijsd">Scherp geprijsd</label>
                </div>
                <div class="">
                <input type="checkbox" id="kassakorting" name="korting-keuze" value="Kassakorting">
                <label for="kassakorting">Kassakorting</label>
                </div>
                <div class="filter-button">
                <input type="submit" value="filter">
                </div>
                <div class="filter-header">
                    <h2>Aantal sterren</h2>
                </div>
                <div class="star-filter-">
                <input type="checkbox" id="1-ster" name="aantal-sterren-keuze" value="1">
                <label for="1-ster">1 ster</label>
                </div>
                <div class="star-filter-item">
                <input type="checkbox" id="2-sterren" name="aantal-sterren-keuze" value="2">
                <label for="2-sterren">2 sterren</label>
                </div>
                <div class="star-filter-item">
                <input type="checkbox" id="3-sterren" name="aantal-sterren-keuze" value="3">
                <label for="3-sterren">3 sterren</label>
                </div>
                <div class="star-filter-item">
                <input type="checkbox" id="4-sterren" name="aantal-sterren-keuze" value="4">
                <label for="4-sterren">4 sterren</label>
                </div>
                <div class="star-filter-item">
                <input type="checkbox" id="5-sterren" name="aantal-sterren-keuze" value="5">
                <label for="5-sterren">5 sterren</label>
                </div>


                <div class="filter-header">
                    <h2>Beoordeling</h2>
                </div>
                <div>
                    <p id="review-checked"></p>
                </div>
                <div class="review-filter-group">
                <input type="checkbox" class="review-filter-item" id="9-of-hoger" name="beoordeling-keuze" value="9">
                <label for="9-of-hoger">9 of hoger</label>
                </div>
                <div class="review-filter-group">
                <input type="checkbox" class="review-filter-item" id="8-of-hoger" name="beoordeling-keuze" value="8">
                <label for="8-of-hoger">8 of hoger</label>
                </div>
                <div class="review-filter-group">
                <input type="checkbox" class="review-filter-item" id="7-of-hoger" name="beoordeling-keuze" value="7">
                <label for="7-of-hoger">7 of hoger</label>
                </div>
                <div class="review-filter-group">
                <input type="checkbox" class="review-filter-item" id="6-of-hoger" name="beoordeling-keuze" value="6">
                <label for="6-of-hoger">6 of hoger</label>
                </div>
                <div class="review-filter-group">
                <input type="checkbox" class="review-filter-item" id="5-of-hoger" name="beoordeling-keuze" value="5">
                <label for="5-of-hoger">5 of hoger</label>
                </div>


                <div class="filter-header">
                    <h2>Verzorging</h2>
                </div>
                <div class="lodging-filter-item">
                <input type="checkbox" id="logies" name="verzorging-keuze" value="Logies">
                <label for="logies">Logies</label>
                </div>
                <div class="lodging-filter-item">
                <input type="checkbox" id="logies-ontbijt" name="verzorging-keuze" value="Logies en ontbijt">
                <label for="logies-ontbijt">Logies en ontbijt</label>
                </div>
                <div class="lodging-filter-item">
                <input type="checkbox" id="halfpension" name="verzorging-keuze" value="Halfpension">
                <label for="halfpension">Halfpension</label>
                </div>
                <div class="lodging-filter-item">
                <input type="checkbox" id="volpension" name="verzorging-keuze" value="Volpension">
                <label for="volpension">Volpension</label>
                </div>
                <div class="lodging-filter-item">
                <input type="checkbox" id="all-inclusive" name="verzorging-keuze" value="All-inclusive">
                <label for="all-inclusive">All-inclusive</label>
                </div>

                <div class="filter-header">
                    <h2>Vervoer</h2>
                </div>
                <div>
                <input type="checkbox" id="alle-luchthavens" name="vervoer-keuze">
                <label for="alle-luchthavens">Alle luchthavens</label>
                </div>
                <div id="luchthaven-container">
                    <div class="transport-filter-group">
                    <input type="checkbox" class="luchthaven transport-filter-item" id="amsterdam" name="vervoer-keuze" value="Amsterdam">
                    <label for="amsterdam">Vanaf Amsterdam</label>
                    </div>
                    <div class="transport-filter-group">
                    <input type="checkbox" class="luchthaven transport-filter-item" id="schiphol" name="vervoer-keuze" value="Schiphol">
                    <label for="schiphol">Vanaf Schiphol</label>
                    </div>
                    <div class="transport-filter-group">
                    <input type="checkbox" class="luchthaven transport-filter-item" id="eindhoven" name="vervoer-keuze" value="Eindhoven">
                    <label for="eindhoven">Vanaf Eindhoven</label>
                    </div>
                    <div class="transport-filter-group">
                    <input type="checkbox" class="luchthaven transport-filter-item" id="dusseldorf" name="vervoer-keuze" value="Düsseldorf">
                    <label for="dusseldorf">Vanaf Düsseldorf</label>
                    </div>
                </div>
                <div class="transport-filter-group">
                <input type="checkbox" id="eigen-vervoer" name="vervoer-keuze" value="Eigen Vervoer">
                <label for="eigen-vervoer">Eigen Vervoer</label>
                </div>
                <div class="transport-filter-group">
                <input type="checkbox" id="trein" name="vervoer-keuze" value="Trein">
                <label for="trein">Trein</label>
                </div>
                <div class="transport-filter-group">
                <input type="checkbox" id="auto" name="vervoer-keuze" value="Auto">
                <label for="auto">Auto</label>
                </div>
                <div class="filter-header">
                    <h2>Huurauto</h2>
                </div>
                <div class="rental-filter-item">
                <input type="checkbox" id="inclusief-huurauto" name="huurauto-keuze" value="Inclusief huurauto">
                <label for="inclusief-huurauto">Inclusief huurauto</label>
                </div>
                <div class="rental-filter-item">
                <input type="checkbox" id="optionele-huurauto" name="huurauto-keuze" value="Optionele huurauto">
                <label for="optionele-huurauto">Optionele huurauto</label>
                </div>
                <div class="filter-button">
                <input type="submit" value="filter">
                </div>
            </form>
        </section>
        <section id="selection-overview">
            <div id="selection-overview-header">
                <h1>Reisoverzicht</h1>
            </div>
            <div class="selection-overview-container">
                
                <?php foreach ($result as $row): ?>
                    <div class="selection-overview-item">
                    <div class="img-box">
                    <h2><?php  echo $row['Location']; ?></h2>
                    <div class="type-star-group">
                    <h3><?php  echo $row['Type']; ?></h3>
                    <p><?php for ($i = 0; $i < $row['Stars']; $i++): ?>
                        <span>&#9733;</span>
                    <?php endfor; ?></p>
                    </div>
                    <img src="./assets/img/Mallorca-picture.jpg" alt="<?php echo $row['Location']; ?>">
                    </div>
                    <div class="info-box">
                        <div class="icon-group"><img src="./assets/img/calendar.png" alt="calendar" class="info-icon"><p><?php echo $row['Duration'] . ' dagen';?></p></div>
                        <div class="icon-group"><img src="./assets/img/plane-silhouette.png" alt="transport" class="info-icon"><p><?php echo $row['Transport']; ?></p></div>
                        <div class="icon-group"><img src="./assets/img/fork-and-knife.png" alt="lodging" class="info-icon"><p><?php echo $row['Lodging']; ?></p></div>
                        <h2><?php echo '€ ' . $row['Price'] . ',-' . " per persoon"; ?></h2>
                    </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </section>
    </main>
    <footer>

    </footer>
</body>
<script src="functions/js/script.js"></script>
</html>