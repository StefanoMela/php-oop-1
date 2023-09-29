<?php 

include 'server.php';


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
        <?php foreach($movie as $movie): ?>
        <li>
            <?= $movie->getFullInfo() ?> - <?= $movie->genre->getFullGenre() ?>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>