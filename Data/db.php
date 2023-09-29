<?php 


require_once __DIR__ . '/../Models/Movies.php';
require_once __DIR__ . '/../Models/Genre.php';


$genre = new Genre(

    'Action',

);

$genre_2 = new Genre(

    'Sci-Fi',

);

$genre_3 = new Genre(

    'Drama',

);

$genre_4 = new Genre(

    'Horror',

);

$genre_5 = new Genre(

    'Biopic',

);

$genres = [

    $genre,
    $genre_2,
    $genre_3,
    $genre_4,
    $genre_5,

];


$movie = new Movie(
    'Iron Man',
    [$genre, $genre_2],
    'US / CAN',
    '180 minutes',
);

var_dump($movie);

$movie_2 = new Movie(
    'Spider-Man',
    [$genre_3, $genre_4],
    'US / CAN',
    '120 minutes',
);


$movies = [

    $movie,
    $movie_2
];

?>
