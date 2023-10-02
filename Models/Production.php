<?php

class Production {

    public $name;
    public $genres;
    public $country;
    public $length;

    public function __construct(
        string $name,
        Genre $genres,
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

        $genre = $this->genres->getGenre();

        return "$this->name $this->country $genre $this->length";
    }
};

