<?php
/**
 *  
 * Class Movie
 * Define a Movie
 * 
*/


class Movie {

    public  $name;
    public $genres;
    public $country;
    public $length;

    public function __construct(
        string $name,
        array $genres,
        string $country,
        string $length,
    ) {
        $this->name = $name;
        $this->genres = $genres;
        $this->country = $country;
        $this->length = $length;
    }


    public function getFullInfo()
    {
        return "$this->name $this->country $this->length";
    }
};

?>