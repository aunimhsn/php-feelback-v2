<?php

function getAllQuestions($pdo) : array {
    $sql = 'select * from questions';
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
    return $questions;
}