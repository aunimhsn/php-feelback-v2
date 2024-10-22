<?php

function addOrder($pdo, string $reference) {
    $sql = 'insert into orders (reference) values (:reference)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['reference' => $reference]);

    $lastOrderId = getLastOrder($pdo)['id'];
    // orders_has_products
    $sql = 'insert into orders_has_products (orders_id, products_id) values (:lastOrderId, :productId)';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['lastOrderId' => $lastOrderId, 'productId' => 1]);
}

function getLastOrder($pdo) {
    $sql = 'select * from orders order by created_at desc limit 1';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $order = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];

    return $order;
}