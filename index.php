<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdpagina</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="flexbox-setting">
<header>
<div class="titel">
    <img src="assets/img/tropical_sunset_logo_with_palm_2.png" alt="Logo">
    <hi>Carmitch Reizen</hi>
</div>
    <nav role="navigation">
        <div id="menuToggle">
            <!--
            A fake / hidden checkbox is used as click reciever,
            so you can use the :checked selector on it.
            -->
            <input type="checkbox" id="menuCheckbox" />

            <!--
            Some spans to act as a hamburger.

            They are acting like a real hamburger,
            not that McDonalds stuff.
            -->
            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">
                <li><label for="menuCheckbox"><a>Info</a></label></li>
                <li><label for="menuCheckbox"><a>Contact</a></label></li>

            </ul>
        </div>
    </nav>

</header>
<main class="flexbox-setting">
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
    </main>

    <footer>

    </footer>
</body>
</html>