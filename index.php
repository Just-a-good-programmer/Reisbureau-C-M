<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hoofdpagina</title>
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body class="flexbox-setting">
<header>
<div class="titel">
    <img src="assets/img/tropical_palm_2.png" alt="Logo">
    <hi>Carmitch Reizen</hi>
</div>
   <nav role="navigation">
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" id="menuCheckbox" />
    
    <span></span>
    <span></span>
    <span></span>
    
    <ul id="menu">
      <li>
        <a href="#">
          <label for="menuCheckbox" onclick="this.parentNode.click();">Home</label>
        </a>
      </li>
      <li>
        <a href="#about">
          <label for="menuCheckbox" onclick="this.parentNode.click();">About</label>
        </a>
      </li>
      
      <!-- These just close the menu -->
      <li><label for="menuCheckbox"><a>Info</a></label></li>
      <li><label for="menuCheckbox"><a>Contact</a></label></li>
      
      <!-- Or just use regular URLs -->
      <li>
        <a href="https://erikterwan.com/" target="_blank">Show me more</a>
      </li>
    </ul>
  </div>
</nav><!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--        MIT License        -->
<nav role="navigation">
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" id="menuCheckbox" />
    
    <span></span>
    <span></span>
    <span></span>
    

    <ul id="menu">
      <li>
        <a href="#">
          <label for="menuCheckbox" onclick="this.parentNode.click();">Home</label>
        </a>
      </li>
      <li>
        <a href="#about">
          <label for="menuCheckbox" onclick="this.parentNode.click();">About</label>
        </a>
      </li>
      
      <!-- These just close the menu -->
      <li><label for="menuCheckbox"><a>Info</a></label></li>
      <li><label for="menuCheckbox"><a>Contact</a></label></li>
      
      <!-- Or just use regular URLs -->
      <li>
        <a href="overzicht.php" target="_blank">Overzicht Pagina</a>
      </li>
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

    <footer>

    </footer>
</body>
</html>