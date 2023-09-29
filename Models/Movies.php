<?php
/**
 *  
 * Class Movie
 * Define a Movie
 * 
 * 
 */


class Movie {

    public $name;
    public $genre;
    public $country;
    public $length;

    public function __construct(
        string $name,
        string $genre,
        string $country,
        string $length,
    ) {
        $this->name = $name;
        $this->genre = $genre;
        $this->country = $country;
        $this->length = $length;
    }

    public function getFullInfo() 
    {
        return "$this->name $this->genre $this->country $this->length";
    }
};

?>