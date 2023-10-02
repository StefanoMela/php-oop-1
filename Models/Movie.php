<?php

require_once __DIR__ . '/Production.php';
require_once __DIR__ . '/Genre.php';

/**
 *  
 * Class Movie
 * Define a Movie
 * 
*/

class Movie extends Production {

    public $year;

    public function __construct(
        string $name,
        Genre $genres,
        string $country,
        string $length,
        int $year
    ) {
        parent::__construct(
            $name,
            $genres,
            $country,
            $length,
            $this->year = $year,
        );
    }

    public function getFullInfo()
    {

        $genre = $this->genres->getGenre();

        return "$this->name $this->country $genre $this->length $this->year";
    }

};
