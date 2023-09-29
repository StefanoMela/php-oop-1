<?php 

require_once __DIR__ . '/Models/Movies.php';


$new_movie = new Movie(
    'Iron Man',
    'Action',
    'US / CAN',
    '180 minutes',
);

$new_movie_2 = new Movie(
    'Spider-Man',
    'Action',
    'US / CAN',
    '120 minutes',
);
var_dump($new_movie->getFullInfo());

echo '<hr>';

var_dump($new_movie_2->getFullInfo());

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
</head>
<body>
    
</body>
</html>