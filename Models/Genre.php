<?php

/**
 * 
 * Class Genre
 * Define movies' genre
 * 
 */


class Genre
{
    public $first_genre;
    public $second_genre;



    public function __construct(
        string $first_genre,
        string $second_genre,
    ) {

        $this->first_genre = $first_genre;
        $this->second_genre = $second_genre;
    }

    public function getFullGenre()
    {

        return "$this->first_genre // $this->second_genre";
    }
}
