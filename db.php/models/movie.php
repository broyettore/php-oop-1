<?php

class Movie {
    public $movieType1;
    public $movieType2;
    public $movieType3;

    public function __construct(ActionMovie $_movieType1, HorrorMovie $_movieType2, AnimeMovie $_movieType3,)
    {
        $this->movieType1 = $_movieType1;
        $this->movieType2 = $_movieType2;
        $this->movieType3 = $_movieType3;
    }

    public function getBestMovie() {
        $movieList = [
            $this->movieType1,
            $this->movieType2,
            $this->movieType3,
        ];

        foreach($movieList as $movie) {
            if ($movie->vote > 4) {
                return $movie->name . " is the best rated out of the movies selected";
            }
        }
    }
};