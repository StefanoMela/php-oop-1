<?php
require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Movie.php';
require_once __DIR__ . '/Models/TvSerie.php';
require_once __DIR__ . '/Models/Genre.php';

$genre = new Genre(
    [
        'Horror',
        'Sci-Fi'
    ]
);

$genre_2 = new Genre(

    [
        'Drama',
    ],
);


$mixed = [

    new Movie(
        'Iron Man',
        new Genre(['Action - Comedy']),
        'US / CAN',
        '180 minuti',
        1993
    ),

    new Movie(
        'Spider-Man',
        $genre_2,
        'US / CAN',
        '120 minuti',
        2020
    ),

    new TvSerie(
        'Lost',
        $genre,
        'US',
        '50 minutes',
        2001,
        2010,
        10,
        10
    ),

    new TvSerie(
        'Dexter',
        $genre_2,
        'US',
        '50 minutes',
        2001,
        2010,
        10,
        10
    )

]

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- BootStrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Movies</title>
</head>

<body>
    <div class="container text-center">
        <h1>Film & Serie</h1>
        <div class="row g-3">
            <?php foreach ($mixed as $production) : ?>
                <div class="col-3">
                    <div class="card">
                        <div class="card-body">
                            <?= $production->getFullInfo() ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>