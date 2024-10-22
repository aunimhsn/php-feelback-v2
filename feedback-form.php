<?php
include './database/config.php';
include './database/models/question.php';
include './database/models/order.php';

addOrder($pdo, 'REF-COMMANDE-123');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feelback</title>
</head>
<body>
    <h1>Le questionnaire de satisfaction</h1>

    <form action="./add-answer.php" method="post">
        <?php
            $questions = getAllQuestions($pdo);

            foreach($questions as $question) {
        ?>
            <div>
                <label for="<?=$question['id']?>"><?=$question['title']?></label>
                <input type="radio" name=<?=$question['id']?> id=<?=$question['id']?> value="1"> 1
                <input type="radio" name=<?=$question['id']?> id=<?=$question['id']?> value="2"> 2
                <input type="radio" name=<?=$question['id']?> id=<?=$question['id']?> value="3"> 3
                <input type="radio" name=<?=$question['id']?> id=<?=$question['id']?> value="4"> 4
                <input type="radio" name=<?=$question['id']?> id=<?=$question['id']?> value="5"> 5
            </div>
        <?php
            }
        ?>
        <input type="hidden" name="order-id" id="order-id" value="<?=getLastOrder($pdo)['id']?>">
        <button type="submit">Envoyer</button>
    </form>
</body>
</html>