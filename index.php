<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdpagina</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header>


</header>
<main>
    <div class="box">
        <div class="box-title">Vakanties</div>
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
</main>

<footer>

</footer>
</body>
</html>