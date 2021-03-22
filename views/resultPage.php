<?php include('../database/connection.php');
include('../elements/header.php') ?>

<div class="container mt-5">
    <h2>Ergebnisse </h2>
    <?php
    $sql = "SELECT * FROM restaurants WHERE categories = 'alles';";
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