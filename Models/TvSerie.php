<?php 

include_once __DIR__ . '/Production.php';
include_once __DIR__ . '/Genre.php';

class TvSerie extends Production {

    public $aired_on;
    public $last_aired;
    public $seasonal_episodes;
    public $numbers_of_season;

    public function __construct(
        string $name,
        Genre $genres,
        string $country,
        string $length,
        int $aired_on,
        int $last_aired,
        int $seasonal_episodes,
        int $numbers_of_season
    ) {

        parent::__construct(

            $name,
            $genres,
            $country,
            $length,
            $this->aired_on = $aired_on,
            $this->last_aired = $last_aired,
            $this->seasonal_episodes = $seasonal_episodes,
            $this->numbers_of_season = $numbers_of_season

        );

    }
    public function getFullInfo()
    {

        $genre = $this->genres->getGenre();

        return "$this->name $this->country $genre $this->length";
    }
}
