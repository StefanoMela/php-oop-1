<?php 

require_once __DIR__ . '/Models/Movies.php';
require_once __DIR__ . '/Models/Genre.php';


$new_genre = new Genre(

    'Action',
    'Horror',

);
$new_genre_2 = new Genre(

    'Sci-Fi',
    'Drama',

);


$new_movie = new Movie(
    'Iron Man',
    $new_genre,
    'US / CAN',
    '180 minutes',
);

$new_movie_2 = new Movie(
    'Spider-Man',
    $new_genre_2,
    'US / CAN',
    '120 minutes',
);
var_dump($new_movie->getFullInfo());
var_dump($new_movie->genre->getFullGenre());

echo '<hr>';

var_dump($new_movie_2->getFullInfo());
var_dump($new_movie_2->genre->getFullGenre());

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