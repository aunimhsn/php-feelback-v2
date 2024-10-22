<?php

include('./database/config.php');
include('./database/models/form.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
</head>
<body>
    <h2>Nombre de réponses : <?=getAnswersCount($pdo)?></h2>
    <h2>Note moyenne - délai de livraison : <?=getAvgMarkDeliveryDelay($pdo)?> / 5</h2>
    <h2>Note moyenne - état du colis : <?=getAvgMarkPackageState($pdo)?> / 5</h2>
    <h2>Note moyenne - comportement du livreur : <?=getAvgMarkDelivererBehavior($pdo)?> / 5</h2>
</body>
</html>