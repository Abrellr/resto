<?php include('../database/connection.php');
include('../elements/header.php');
include('../elements/jumbotron.php') ?>

<!-- BUTTONS -->
<div class="container mb-3 mt-5">
    <div class="row d-flex flex-column">
        <h2>Kategorien - Filter</h2>
        <div class="d-flex justify-content-start">
            <div class="myBtnContainer">
                <a href="#result" role="button" class="btn btn-lg mr-2 mb-2 grow">Alles</a>
                <a href="#result" role="button" class="btn btn-lg mr-2 mb-2 grow">Burger</a>
                <a href="#result=<?php $sql = "SELECT * FROM restaurants WHERE categories = 'pizza, pasta';"; ?>" role="button" class="btn btn-lg mr-2 mb-2 grow">Pizza/Pasta</a>
                <a href="#result" role="button" class="btn btn-lg mb-2 grow">Asiatisch</a>
                <a href="#result" role="button" class="btn btn-lg mr-2 mb-2 grow">Hausmannskost</a>
                <a href="#result" role="button" class="btn btn-lg mb-2 grow">Sonstiges</a>
            </div>
        </div>
    </div>
</div>

<div class="container mb-3 mt-5 d-flex flex-row">
    <div class="row d-flex flex-column">
        <h2 class="d-flex justify-content-start">Entfernung</h2>
        <div class="md-6 xl-6 d-flex justify-content-start">
            <div class="myBtnContainer">
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">egal</a>
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">nicht so weit weg</a>
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">ganz nah dran</a>
            </div>
        </div>
    </div>
    <div class="row d-flex flex-column ml-5">
        <h2 class="d-flex justify-content-end">Preis</h2>
        <div class="md-6 xl-6 d-flex justify-content-end">
            <div class="myBtnContainer">
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">egal</a>
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">nicht zu viel</a>
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">Ende des Monats</a>
            </div>
        </div>
    </div>
</div>

<div class="container mb-3 mt-5">
    <div class="row d-flex flex-column">
        <h2>Veggietauglich</h2>
        <div class="d-flex justify-content-start">
            <div class="myBtnContainer">
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">wenig veggie</a>
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">mittel veggie Auswahl</a>
                <a href="" role="button" class="btn btn-lg mr-2 mb-2 grow">gute veggie Auswahl</a>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2 id="result">Ergebnisse </h2>
    <?php
    $sql = "SELECT * FROM restaurants";
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
</div>