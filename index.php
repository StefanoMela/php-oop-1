<?php 

include './data/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
</head>
<body>
    <h1>Film</h1>
    <ul>
        <?php foreach($movies as $movie): ?>
        <li>
            <?= $movie->getFullInfo() ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

