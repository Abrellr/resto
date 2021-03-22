<?php
include('../database/connection.php');
include('../elements/header.php');
include('../elements/jumbotron.php') ?>

<!-- BUTTONS -->
<div class="container mb-3 mt-5">
    <div class="row d-flex flex-column">
        <h2>Kategorien - Filter</h2>
        <div class="d-flex justify-content-start">
            <div class="myBtnContainer">
                <a href="?categories=alles" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['categories'] == 'alles' ? 'active' : '' ?>">Alles</a>
                <a href="?categories=burger" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['categories'] == 'burger' ? 'active' : '' ?>">Burger</a>
                <a href="?categories=pizza pasta" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['categories'] == 'pizza pasta' ? 'active' : '' ?>">Pizza/Pasta</a>
                <a href="?categories=asiatisch" role="button" class="btn btn-lg mb-2 grow <?= $_GET['categories'] == 'asiatisch' ? 'active' : '' ?>">Asiatisch</a>
                <a href="?categories=hausmannskost" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['categories'] == 'hausmannskost' ? 'active' : '' ?>">Hausmannskost</a>
                <a href="?categories=sonstiges" role="button" class="btn btn-lg mb-2 grow <?= $_GET['categories'] == 'sonstiges' ? 'active' : '' ?>">Sonstiges</a>
            </div>
        </div>
    </div>
</div>

<div class="container mb-3 mt-5 d-flex flex-row">
    <div class="row d-flex flex-column">
        <h2 class="d-flex justify-content-start">Entfernung</h2>
        <div class="md-6 xl-6 d-flex justify-content-start">
            <div class="myBtnContainer d-flex justify-content-start">
                <a href="?distance_stars=3" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['distance_stars'] == 3 ? 'active' : '' ?>">egal ⭐ ⭐ ⭐</a>
                <a href="?distance_stars=2" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['distance_stars'] == 2 ? 'active' : '' ?>">mittel ⭐ ⭐</a>
                <a href="?distance_stars=1" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['distance_stars'] == 1 ? 'active' : '' ?>">nah ⭐</a>
            </div>
        </div>
    </div>
    <div class="row d-flex flex-column ml-5">
        <h2 class="d-flex justify-content-end">Preis</h2>
        <div class="md-6 xl-6 d-flex justify-content-end">
            <div class="myBtnContainer d-flex justify-content-end">
                <a href="?price_stars=3" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['price_stars'] == 3 ? 'active' : '' ?>">egal ⭐ ⭐ ⭐</a>
                <a href="?price_stars=2" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['price_stars'] == 2 ? 'active' : '' ?>">mittel ⭐ ⭐</a>
                <a href="?price_stars=1" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['price_stars'] == 1 ? 'active' : '' ?>">günstig ⭐</a>
            </div>
        </div>
    </div>
</div>

<div class="container mb-3 mt-5">
    <div class="row d-flex flex-column">
        <h2>Veggietauglich</h2>
        <div class="d-flex justify-content-start">
            <div class="myBtnContainer">
                <a href="?veggie_stars=3" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['veggie_stars'] == 3 ? 'active' : '' ?>">wenig veggie</a>
                <a href="?veggie_stars=2" role="button" class="btn btn-lg mr-2 mb-2 grow <?= $_GET['veggie_stars'] == 2 ? 'active' : '' ?>">mittel veggie Auswahl</a>
                <a href="?veggie_stars=1" role="button" class="btn btn-lg mr-2 mb-2 grow  <?= $_GET['veggie_stars'] == 1 ? 'active' : '' ?>">gute veggie Auswahl</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 id="result">Ergebnisse </h2>
    <?php
    if (isset($_GET['categories'])) {
        $sql = "SELECT * FROM restaurants WHERE categories='$_GET[categories]'";
    } else if (isset($_GET['distance_stars'])) {
        $sql = "SELECT * FROM restaurants WHERE distance_stars='$_GET[distance_stars]'";
    } else if (isset($_GET['price_stars'])) {
        $sql = "SELECT * FROM restaurants WHERE price_stars='$_GET[price_stars]'";
    } else if (isset($_GET['veggie_stars'])) {
        $sql = "SELECT * FROM restaurants WHERE veggie_stars='$_GET[veggie_stars]'";
    } else {
        $sql = "SELECT * FROM restaurants";
    }


    $result = mysqli_query($link, $sql);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<ul>
                <li><b>$row[name]</b> | Entfernung Sterne: $row[distance_stars] | Preis Sterne: $row[price_stars] | Veggie Sterne: $row[veggie_stars]</li>
            </ul>";
        }
    } else {
        echo "error at " . mysqli_error($link);
    }

    ?>
    <a class="btn btn-lg mr-2 mb-2 grow" href="?">Reset</a>
</div>