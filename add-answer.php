<?php

include './database/config.php';
include './database/models/form.php';


$info = [
    '1' => $_POST['1'],
    '2' => $_POST['2'],
    '3' => $_POST['3'],
    'order-id' => $_POST['order-id']
];

addAnswer($pdo, $info);

header('Location: dashboard.php');