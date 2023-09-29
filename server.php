<?php 

require_once __DIR__ . '/Models/Movies.php';
require_once __DIR__ . '/Models/Genre.php';


$genre = new Genre(

    'Action',
    'Horror',

);
$genre_2 = new Genre(

    'Sci-Fi',
    'Drama',

);


$movie = new Movie(
    'Iron Man',
    $genre,
    'US / CAN',
    '180 minutes',
);

$movie_2 = new Movie(
    'Spider-Man',
    $genre_2,
    'US / CAN',
    '120 minutes',
);
var_dump($movie->getFullInfo());
var_dump($movie->genre->getFullGenre());

echo '<hr>';

var_dump($movie_2->getFullInfo());
var_dump($movie_2->genre->getFullGenre());
var_dump($movie_2?->name);


?>