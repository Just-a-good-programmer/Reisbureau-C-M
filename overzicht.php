<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Overzicht</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>

    </header>

    <main>
        <section id="filter">
            <form action="" method="get">
                <div class="filter-header">
                    <h2>Korting</h2>
                </div>
                <input type="checkbox" id="scherp-geprijsd" name="korting-keuze" value="Scherp geprijsd">
                <label for="scherp-geprijsd">Scherp geprijsd</label>
                <input type="checkbox" id="kassakorting" name="korting-keuze" value="Kassakorting">
                <label for="kassakorting">Kassakorting</label>


                <input type="submit" value="filter">

                <div class="filter-header">
                    <h2>Aantal sterren</h2>
                </div>

                <input type="checkbox" id="1-ster" name="aantal-sterren-keuze" value="1">
                <label for="1-ster">1 ster</label>
                <input type="checkbox" id="2-sterren" name="aantal-sterren-keuze" value="2">
                <label for="2-sterren">2 sterren</label>
                <input type="checkbox" id="3-sterren" name="aantal-sterren-keuze" value="3">
                <label for="3-sterren">3 sterren</label>
                <input type="checkbox" id="4-sterren" name="aantal-sterren-keuze" value="4">
                <label for="4-sterren">4 sterren</label>
                <input type="checkbox" id="5-sterren" name="aantal-sterren-keuze" value="5">
                <label for="5-sterren">5 sterren</label>


                <div class="filter-header">
                    <h2>Beoordeling</h2>
                </div>

                <input type="checkbox" id="9-of-hoger" name="beoordeling-keuze" value="9">
                <label for="9-of-hoger">9 of hoger</label>
                <input type="checkbox" id="8-of-hoger" name="beoordeling-keuze" value="8">
                <label for="8-of-hoger">8 of hoger</label>
                <input type="checkbox" id="7-of-hoger" name="beoordeling-keuze" value="7">
                <label for="7-of-hoger">7 of hoger</label>
                <input type="checkbox" id="6-of-hoger" name="beoordeling-keuze" value="6">
                <label for="6-of-hoger">6 of hoger</label>
                <input type="checkbox" id="5-of-hoger" name="beoordeling-keuze" value="5">
                <label for="5-of-hoger">5 of hoger</label>


                <div class="filter-header">
                    <h2>Verzorging</h2>
                </div>

                <input type="checkbox" id="logies" name="verzorging-keuze" value="Logies">
                <label for="logies">Logies</label>
                <input type="checkbox" id="logies-ontbijt" name="verzorging-keuze" value="Logies en ontbijt">
                <label for="logies-ontbijt">Logies en ontbijt</label>
                <input type="checkbox" id="halfpension" name="verzorging-keuze" value="Halfpension">
                <label for="halfpension">Halfpension</label>
                <input type="checkbox" id="volpension" name="verzorging-keuze" value="Volpension">
                <label for="volpension">Volpension</label>
                <input type="checkbox" id="all-inclusive" name="verzorging-keuze" value="All-inclusive">
                <label for="all-inclusive">All-inclusive</label>

                <div class="filter-header">
                    <h2>Vervoer</h2>
                </div>

                <input type="checkbox" id="alle-luchthavens" name="vervoer-keuze" value="Alle luchthavens">
                <label for="alle-luchthavens">Alle luchthavens</label>
                <input type="checkbox" class="luchthaven" id="amsterdam" name="vervoer-keuze" value="Amsterdam">
                <label for="amsterdam">Vanaf Amsterdam</label>
                <input type="checkbox" class="luchthaven" id="schiphol" name="vervoer-keuze" value="Schiphol">
                <label for="schiphol">Vanaf Schiphol</label>
                <input type="checkbox" class="luchthaven" id="eindhoven" name="vervoer-keuze" value="Eindhoven">
                <label for="eindhoven">Vanaf Eindhoven</label>
                <input type="checkbox" class="luchthaven" id="dusseldorf" name="vervoer-keuze" value="Düsseldorf">
                <label for="dusseldorf">Vanaf Düsseldorf</label>

                <input type="checkbox" id="eigen-vervoer" name="vervoer-keuze" value="Eigen Vervoer">
                <label for="eigen-vervoer">Eigen Vervoer</label>
                <input type="checkbox" id="trein" name="vervoer-keuze" value="Trein">
                <label for="trein">Trein</label>
                <input type="checkbox" id="auto" name="vervoer-keuze" value="Auto">
                <label for="auto">Auto</label>

                <div class="filter-header">
                    <h2>Huurauto</h2>
                </div>
                <input type="checkbox" id="inclusief-huurauto" name="huurauto-keuze" value="Inclusief huurauto">
                <label for="inclusief-huurauto">Inclusief huurauto</label>
                <input type="checkbox" id="optionele-huurauto" name="huurauto-keuze" value="Optionele huurauto">
                <label for="optionele-huurauto">Optionele huurauto</label>

                <input type="submit" value="filter">

            </form>
        </section>
    </main>
    <footer>

    </footer>
</body>

</html>